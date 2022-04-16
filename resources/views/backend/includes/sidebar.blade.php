<div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto">
            <a class="navbar-brand" href="{{ route('home') }}"><span class="brand-logos">
                    <img src="" alt="">
            </a>
        </li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                    class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                    class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                    data-ticon="disc"></i></a></li>
    </ul>
</div>
<div class="shadow-bottom"></div>
<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                data-feather="more-horizontal"></i>
        </li>
        <li class=" nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center"
                href="{{ route('home') }}"><i data-feather="home"></i><span class="menu-title text-truncate"
                    data-i18n="Dashboard">Dashboard</span></a>
        </li>


        @can('user-permission-access-controll')
            <li
                class="nav-item 
            {{ request()->is('dashboard/teacher*') ? 'open' : '' }}
            {{ request()->is('dashboard/users*') ? 'open' : '' }}
            {{ request()->is('dashboard/roles*') ? 'open' : '' }}
            ">
                <a class="d-flex align-items-center {{ request()->is('dashboard/teacher*') ? 'active' : '' }}"
                    href="#"><i data-feather="shield-off"></i><span class="menu-title text-truncate"
                        data-i18n="Question">Access Control</span></a>

                <ul class="menu-content">
                    @can('user-list')
                        <li class="{{ request()->is('dashboard/users*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center " href="{{ route('users.index') }}"><i
                                    data-feather="users"></i><span class="menu-item text-truncate" data-i18n="Add">Users
                                </span></a>
                        </li>
                    @endcan

                    @can('role-list')
                        <li class="{{ request()->is('dashboard/roles*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('roles.index') }}"><i
                                    data-feather="key"></i><span class="menu-item text-truncate" data-i18n="Add">Roles
                                </span></a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan


    </ul>
</div>
