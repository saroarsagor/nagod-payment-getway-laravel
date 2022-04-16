<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Carbon\Carbon;
use Validator;

use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function register(Request $request)
    {
        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'mobile' => 'required|unique:users',
            'password' => 'required', 'string', 'password_confirmation',
        ]);

        $user = new User();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;

        //Otp generate
        $user->verify_code = rand(100000, 999999);
        $user->verify_expires_at = Carbon::now()->addMinutes(10);

        //coaching_no generate
        $new_id = User::max('id')+1;
        $admission_id = strlen($new_id);
        $admission_id = substr("000000",0,-$admission_id);
        $user->coaching_no = $admission_id.$new_id;

        if($request->password == $request->password_confirmation){
            $user->password = Hash::make($request->password);
            $user->syncRoles('coaching');
            if($user->save()){

                /*mobile send SMS*/
                $contact = $request->mobile;
                 $text = 'Congratulations! Your Verify Otp. '. $user->verify_code;
                 \App\Http\Controllers\SendSMSController::sendSMS($contact,$text);
               /* \App\Http\Controllers\SendSMSController::sendSMS( $request->mobile,$text);*/

                /*user id Session*/
                $id=$user->id;
                Session::put('coachinId',$id);
               
                Toastr::success('Please Check Your Mobile SMS Verify Code!.', 'Success');
                return redirect()->route('otp-verify');
            }else{
                Toastr::error('Something is wrong.. !', 'Error');
                return redirect()->route('register');
            }
        }
        else{
            Toastr::error('Password not matched...!', 'Error');
            return redirect()->route('register');
        }
    }
    
    protected function create(array $data)
    {
        //
    }
}
