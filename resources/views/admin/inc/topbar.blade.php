<div class="wrapper">

    <div class="top-bar">

        <nav aria-label="breadcrumb" class="-intro-x hidden xl:flex">
            {{--<ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item"><a href="#">App</a></li>
                <li class="breadcrumb-item"><a href="#">Administrator</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>--}}
        </nav>

        <div class="-intro-x xl:hidden mr-3 sm:mr-6">
            <div class="mobile-menu-toggler cursor-pointer"> <i data-lucide="bar-chart-2" class="mobile-menu-toggler__icon transform rotate-90 dark:text-slate-500"></i> </div>
        </div>

        <div class="intro-x relative ml-auto sm:mx-auto">


        </div>
        <!-- END: Search -->


        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown text-slate-200 h-10">
            <div class="h-full dropdown-toggle flex items-center" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <div class="w-10 h-10 image-fit">
                    <img alt="" class="rounded-full border-2 border-white border-opacity-10 shadow-lg" src="{{ displayImage(Auth::user()->image) }}">
                </div>
                <div class="hidden md:block ml-3">
                    <div class="max-w-[7rem] truncate font-medium">{{ Auth::user()->name }}</div>

                </div>
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content">
                    <li>
                        <a href="{{ myRoute('dashboard.profile') }}" class="dropdown-item"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> الملف الشخصي </a>
                    </li>

                    <li>
                        <a href="{{ myRoute('dashboard.settings') }}" class="dropdown-item"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> الاعدادات </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ myRoute('dashboard.logout') }}" id="logoutform">
                            @csrf
                        </form>
                        <a href="javascript:;" onclick="document.getElementById('logoutform').submit()" class="dropdown-item"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> تسجيل الخروج </a>
                     </li>
                </ul>
            </div>
        </div>

    </div>
