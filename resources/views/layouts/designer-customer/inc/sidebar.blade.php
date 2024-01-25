<!-- BEGIN: Side Menu -->
<nav style="right: 0;" class="side-nav">
    <div class="profile">
        <div class="profile-img">
            <img src="{{ displayImage(Auth::user()->image) }}" alt="" style="width: 90px;height:90px; border-radius :50%"  >
        </div>
        <div class="profile-info">
            <p class="name">{{ Auth::user()->name }}</p>
            <p class="email">{{ Auth::user()->email }}</p>
        </div>
    </div>
    <div class="side-nav__list">
        <div class="side-nav__list-wrapper">
        <ul class="side-nav__list-content">
            <li>
                <a href="{{ myRoute('customer.profile') }}" class="side-menu @if(routeName() == 'designer.profile') side-menu--active @endif ">
                    <div class="side-menu__icon"> <i data-lucide="trello"></i> </div>
                    <div class="side-menu__title"> الصفحة الشخصية </div>
                </a>
            </li>
            <li style="text-align: right;" class="side-nav__devider mb-4 dir-rtl">قائمة المصمم</li>

            <li>
                <a href="{{ myRoute('designer.') }}" class="side-menu @if(routeName() == 'designer.') side-menu--active @endif " >
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        احصائياتك
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ myRoute('designer.payments') }}" class="side-menu @if(routeName() == 'designer.payments') side-menu--active @endif " >
                    <div class="side-menu__icon"> <i data-lucide="landmark"></i> </div>
                    <div class="side-menu__title">
                        سحب الاموال
                    </div>
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
            <li style="text-align: right;" class="side-nav__devider mb-4 dir-rtl">قائمة العميل</li>
            <li>
                <a href="{{ myRoute('customer.') }}" class="side-menu @if(routeName() == 'customer.') side-menu--active @endif " >
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        لوحة التحكم
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ myRoute('customer.projects') }}" class="side-menu @if( routeName() == 'designer.tickets.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                    <div class="side-menu__title">
                        مشاريعي
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ myRoute('customer.designs') }}" class="side-menu @if( routeName() == 'designer.tickets.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                    <div class="side-menu__title">
                        تصميماتي
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ myRoute('customer.payment') }}" class="side-menu @if( routeName() == 'designer.tickets.index') side-menu--active @endif">
                    <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                    <div class="side-menu__title">
                        سجلات الدفع
                    </div>
                </a>
            </li>
            <li style="text-align: right;" class="side-nav__devider mb-4 dir-rtl">قائمة المسوق</li>

            <li>
                <a href="{{ myRoute('affiliate.') }}" class="side-menu @if(routeName() == 'affiliate.') side-menu--active @endif " >
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        لوحة التحكم
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ myRoute('designer.') }}" class="side-menu @if(routeName() == 'designer.') side-menu--active @endif " >
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        احصائياتك
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
</nav>
