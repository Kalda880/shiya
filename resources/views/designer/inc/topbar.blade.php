<!-- BEGIN: Top Bar -->
<div class="top-bar" dir="rtl">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x hidden xl:flex">
        <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="#">شية</a></li>
            <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
            <li>
                @include('designer.inc.list-roles')    
            </li>

        </ol>
    </nav>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Mobile Menu -->
    <div class="-intro-x xl:hidden mr-3 sm:mr-6">
        <div class="mobile-menu-toggler cursor-pointer"> <i data-lucide="bar-chart-2" class="mobile-menu-toggler__icon transform rotate-90 dark:text-slate-500"></i> </div>
    </div>
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown mr-auto sm:ml-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
        <div class="notification-content pt-2 dropdown-menu">
            <div class="notification-content__box dropdown-content">
                <div class="notification-content__title">الاشعارات</div>
                {{--<div class="cursor-pointer relative flex ">
                    <div class="w-10 h-10 flex-none image-fit mr-1">
                        <img alt="" class="rounded-full" src="dist/images/profile-9.jpg">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <div class="ml-2">
                        <a href="javascript:;" class="font-medium mr-1">Johnny Depp</a> <span class="text-slate-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </span>
                        <div class="text-xs text-slate-400 mt-1">01:10 PM</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex mt-5">
                    <div class="w-10 h-10 flex-none image-fit mr-1">
                        <img alt="" class="rounded-full" src="dist/images/profile-2.jpg">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <div class="ml-2">
                        <a href="javascript:;" class="font-medium mr-1">Denzel Washington</a> <span class="text-slate-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</span>
                        <div class="text-xs text-slate-400 mt-1">01:10 PM</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex mt-5">
                    <div class="w-10 h-10 flex-none image-fit mr-1">
                        <img alt="" class="rounded-full" src="dist/images/profile-15.jpg">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <div class="ml-2">
                        <a href="javascript:;" class="font-medium mr-1">Kevin Spacey</a> <span class="text-slate-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</span>
                        <div class="text-xs text-slate-400 mt-1">03:20 PM</div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown text-slate-200 h-10">
        <div class="h-full dropdown-toggle flex items-center" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <div class="w-10 h-10 image-fit">
                <img alt="" class="rounded-full border-2 border-white border-opacity-10 shadow-lg" src="{{ Auth::user()->image ? displayImage(Auth::user()->image) : 'https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y' }}">
            </div>
            <div class="hidden md:block ml-3">
                <div class="max-w-[7rem] truncate font-medium">{{ Auth::user()->name }}</div>
            </div>
        </div>
        <div class="dropdown-menu w-56">
            <ul style="text-align: right;direction: rtl;" class="dropdown-content">
                <li>
                    <a href="{{ myRoute('designer.profile') }}" class="dropdown-item"> <i data-lucide="user" class="w-4 h-4 ml-2"></i> الصفحة الشخصية </a>
                </li>
                <!--<li>-->
                <!--    <a href="reset_password.html" class="dropdown-item"> <i data-lucide="lock" class="w-4 h-4 ml-2"></i>  </a>-->
                <!--</li>-->
                <li>
                    <a href="support.html" class="dropdown-item"> <i data-lucide="help-circle" class="w-4 h-4 ml-2"></i> المساعده </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form method="POST" action="{{ myRoute('logout') }}">
                        @csrf
                        <a href="{{ myRoute('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();" class="dropdown-item"> <i data-lucide="toggle-right" class="w-4 h-4 ml-2"></i> تسجيل الخروج </a>
                    </form>


                </li>
            </ul>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->
