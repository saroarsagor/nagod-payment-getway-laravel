@extends('layouts.app')
@section('title')
    সাইন-আপ | আমার স্টুডেন্ট
@endsection
@section('styles')
    <style>
        .login-reigstration-logo img {
            width: 200px;
        }

        .faq-accordion {
            padding: 30px 30px;
        }

        .custom-card {
            min-height: 650px;
        }

        @media (max-width: 767px) {
            .custom-card {
                min-height: 450px;
            }

            .faq-accordion {
                margin: 20px 10px;
            }
        }

    </style>
@endsection

@section('content')
    <section class="faq-area ptb-80 mt-5 login-page">
        <div class="container">
            <div class="row">
                <div class="col-md-7 p-0 m-0">
                    <div class="faq-accordion pb-5 custom-card">
                        <div id="toggleBtn1" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">আমি কিভাবে শুরু করতে পারি?</p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText1">
                            <p>
                                আমার স্টুডেন্ট ব্যবহার করার জন্য আপনাকে অবশ্যই নিবন্ধন করতে হবে নিবন্ধন আপনি মোবাইল অ্যাপ
                                ব্যবহার
                                করে বা ওয়েব সাইট ব্রাউজ করে কম্পিউটারের মাধ্যমে খুব সহজেই করতে পারবেন ।
                            </p>
                        </div>

                        <div id="toggleBtn2" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">আমাকে প্রতি মাসে কত পেমেন্ট করতে হবে ?</p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText2">
                            <p>
                                আপনাকে প্রতি মাসে সফটওয়্যারটি ব্যবহারের জন্য ২৫০ টাকা সার্ভিস চার্জ প্রদান করতে হবে। আমাদের
                                মাসিক
                                প্যাকেজ টি 30 দিনের জন্য হয় ।
                            </p>
                        </div>

                        <div id="toggleBtn3" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">
                                        আমি কি মাসিক ছাড়া আরো বেশি সময়ের জন্য কোন প্যাকেজ কিনতে পারব
                                        ?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText3">
                            <p>
                                আপনি মাসিক প্যাকেজ টি বাদ দিয়েও আমাদের অর্ধ বার্ষিক ও বাৎসরিক প্যাকেজটি নিয়ে দেখতে পারেন
                                আমাদের
                                অর্ধবার্ষিক প্যাকেজটি 180 দিনের হয়, যার মূল্য 1200 টাকা এবং বাৎসরিক প্যাকেজটি 365 দিনের
                                হয়, যার
                                মূল্য 2000 টাকা।
                            </p>
                        </div>

                        <div id="toggleBtn4" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">আমি কি ট্রায়াল নিয়ে দেখতে পারি ?</p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText4">
                            <p>
                                অবশ্যই আপনি ট্রায়াল নিয়ে দেখতে পারেন। ট্রায়াল ব্যবহার করতে প্রমোশনাল কোড ব্যবহার করুন
                                trial । এই
                                কোডটি ব্যবহার করলে আপনি তিন দিন ট্রায়াল হিসাবে আমার স্টুডেন্ট ব্যবহার করতে পারবেন।
                            </p>
                        </div>

                        <div id="toggleBtn5" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">
                                        আমি কি প্রিন্টার ব্যবহার করে কাস্টমারদের কে ইনভয়েস অথবা
                                        বিল দিতে পারি ?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText5">
                            <p>
                                অবশ্যই আপনার যদি প্রিন্টার থাকে তবে খুব সহজেই আমার স্টুডেন্ট এর মাধ্যমে রশিদ অথবা বিল
                                প্রিন্ট করে
                                ছাত্রদেরকে প্রদান করতে পারবেন।
                            </p>
                        </div>

                        <div id="toggleBtn6" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">
                                        আমি যদি সফটওয়্যারটি ব্যবহার করতে গিয়ে কোন সমস্যায় পড়ি
                                        তাহলে কিভাবে সমাধান করতে পারি ?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText6">
                            <p>
                                আপনি যদি আমার স্টুডেন্ট ব্যবহার করতে গিয়ে কোন সমস্যায় পড়েন তবে আমাদের সাথে ইমেইলের
                                মাধ্যমে অথবা
                                সরাসরি ফোন করে কাস্টমার কেয়ার এক্সিকিউটিভ এর মাধ্যমে খুব সহজে সমস্যাটির সমাধান করতে পারেন।
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 faq-accordion">
                    <a class="w-100 text-center float-left d-block login-reigstration-logo" href="/"><img
                            src="{{ asset('frontend/images/logo.png') }}" alt="Logo" class="logo"></a>
                    <div class="login-input mt-3">

                        <h4 class="text-capitalize mb-5 text-center">আমার স্টুডেন্টে আপনাকে স্বাগতম</h4>


                        <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="register-username">
                                    কোচিং নাম
                                </label>
                                <input class="form-control" id="register-username" type="text" name="name"
                                    placeholder="Coaching Name" aria-describedby="register-username" autofocus=""
                                    tabindex="1" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="register-email">ইমেইল</label>
                                <input class="form-control" id="register-email" type="text" name="email"
                                    placeholder="user@example.com" aria-describedby="register-email" tabindex="2" />
                            </div>

                              <div class="form-group">
                                <label class="form-label" for="register-email">মোবাইল নম্বর</label>
                                <input class="form-control" id="register-mobile" type="mobile" name="mobile"
                                    placeholder="01700000000" aria-describedby="register-mobile" tabindex="3" />
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="register-password">পাসওয়ার্ড</label>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input class="form-control form-control-merge" id="register-password" type="password"
                                        name="password" placeholder="············" aria-describedby="register-password"
                                        tabindex="4" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="register-password">কন্ফার্ম পাসওয়ার্ড</label>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input class="form-control form-control-merge" id="register-password" type="password"
                                        name="password_confirmation" placeholder="············"
                                        aria-describedby="register-password" tabindex="4" />

                                </div>
                            </div>

                            <button class="sign-in-btn rounded" type="submit">রেজিস্টার করুন</button>
                            <p class="text-center create-account-text pb-0 mb-0">অলরেডি একাউন্ট আছে ? <a
                                    href="{{ route('login') }}">লগইন করুন
                                </a></p>
                            {{-- <br>Or --}}
                            <p class="text-center create-account-text">পাসওয়ার্ড ভুলে গেছেন ? <a class=" text-danger"
                                    href="{{ route('password.request') }}">ক্লিক করুন
                                </a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
