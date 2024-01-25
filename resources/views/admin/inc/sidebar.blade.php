<nav class="side-nav">
    <div class="pt-4 mb-4">
        <div class="side-nav__header flex items-center">
            <a href="" class="intro-x flex items-center">
                <img alt="شية" class="side-nav__header__logo" height="48" width="48" src="{{ url('/assets/logo/512.svg') }}">
                {{--<span class="side-nav__header__text text-white pt-0.5 text-lg ml-2.5"> {{ $setting->title }} </span>--}}
            </a>
            <a href="javascript:;" class="side-nav__header__toggler hidden xl:block ms-auto text-white text-opacity-70 hover:text-opacity-100 transition-all duration-300 ease-in-out pr-5"> <i data-lucide="arrow-left-circle" class="w-5 h-5"></i> </a>
            <a href="javascript:;" class="mobile-menu-toggler xl:hidden ms-auto text-white text-opacity-70 hover:text-opacity-100 transition-all duration-300 ease-in-out pr-5"> <i data-lucide="x-circle" class="w-5 h-5"></i> </a>
        </div>
    </div>
    <div class="scrollable">
        <ul class="scrollable__content">

            <li>
                <a href="{{ myRoute('dashboard.') }}" class="side-menu @if( routeName() == 'dashboard.') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        لوحة التحكم
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ myRoute('dashboard.category.index') }}" class="side-menu @if( routeName() == 'dashboard.category.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="clipboard-list"></i> </div>
                    <div class="side-menu__title"> {{trans('messages.departments')}} </div>
                </a>
            </li>
            <li>
                <a href="{{ myRoute('dashboard.designer.payments') }}" class="side-menu @if( routeName() == 'dashboard.tag.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="tag"></i> </div>
                    <div class="side-menu__title">  طلبات سحب </div>
                </a>
            </li>
            <li>
                <a href="{{ myRoute('dashboard.tag.index') }}" class="side-menu @if( routeName() == 'dashboard.tag.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="tag"></i> </div>
                    <div class="side-menu__title"> الوسوم </div>
                </a>
            </li>

            <li>
                <a href="{{ myRoute('dashboard.ticket.index') }}" class="side-menu @if( routeName() == 'dashboard.ticket.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="ticket"></i> </div>
                    <div class="side-menu__title"> التذاكر </div>
                </a>
            </li>

            <li>
                <a href="{{ myRoute('dashboard.coupon.index') }}" class="side-menu @if( routeName() == 'dashboard.coupon.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="shopping-cart"></i> </div>
                    <div class="side-menu__title"> الكوبونات </div>
                </a>
            </li>

            <li>
                <a href="{{ myRoute('dashboard.skill.index') }}" class="side-menu @if( routeName() == 'dashboard.skill.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="locate-fixed"></i> </div>
                    <div class="side-menu__title"> المهارات </div>
                </a>
            </li>

            <li>
                <a href="javascript:;" class="side-menu @if( routeName() == 'dashboard.designer.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="aperture"></i> </div>
                    <div class="side-menu__title">
                        المصممين
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ myRoute('dashboard.designer.create') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="user-plus"></i> </div>
                            <div class="side-menu__title"> اضافة جديد </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ myRoute('dashboard.designer.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="layout-list"></i> </div>
                            <div class="side-menu__title"> قائمة المصممين </div>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="{{ myRoute('dashboard.customer.index') }}" class="side-menu @if( routeName() == 'dashboard.customer.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                    <div class="side-menu__title">
                        المستخدمين
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ myRoute('dashboard.affiliate.index') }}" class="side-menu @if( routeName() == 'dashboard.affiliate.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="facebook"></i> </div>
                    <div class="side-menu__title">
                        المسوقين
                    </div>
                </a>
            </li>
            

            <li>
                <a href="{{ myRoute('dashboard.custom') }}" class="side-menu @if( routeName() == 'dashboard.custom') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="image-plus"></i> </div>
                    <div class="side-menu__title">
                        طلب مخصص
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ myRoute('dashboard.contact') }}" class="side-menu @if( routeName() == 'dashboard.contact') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="phone"></i> </div>
                    <div class="side-menu__title">
                        تواصل معنا
                    </div>
                </a>
            </li>


            <li>
                <a href="{{ myRoute('dashboard.design.index') }}" class="side-menu @if( routeName() == 'dashboard.design.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="image"></i> </div>
                    <div class="side-menu__title">
                        التصميمات
                        <div class="side-menu__sub-icon ">
                            @if ($pending > 0)
                            <span class="btn btn-danger btn-sm"> {{ $pending }} </span>
                            @endif

                        </div>
                    </div>
                </a>
            </li>
{{--
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                    <div class="side-menu__title">
                        التسوق
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> {{trans('messages.email')}}  </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> الرسالة النصية</div>
                        </a>
                    </li>

                </ul>
            </li>  --}}
{{--
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                    <div class="side-menu__title">
                        اتقار
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">

                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> التصميمات </div>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> المدفوعات </div>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> المصممين </div>
                        </a>
                    </li>

                </ul>
            </li>  --}}


            <li>
                <a href="{{ myRoute('dashboard.payment.index') }}" class="side-menu @if( routeName() == 'dashboard.payment.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="credit-card"></i> </div>
                    <div class="side-menu__title">
                        المدفوعات
                    </div>
                </a>
            </li>



            <li>
                <a href="javascript:;" class="side-menu @if( routeName() == 'dashboard.settings') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                    <div class="side-menu__title">
                        الإعدادات
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ myRoute('dashboard.site_settings') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="settings-2"></i> </div>
                            <div class="side-menu__title"> اعدادت عامة </div>
                        </a>
                    </li>

                </ul>
            </li>




        </ul>
    </div>
</nav>
