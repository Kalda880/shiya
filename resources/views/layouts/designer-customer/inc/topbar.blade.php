<!-- BEGIN: Top Bar -->
<div class="top-bar" dir="rtl">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="navbarr -intro-x hidden md:flex">
        <div class="navbar-container">
        <div class="navbar-content">
            <div class="logo">
                <a href="{{ url('/') }}">
                <img src="{{url('/assets/logo/transparent-128.svg')}}" height="60" width="60" />
                </a>
            </div>
        <div class="nav-titles">
            <ul class="nav-list" id="nav-list">
                <li class="nav-item {{request()->is('/')?'active':''}}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.503" height="21.135"
                            viewBox="1.245 1.425 21.503 21.135">
                            <g data-name="vuesax/outline/home">
                                <g data-name="home">
                                    <path
                                        d="M12 18.75c-.41 0-.75-.34-.75-.75v-3c0-.41.34-.75.75-.75s.75.34.75.75v3c0 .41-.34.75-.75.75Z"
                                        fill-rule="evenodd" data-name="Vector" />
                                    <path
                                        d="M17.6 22.56H6.4c-1.82 0-3.48-1.4-3.78-3.19L1.29 11.4c-.22-1.24.39-2.83 1.38-3.62L9.6 2.23c1.34-1.08 3.45-1.07 4.8.01l6.93 5.54c.98.79 1.58 2.38 1.38 3.62l-1.33 7.96c-.3 1.77-2 3.2-3.78 3.2ZM11.99 2.93c-.53 0-1.06.16-1.45.47L3.61 8.96c-.56.45-.96 1.49-.84 2.2l1.33 7.96c.18 1.05 1.23 1.94 2.3 1.94h11.2c1.07 0 2.12-.89 2.3-1.95l1.33-7.96c.11-.7-.29-1.76-.84-2.2l-6.93-5.54c-.4-.32-.94-.48-1.47-.48Z"
                                        fill-rule="evenodd" data-name="Vector" />
                                </g>
                            </g>
                        </svg>
                    </span>
                 <a href="{{ url('/') }}">   الرئيسة</a></li>
                <li class="nav-item {{request()->route()->named('template')?'active':''}}">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5"
                            viewBox="1518.25 34.25 21.5 21.5">
                            <g data-name="element-4/outline">
                                <g data-name="vuesax/outline/element-4">
                                    <g data-name="element-4">
                                        <path
                                            d="M1536.77 46.75h-4.04c-2.01 0-2.98-.93-2.98-2.85v-6.8c0-1.92.98-2.85 2.98-2.85h4.04c2.01 0 2.98.93 2.98 2.85v6.8c0 1.92-.98 2.85-2.98 2.85Zm-4.04-11c-1.27 0-1.48.34-1.48 1.35v6.8c0 1.01.21 1.35 1.48 1.35h4.04c1.27 0 1.48-.34 1.48-1.35v-6.8c0-1.01-.21-1.35-1.48-1.35h-4.04ZM1536.77 55.75h-4.04c-2.01 0-2.98-.93-2.98-2.85v-1.8c0-1.92.98-2.85 2.98-2.85h4.04c2.01 0 2.98.93 2.98 2.85v1.8c0 1.92-.98 2.85-2.98 2.85Zm-4.04-6c-1.27 0-1.48.34-1.48 1.35v1.8c0 1.01.21 1.35 1.48 1.35h4.04c1.27 0 1.48-.34 1.48-1.35v-1.8c0-1.01-.21-1.35-1.48-1.35h-4.04ZM1525.27 55.75h-4.04c-2.01 0-2.98-.93-2.98-2.85v-6.8c0-1.92.98-2.85 2.98-2.85h4.04c2.01 0 2.98.93 2.98 2.85v6.8c0 1.92-.98 2.85-2.98 2.85Zm-4.04-11c-1.27 0-1.48.34-1.48 1.35v6.8c0 1.01.21 1.35 1.48 1.35h4.04c1.27 0 1.48-.34 1.48-1.35v-6.8c0-1.01-.21-1.35-1.48-1.35h-4.04ZM1525.27 41.75h-4.04c-2.01 0-2.98-.93-2.98-2.85v-1.8c0-1.92.98-2.85 2.98-2.85h4.04c2.01 0 2.98.93 2.98 2.85v1.8c0 1.92-.98 2.85-2.98 2.85Zm-4.04-6c-1.27 0-1.48.34-1.48 1.35v1.8c0 1.01.21 1.35 1.48 1.35h4.04c1.27 0 1.48-.34 1.48-1.35v-1.8c0-1.01-.21-1.35-1.48-1.35h-4.04Z"
                                            fill-rule="evenodd" data-name="Vector" />
                                    </g>
                                </g>
                            </g>
                        </svg></span>
                    <a href="{{ myRoute('template') }}">{{trans('messages.departments')}}</a>
                </li>

                <li class="nav-item  {{request()->route()->named('contact')?'active':''}}">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="21.49" height="21.53"
                            viewBox="1270.25 34.25 21.49 21.53">
                            <g data-name="messages/outline">
                                <g data-name="vuesax/outline/messages">
                                    <g data-name="messages">
                                        <path
                                            d="M1278.99 55.78c-.6 0-1.17-.3-1.56-.83l-1.2-1.6c0 .01-.05-.02-.07-.02h-.37c-3.42 0-5.54-.93-5.54-5.54v-4c0-4.21 2.57-5.31 4.73-5.5.24-.03.52-.04.81-.04h6.4c3.62 0 5.54 1.92 5.54 5.54v4c0 .29-.01.57-.05.84-.18 2.13-1.28 4.7-5.49 4.7h-.4l-1.24 1.62c-.39.53-.96.83-1.56.83Zm-3.2-16.03c-.23 0-.45.01-.66.03-2.32.2-3.38 1.47-3.38 4.01v4c0 3.43 1.06 4.04 4.04 4.04h.4c.45 0 .96.25 1.24.61l1.2 1.61c.22.3.5.3.72 0l1.2-1.6c.29-.39.75-.62 1.24-.62h.4c2.54 0 3.81-1.07 4-3.35.03-.24.04-.46.04-.69v-4c0-2.79-1.25-4.04-4.04-4.04h-6.4Z"
                                            fill-rule="evenodd" data-name="Vector" />
                                        <path
                                            d="M1278.99 47.19c-.56 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.44 1-1 1ZM1282.19 47.19c-.56 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1ZM1275.8 47.19c-.56 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1Z"
                                            fill-rule="evenodd" data-name="Vector" />
                                        <path
                                            d="M1286.94 49.29c-.2 0-.4-.08-.54-.23a.727.727 0 0 1-.2-.61c.03-.21.04-.43.04-.66v-4c0-2.79-1.25-4.04-4.04-4.04h-6.4c-.23 0-.45.01-.66.03a.76.76 0 0 1-.61-.2.762.762 0 0 1-.23-.6c.18-2.16 1.29-4.73 5.5-4.73h6.4c3.62 0 5.54 1.92 5.54 5.54v4c0 4.21-2.57 5.31-4.73 5.5h-.07Zm-11.02-11.04h6.27c3.62 0 5.54 1.92 5.54 5.54v3.87c1.7-.42 2.5-1.67 2.5-3.87v-4c0-2.79-1.25-4.04-4.04-4.04h-6.4c-2.2 0-3.44.8-3.87 2.5Z"
                                            fill-rule="evenodd" data-name="Vector" />
                                    </g>
                                </g>
                            </g>
                        </svg></span>
                <a href="{{ myRoute('contact') }}">    الدعم</a>
                </li>


                <li class="nav-item  {{request()->route()->named('customrequst')?'active':''}}">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="21.49" height="21.53"
                            viewBox="1270.25 34.25 21.49 21.53">
                            <g data-name="messages/outline">
                                <g data-name="vuesax/outline/messages">
                                    <g data-name="messages">
                                        <path
                                            d="M1278.99 55.78c-.6 0-1.17-.3-1.56-.83l-1.2-1.6c0 .01-.05-.02-.07-.02h-.37c-3.42 0-5.54-.93-5.54-5.54v-4c0-4.21 2.57-5.31 4.73-5.5.24-.03.52-.04.81-.04h6.4c3.62 0 5.54 1.92 5.54 5.54v4c0 .29-.01.57-.05.84-.18 2.13-1.28 4.7-5.49 4.7h-.4l-1.24 1.62c-.39.53-.96.83-1.56.83Zm-3.2-16.03c-.23 0-.45.01-.66.03-2.32.2-3.38 1.47-3.38 4.01v4c0 3.43 1.06 4.04 4.04 4.04h.4c.45 0 .96.25 1.24.61l1.2 1.61c.22.3.5.3.72 0l1.2-1.6c.29-.39.75-.62 1.24-.62h.4c2.54 0 3.81-1.07 4-3.35.03-.24.04-.46.04-.69v-4c0-2.79-1.25-4.04-4.04-4.04h-6.4Z"
                                            fill-rule="evenodd" data-name="Vector" />
                                        <path
                                            d="M1278.99 47.19c-.56 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.44 1-1 1ZM1282.19 47.19c-.56 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1ZM1275.8 47.19c-.56 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1Z"
                                            fill-rule="evenodd" data-name="Vector" />
                                        <path
                                            d="M1286.94 49.29c-.2 0-.4-.08-.54-.23a.727.727 0 0 1-.2-.61c.03-.21.04-.43.04-.66v-4c0-2.79-1.25-4.04-4.04-4.04h-6.4c-.23 0-.45.01-.66.03a.76.76 0 0 1-.61-.2.762.762 0 0 1-.23-.6c.18-2.16 1.29-4.73 5.5-4.73h6.4c3.62 0 5.54 1.92 5.54 5.54v4c0 4.21-2.57 5.31-4.73 5.5h-.07Zm-11.02-11.04h6.27c3.62 0 5.54 1.92 5.54 5.54v3.87c1.7-.42 2.5-1.67 2.5-3.87v-4c0-2.79-1.25-4.04-4.04-4.04h-6.4c-2.2 0-3.44.8-3.87 2.5Z"
                                            fill-rule="evenodd" data-name="Vector" />
                                    </g>
                                </g>
                            </g>
                        </svg></span>
                <a href="{{ myRoute('customrequst') }}">    طلب مخصص</a>
                </li>
                
            </ul>
        </div>
        </div>
        </div>
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
