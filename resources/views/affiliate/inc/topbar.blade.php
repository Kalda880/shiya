<!-- BEGIN: Top Bar -->
<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x hidden xl:flex">

    </nav>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Mobile Menu -->
    <div class="-intro-x xl:hidden mr-3 sm:mr-6">
        <div class="mobile-menu-toggler cursor-pointer"> <i data-lucide="bar-chart-2" class="mobile-menu-toggler__icon transform rotate-90 dark:text-slate-500"></i> </div>
    </div>
    <!-- END: Mobile Menu -->


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
            <ul style="text-align: right;direction: rtl;" class="dropdown-content">
                <li>
                    <a href="{{ myRoute('affiliate.') }}" class="dropdown-item"> <i data-lucide="user" class="w-4 h-4 ml-2"></i> الصفحة الشخصية </a>
                </li>

                <li>
                    <a href="{{ myRoute('affiliate.profile') }}" class="dropdown-item"> <i data-lucide="user" class="w-4 h-4 ml-2"></i>  تعديل الملف الشخصي </a>
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
