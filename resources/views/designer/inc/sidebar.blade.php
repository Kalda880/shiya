<!-- BEGIN: Side Menu -->
<nav style="right: 0;" class="side-nav">
    <div class="pt-4 mb-4">
        <div class="side-nav__header flex items-center">
            <a href="" class="intro-x flex items-center">
                <img alt="" class="side-nav__header__logo" height="48" width="48" src="{{ url('/assets/logo/transparent-512.svg') }}">
                {{--<span class="side-nav__header__text text-white pt-0.5 text-lg ml-2.5"> شية </span>--}}
            </a>
            <a href="javascript:;" class="side-nav__header__toggler hidden xl:block ml-auto text-white text-opacity-70 hover:text-opacity-100 transition-all duration-300 ease-in-out pr-5"> <i data-lucide="arrow-left-circle" class="w-5 h-5"></i> </a>
            <a href="javascript:;" class="mobile-menu-toggler xl:hidden ml-auto text-white text-opacity-70 hover:text-opacity-100 transition-all duration-300 ease-in-out pr-5"> <i data-lucide="x-circle" class="w-5 h-5"></i> </a>
        </div>
    </div>
    <div class="scrollable">
        <ul class="scrollable__content">
            <li style="text-align: right;" class="side-nav__devider mb-4 dir-rtl">قائمة الخدمات</li>

            <li>
                <a href="{{ myRoute('designer.') }}" class="side-menu @if(routeName() == 'designer.') side-menu--active @endif " >
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        لوحة التحكم
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ myRoute('designer.profile') }}" class="side-menu @if(routeName() == 'designer.profile') side-menu--active @endif ">
                    <div class="side-menu__icon"> <i data-lucide="trello"></i> </div>
                    <div class="side-menu__title"> الصفحة الشخصية </div>
                </a>
            </li>

            <li>
                <a href="javascript:;.html" class="side-menu @if(routeName() == 'designer.designs.create' || routeName() == 'designer.designs.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                    <div class="side-menu__title">
                        تصاميمك
                        <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="side-menu__sub">
                    <li>
                        <a href="{{ myRoute('designer.designs.create') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="edit"></i> </div>
                            <div class="side-menu__title"> اضافة تصميم </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ myRoute('designer.designs.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="edit"></i> </div>
                            <div class="side-menu__title"> تصميماتك </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ myRoute('designer.finance.index') }}" class="side-menu @if( routeName() == 'designer.finance.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="wallet"></i> </div>
                    <div class="side-menu__title"> المعاملات المالية </div>
                </a>
            </li>

            <li>
                <a href="{{ myRoute('designer.tickets.index') }}" class="side-menu @if( routeName() == 'designer.tickets.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                    <div class="side-menu__title">
                        تواصل مع الدعم
                    </div>
                </a>
            </li>

        </ul>
    </div>
</nav>
