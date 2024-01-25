<div class="offcanvas offcanvas-end drawer" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mobil-nav">
    @if(Auth::guard('site_users')->check())
    <div class="account logged-in ">
            <div class="notlogged">
                <div class="btn-new">  
              <a data-bs-target="#create-account" data-bs-toggle="modal">{{trans('messages.new-account')}}</a>
        </div>
                <div class="btn-new">
                <a data-bs-target="#login-modal" data-bs-toggle="modal">{{trans('messages.login')}}</a>
                </div>
            </div>
            <div class="logged d-flex" style="display: flex; width: auto;">
            <span>
                <img class="avatar-drawer" src="{{ displayImage(Auth::guard('site_users')->user()->image) }}" style="border-radius: 50%;
                width:60px  !important ;
                height:60px !important ;" 
                alt="">
            </span>
                <a href="{{myRoute('customer.profile')}}" class="me-2"> {{trans('messages.settings-account')}}</a>
            </div>
        </div>
  @else
  <div class="account">
           <div class="notlogged">
           {{--     <div class="btn-new">
                  <a data-bs-target="#create-account" data-bs-toggle="modal">

                        {{trans('messages.new-account')}} </a>
                </div>
                <div class="btn-new">
                    <a data-bs-target="#login-modal" data-bs-toggle="modal">

                        {{trans('messages.login')}}
                    </a>
                </div>
            --}}
          </div>
            <div class="logged " style="width: auto;">
                <span>
                    <img src="/assets/images/profile.png" width="60px" height="60px" alt="">
                </span>
             <a href="{{myRoute('customer.profile')}}" class="me-2"> {{trans('messages.settings-account')}}</a>
            </div>
        </div>
    @endif
        <div class="nav-titles mt-4" >
            <ul class="nav-list" id="nav-list">
                @if(!Auth::guard('site_users')->check())
                                            <li class="nav-item">
                                                <span>
                                                    <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                                                 <a  data-bs-target="#create-account" data-bs-toggle="modal"> حساب جديد</a>
                                            </li>
                                            <li class="nav-item">
                                                <span>
                                                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>    
                                                </span>                                      
                                                 <a data-bs-target="#login-modal" data-bs-toggle="modal">تسجيل الدخول</a>
                                            </li>
                    <hr/>

                @endif
                <li class="nav-item mt-5 {{request()->is('/')?'active':''}}"><span>
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
                        </svg></span>
                        <a href="/">{{trans('messages.home')}}</a>

                </li>
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
                    <a href="{{ myRoute('template')}}">{{trans('messages.departments')}}</a>
                </li>
                <li class="nav-item {{request()->route()->named('customrequst')?'active':''}}">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="19.958" height="19.966"
                            viewBox="1434.025 -29.986 19.958 19.966">
                            <g data-name="tag-2/outline">
                                <g data-name="vuesax/outline/tag-2">
                                    <g data-name="tag-2">
                                        <path
                                            d="M1444.07-10.02c-1.41 0-2.83-.54-3.9-1.61l-4.53-4.53a5.548 5.548 0 0 1-1.61-4.17l.24-5.01c.11-2.39 2-4.28 4.4-4.4l5-.24c1.56-.07 3.07.51 4.17 1.61l4.53 4.53a5.535 5.535 0 0 1 0 7.81l-4.39 4.39a5.504 5.504 0 0 1-3.91 1.62Zm-7.37-7.21 4.53 4.53a4.026 4.026 0 0 0 5.69 0l4.39-4.39a4.026 4.026 0 0 0 0-5.69l-4.54-4.52a4.02 4.02 0 0 0-3.04-1.17l-5 .24a3.092 3.092 0 0 0-2.97 2.96l-.24 5.01c-.05 1.12.38 2.23 1.18 3.03Z"
                                            fill-rule="evenodd" data-name="Vector" />
                                        <path
                                            d="M1441.5-19.25c-1.79 0-3.25-1.46-3.25-3.25s1.46-3.25 3.25-3.25 3.25 1.46 3.25 3.25-1.46 3.25-3.25 3.25Zm0-5c-.96 0-1.75.79-1.75 1.75s.79 1.75 1.75 1.75 1.75-.79 1.75-1.75-.79-1.75-1.75-1.75ZM1445-14.25c-.19 0-.38-.07-.53-.22a.754.754 0 0 1 0-1.06l4-4c.29-.29.77-.29 1.06 0 .29.29.29.77 0 1.06l-4 4c-.15.15-.34.22-.53.22Z"
                                            fill-rule="evenodd" data-name="Vector" />
                                    </g>
                                </g>
                            </g>
                        </svg></span>
                     <a href="{{ myRoute('customrequst')}}"> طلب مخصص</a>
                </li>
                <li class="nav-item {{request()->route()->named('contact')?'active':''}}">
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
                        <a href="{{ myRoute('contact')}}"> ادعم</a>
                </li>
            @if(Auth::guard('site_users')->check())
            
                <li class="nav-item">
                <form method="POST" action="{{ myRoute('logout') }}">
                    @csrf 
                     <i data-lucide="toggle-right" class="w-4 h-4 ml-2"></i>
                            <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                                 viewBox="0 0 512 512" class="rotate-180"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                </span><a href="{{ myRoute('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();" >{{trans('messages.logout')}}</a>
                </form>
            </li>
         @else
    @endif

                
                <!--<li class="nav-item">-->
                <!--    <div class="btnn">-->
                <!--        <a href="">-->
                <!--            <span><svg xmlns="http://www.w3.org/2000/svg" width="19.857" height="16.753"-->
                <!--                    viewBox="2.068 2.227 19.857 16.753">-->
                <!--                    <path-->
                <!--                        d="m20.35 5.52-4 2.86c-.53.38-1.29.15-1.52-.46l-1.89-5.04c-.32-.87-1.55-.87-1.87 0l-1.9 5.03c-.23.62-.98.85-1.51.46l-4-2.86c-.8-.56-1.86.23-1.53 1.16l4.16 11.65c.14.4.52.66.94.66h9.53c.42 0 .8-.27.94-.66l4.16-11.65c.34-.93-.72-1.72-1.51-1.15Zm-5.85 9.23h-5c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h5c.41 0 .75.34.75.75s-.34.75-.75.75Z"-->
                <!--                        fill="#e3a512" fill-rule="evenodd" data-name="Vector" />-->
                <!--                </svg></span>-->
                <!--            جرب شة الاحترفي-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</li>-->
            </ul>
        </div>
            @if(Auth::guard('site_users')->check())
        
        <ul class="side-nav-offcanva">
            <li class="group-title"><a class="group-title" href="#">قائمة المصمم</a></li>
            <li class="item-divider">
                <hr/>
            </li>
            <li>
                <div class="route"  id="edit-profile">
                    <a href="{{ myRoute('designer.') }}" >
                    <div>
                        <span><svg id="user_outline" data-name="user/outline" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <g id="vuesax_outline_user" data-name="vuesax/outline/user">
                                    <g id="user">
                                        <path id="Vector"
                                            d="M5.75,11.5A5.75,5.75,0,1,1,11.5,5.75,5.757,5.757,0,0,1,5.75,11.5Zm0-10A4.25,4.25,0,1,0,10,5.75,4.259,4.259,0,0,0,5.75,1.5Z"
                                            transform="translate(6.25 1.25)" fill="#292d32" />
                                        <path id="Vector-2" data-name="Vector"
                                            d="M17.93,8.5a.755.755,0,0,1-.75-.75c0-3.45-3.52-6.25-7.84-6.25S1.5,4.3,1.5,7.75a.755.755,0,0,1-.75.75A.755.755,0,0,1,0,7.75C0,3.48,4.19,0,9.34,0s9.34,3.48,9.34,7.75A.755.755,0,0,1,17.93,8.5Z"
                                            transform="translate(2.66 14.25)" fill="#292d32" />
                                        <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                            opacity="0" />
                                    </g>
                                </g>
                            </svg>
                        </span>    احصائياتك
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="route"  id="edit-profile">
                    <a href="{{ myRoute('designer.payments') }}" >
                    <div>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18" y2="11"/><line x1="10" x2="10" y1="18" y2="11"/><line x1="14" x2="14" y1="18" y2="11"/><line x1="18" x2="18" y1="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>
                        </span>    سحب الاموال
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    <span style="margin-left: .5rem"><svg id="document-cloud_outline" data-name="document-cloud/outline"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g id="vuesax_outline_document-cloud" data-name="vuesax/outline/document-cloud">
                            <g id="document-cloud">
                                <path id="Vector"
                                    d="M7.75,21.5C2.32,21.5,0,19.18,0,13.75v-6C0,2.32,2.32,0,7.75,0h5a.755.755,0,0,1,.75.75.755.755,0,0,1-.75.75h-5C3.14,1.5,1.5,3.14,1.5,7.75v6C1.5,18.36,3.14,20,7.75,20a.75.75,0,0,1,0,1.5Z"
                                    transform="translate(1.25 1.25)" fill="#292d32" />
                                <path id="Vector-2" data-name="Vector"
                                    d="M.75,4.5A.755.755,0,0,1,0,3.75v-3A.755.755,0,0,1,.75,0,.755.755,0,0,1,1.5.75v3A.755.755,0,0,1,.75,4.5Z"
                                    transform="translate(21.25 9.25)" fill="#292d32" />
                                <path id="Vector-3" data-name="Vector"
                                    d="M8.75,9.5h-4C1.33,9.5,0,8.169,0,4.749v-4A.741.741,0,0,1,.46.059a.757.757,0,0,1,.82.16l8,8A.751.751,0,0,1,8.75,9.5ZM1.5,2.559v2.19C1.5,7.329,2.17,8,4.75,8H6.94Z"
                                    transform="translate(13.25 1.251)" fill="#292d32" />
                                <path id="Vector-4" data-name="Vector"
                                    d="M8.09,9.561H2.51a2.629,2.629,0,0,1-.9-5.05,3.686,3.686,0,0,1,.93-3.28A4.085,4.085,0,0,1,6.62.171a3.732,3.732,0,0,1,2.5,2.72,3.344,3.344,0,0,1,2.22,2.28,3.3,3.3,0,0,1-.96,3.51A3.39,3.39,0,0,1,8.09,9.561ZM2.54,5.821A1.081,1.081,0,0,0,1.5,6.941a1.079,1.079,0,0,0,1.06,1.12H8.07a2.108,2.108,0,0,0,1.32-.5A1.846,1.846,0,0,0,9.91,5.6,1.862,1.862,0,0,0,8.4,4.261a.753.753,0,0,1-.65-.62,2.29,2.29,0,0,0-1.57-2.03,2.57,2.57,0,0,0-2.55.67,2.3,2.3,0,0,0-.38,2.55.749.749,0,0,1-.45.96A1.222,1.222,0,0,1,2.54,5.821Z"
                                    transform="translate(11.25 13.189)" fill="#292d32" />
                                <path id="Vector-5" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                    opacity="0" />
                            </g>
                        </g>
                    </svg>
                </span>
                    تصاميمك
                </button>
                <div class="collapse" id="dashboard-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="{{ myRoute('designer.designs.create') }}" class="link-dark rounded">
                            اضافة تصميم 
                        </a>
                    </li>
                    <li><a  href="{{ myRoute('designer.designs.index') }}" class="link-dark rounded">تصميماتك</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <div >
                    <div>
                        <a href="{{ myRoute('designer.finance.index') }}">
    
                        <span><svg id="document-cloud_outline" data-name="document-cloud/outline"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="vuesax_outline_document-cloud" data-name="vuesax/outline/document-cloud">
                                    <g id="document-cloud">
                                        <path id="Vector"
                                            d="M7.75,21.5C2.32,21.5,0,19.18,0,13.75v-6C0,2.32,2.32,0,7.75,0h5a.755.755,0,0,1,.75.75.755.755,0,0,1-.75.75h-5C3.14,1.5,1.5,3.14,1.5,7.75v6C1.5,18.36,3.14,20,7.75,20a.75.75,0,0,1,0,1.5Z"
                                            transform="translate(1.25 1.25)" fill="#292d32" />
                                        <path id="Vector-2" data-name="Vector"
                                            d="M.75,4.5A.755.755,0,0,1,0,3.75v-3A.755.755,0,0,1,.75,0,.755.755,0,0,1,1.5.75v3A.755.755,0,0,1,.75,4.5Z"
                                            transform="translate(21.25 9.25)" fill="#292d32" />
                                        <path id="Vector-3" data-name="Vector"
                                            d="M8.75,9.5h-4C1.33,9.5,0,8.169,0,4.749v-4A.741.741,0,0,1,.46.059a.757.757,0,0,1,.82.16l8,8A.751.751,0,0,1,8.75,9.5ZM1.5,2.559v2.19C1.5,7.329,2.17,8,4.75,8H6.94Z"
                                            transform="translate(13.25 1.251)" fill="#292d32" />
                                        <path id="Vector-4" data-name="Vector"
                                            d="M8.09,9.561H2.51a2.629,2.629,0,0,1-.9-5.05,3.686,3.686,0,0,1,.93-3.28A4.085,4.085,0,0,1,6.62.171a3.732,3.732,0,0,1,2.5,2.72,3.344,3.344,0,0,1,2.22,2.28,3.3,3.3,0,0,1-.96,3.51A3.39,3.39,0,0,1,8.09,9.561ZM2.54,5.821A1.081,1.081,0,0,0,1.5,6.941a1.079,1.079,0,0,0,1.06,1.12H8.07a2.108,2.108,0,0,0,1.32-.5A1.846,1.846,0,0,0,9.91,5.6,1.862,1.862,0,0,0,8.4,4.261a.753.753,0,0,1-.65-.62,2.29,2.29,0,0,0-1.57-2.03,2.57,2.57,0,0,0-2.55.67,2.3,2.3,0,0,0-.38,2.55.749.749,0,0,1-.45.96A1.222,1.222,0,0,1,2.54,5.821Z"
                                            transform="translate(11.25 13.189)" fill="#292d32" />
                                        <path id="Vector-5" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                            opacity="0" />
                                    </g>
                                </g>
                            </svg>
                        </span>  المعاملات المالية
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div >
                    <div>
                        <a href="{{ myRoute('designer.tickets.index') }}">
    
                        <span><svg id="document-cloud_outline" data-name="document-cloud/outline"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="vuesax_outline_document-cloud" data-name="vuesax/outline/document-cloud">
                                    <g id="document-cloud">
                                        <path id="Vector"
                                            d="M7.75,21.5C2.32,21.5,0,19.18,0,13.75v-6C0,2.32,2.32,0,7.75,0h5a.755.755,0,0,1,.75.75.755.755,0,0,1-.75.75h-5C3.14,1.5,1.5,3.14,1.5,7.75v6C1.5,18.36,3.14,20,7.75,20a.75.75,0,0,1,0,1.5Z"
                                            transform="translate(1.25 1.25)" fill="#292d32" />
                                        <path id="Vector-2" data-name="Vector"
                                            d="M.75,4.5A.755.755,0,0,1,0,3.75v-3A.755.755,0,0,1,.75,0,.755.755,0,0,1,1.5.75v3A.755.755,0,0,1,.75,4.5Z"
                                            transform="translate(21.25 9.25)" fill="#292d32" />
                                        <path id="Vector-3" data-name="Vector"
                                            d="M8.75,9.5h-4C1.33,9.5,0,8.169,0,4.749v-4A.741.741,0,0,1,.46.059a.757.757,0,0,1,.82.16l8,8A.751.751,0,0,1,8.75,9.5ZM1.5,2.559v2.19C1.5,7.329,2.17,8,4.75,8H6.94Z"
                                            transform="translate(13.25 1.251)" fill="#292d32" />
                                        <path id="Vector-4" data-name="Vector"
                                            d="M8.09,9.561H2.51a2.629,2.629,0,0,1-.9-5.05,3.686,3.686,0,0,1,.93-3.28A4.085,4.085,0,0,1,6.62.171a3.732,3.732,0,0,1,2.5,2.72,3.344,3.344,0,0,1,2.22,2.28,3.3,3.3,0,0,1-.96,3.51A3.39,3.39,0,0,1,8.09,9.561ZM2.54,5.821A1.081,1.081,0,0,0,1.5,6.941a1.079,1.079,0,0,0,1.06,1.12H8.07a2.108,2.108,0,0,0,1.32-.5A1.846,1.846,0,0,0,9.91,5.6,1.862,1.862,0,0,0,8.4,4.261a.753.753,0,0,1-.65-.62,2.29,2.29,0,0,0-1.57-2.03,2.57,2.57,0,0,0-2.55.67,2.3,2.3,0,0,0-.38,2.55.749.749,0,0,1-.45.96A1.222,1.222,0,0,1,2.54,5.821Z"
                                            transform="translate(11.25 13.189)" fill="#292d32" />
                                        <path id="Vector-5" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                            opacity="0" />
                                    </g>
                                </g>
                            </svg>
                        </span>  تواصل مع الدعم
                    </div>
                    </a>
                </div>
            </li>
            <!-- list customer -->
            <li class="group-title"><a class="group-title" href="#">قائمة العميل</a></li>
            <li class="item-divider">
                <hr/>
            </li>
                <li>
                    <a href="{{ myRoute('customer.profile') }}">
                    <div class="route"  id="edit-profile">
                        <div>
                            <span><svg id="user_outline" data-name="user/outline" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <g id="vuesax_outline_user" data-name="vuesax/outline/user">
                                        <g id="user">
                                            <path id="Vector"
                                                d="M5.75,11.5A5.75,5.75,0,1,1,11.5,5.75,5.757,5.757,0,0,1,5.75,11.5Zm0-10A4.25,4.25,0,1,0,10,5.75,4.259,4.259,0,0,0,5.75,1.5Z"
                                                transform="translate(6.25 1.25)" fill="#292d32" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M17.93,8.5a.755.755,0,0,1-.75-.75c0-3.45-3.52-6.25-7.84-6.25S1.5,4.3,1.5,7.75a.755.755,0,0,1-.75.75A.755.755,0,0,1,0,7.75C0,3.48,4.19,0,9.34,0s9.34,3.48,9.34,7.75A.755.755,0,0,1,17.93,8.5Z"
                                                transform="translate(2.66 14.25)" fill="#292d32" />
                                            <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                                opacity="0" />
                                        </g>
                                    </g>
                                </svg>
                            </span>الملف الشخصي
                        </div>
                        <span  class="arrow-left"><svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                                viewBox="7.242 3.33 7.098 15.84">
                                <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52"
                                    stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="currentColor"
                                    fill="transparent" data-name="Vector"></path>
                            </svg></span>
                    </div>
                </a>
                </li>
            
            <li>
           <a href="{{ myRoute('customer.projects') }}">
                <div class="route"  id="projects">
                    <div>
                        <span><svg id="document-cloud_outline" data-name="document-cloud/outline"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="vuesax_outline_document-cloud" data-name="vuesax/outline/document-cloud">
                                    <g id="document-cloud">
                                        <path id="Vector"
                                            d="M7.75,21.5C2.32,21.5,0,19.18,0,13.75v-6C0,2.32,2.32,0,7.75,0h5a.755.755,0,0,1,.75.75.755.755,0,0,1-.75.75h-5C3.14,1.5,1.5,3.14,1.5,7.75v6C1.5,18.36,3.14,20,7.75,20a.75.75,0,0,1,0,1.5Z"
                                            transform="translate(1.25 1.25)" fill="#292d32" />
                                        <path id="Vector-2" data-name="Vector"
                                            d="M.75,4.5A.755.755,0,0,1,0,3.75v-3A.755.755,0,0,1,.75,0,.755.755,0,0,1,1.5.75v3A.755.755,0,0,1,.75,4.5Z"
                                            transform="translate(21.25 9.25)" fill="#292d32" />
                                        <path id="Vector-3" data-name="Vector"
                                            d="M8.75,9.5h-4C1.33,9.5,0,8.169,0,4.749v-4A.741.741,0,0,1,.46.059a.757.757,0,0,1,.82.16l8,8A.751.751,0,0,1,8.75,9.5ZM1.5,2.559v2.19C1.5,7.329,2.17,8,4.75,8H6.94Z"
                                            transform="translate(13.25 1.251)" fill="#292d32" />
                                        <path id="Vector-4" data-name="Vector"
                                            d="M8.09,9.561H2.51a2.629,2.629,0,0,1-.9-5.05,3.686,3.686,0,0,1,.93-3.28A4.085,4.085,0,0,1,6.62.171a3.732,3.732,0,0,1,2.5,2.72,3.344,3.344,0,0,1,2.22,2.28,3.3,3.3,0,0,1-.96,3.51A3.39,3.39,0,0,1,8.09,9.561ZM2.54,5.821A1.081,1.081,0,0,0,1.5,6.941a1.079,1.079,0,0,0,1.06,1.12H8.07a2.108,2.108,0,0,0,1.32-.5A1.846,1.846,0,0,0,9.91,5.6,1.862,1.862,0,0,0,8.4,4.261a.753.753,0,0,1-.65-.62,2.29,2.29,0,0,0-1.57-2.03,2.57,2.57,0,0,0-2.55.67,2.3,2.3,0,0,0-.38,2.55.749.749,0,0,1-.45.96A1.222,1.222,0,0,1,2.54,5.821Z"
                                            transform="translate(11.25 13.189)" fill="#292d32" />
                                        <path id="Vector-5" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                            opacity="0" />
                                    </g>
                                </g>
                            </svg>
                        </span>مشاريعي</div>
                    <span  class="arrow-left"><svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                            viewBox="7.242 3.33 7.098 15.84">
                            <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52"
                                stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="currentColor"
                                fill="transparent" data-name="Vector"></path>
                        </svg></span>
                </div>
           </a>

            </li>
            <li>
           <a href="{{ myRoute('customer.designs') }}">

                <div class="route"  id="favorate">
                    <div> <span>
                        <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.6 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                        </span>تصميماتي</div>
                    <span  class="arrow-left">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                            viewBox="7.242 3.33 7.098 15.84">
                            <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52"
                                stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="currentColor"
                                fill="transparent" data-name="Vector"></path>
                        </svg></span>
                </div>
           </a>
            </li>
            <li>
           <a href="{{ myRoute('customer.payment') }}">        

                <div class="route"  id="subscription">
                    <div>
                        <span><svg id="card-pos_outline" data-name="card-pos/outline"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="vuesax_outline_card-pos" data-name="vuesax/outline/card-pos">
                                    <g id="card-pos">
                                        <path id="Vector"
                                            d="M.747,13.447a.742.742,0,0,1-.53-.22.754.754,0,0,1,0-1.06L12.168.218a.75.75,0,0,1,1.06,1.06L1.277,13.238A.757.757,0,0,1,.747,13.447Z"
                                            transform="translate(3.183 3.183)" fill="#292d32" />
                                        <path id="Vector-2" data-name="Vector"
                                            d="M.748,2.7a.742.742,0,0,1-.53-.22.754.754,0,0,1,0-1.06l1.2-1.2a.75.75,0,0,1,1.06,1.06l-1.2,1.2A.749.749,0,0,1,.748,2.7Z"
                                            transform="translate(10.352 16.332)" fill="#292d32" />
                                        <path id="Vector-3" data-name="Vector"
                                            d="M.747,3.888a.742.742,0,0,1-.53-.22.754.754,0,0,1,0-1.06L2.607.218a.75.75,0,1,1,1.06,1.06l-2.39,2.39A.767.767,0,0,1,.747,3.888Z"
                                            transform="translate(13.043 12.453)" fill="#292d32" />
                                        <path id="Vector-4" data-name="Vector"
                                            d="M9.845,21.5c-.98,0-1.96-.6-3.15-1.79L1.785,14.8c-2.39-2.39-2.38-3.93.03-6.34l6.64-6.64c2.41-2.41,3.95-2.42,6.34-.03l4.91,4.91c2.39,2.39,2.38,3.93-.03,6.34l-6.64,6.64C11.825,20.885,10.835,21.5,9.845,21.5Zm1.8-20c-.52,0-1.18.43-2.13,1.38l-6.64,6.64c-.95.95-1.38,1.61-1.38,2.12s.4,1.15,1.35,2.1l4.91,4.91c.95.95,1.57,1.35,2.09,1.35h.01c.52,0,1.17-.43,2.12-1.38l6.64-6.64c.95-.95,1.38-1.61,1.38-2.12s-.4-1.15-1.35-2.1l-4.91-4.91C12.8,1.9,12.165,1.5,11.645,1.5Z"
                                            transform="translate(1.255 1.255)" fill="#292d32" />
                                        <path id="Vector-5" data-name="Vector"
                                            d="M20.75,1.5H.75A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h20a.755.755,0,0,1,.75.75A.755.755,0,0,1,20.75,1.5Z"
                                            transform="translate(1.25 21.25)" fill="#292d32" />
                                        <path id="Vector-6" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                            opacity="0" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                        سجلات الدفع
           </div>
                    <span  class="arrow-left"><svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                            viewBox="7.242 3.33 7.098 15.84">
                            <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52"
                                stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="currentColor"
                                fill="transparent" data-name="Vector"></path>
                        </svg></span>
                </div>
            </a>
            </li>
            <!-- list affiliate -->
            <li class="group-title"><a class="group-title" href="#">قائمة المسوق</a></li>
            <li class="item-divider">
                <hr/>
            </li>
            <li>
                <div class="route"  id="edit-profile">
                    <a href="{{ myRoute('affiliate.') }}" >
                    <div>
                        <span><svg id="user_outline" data-name="user/outline" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <g id="vuesax_outline_user" data-name="vuesax/outline/user">
                                    <g id="user">
                                        <path id="Vector"
                                            d="M5.75,11.5A5.75,5.75,0,1,1,11.5,5.75,5.757,5.757,0,0,1,5.75,11.5Zm0-10A4.25,4.25,0,1,0,10,5.75,4.259,4.259,0,0,0,5.75,1.5Z"
                                            transform="translate(6.25 1.25)" fill="#292d32" />
                                        <path id="Vector-2" data-name="Vector"
                                            d="M17.93,8.5a.755.755,0,0,1-.75-.75c0-3.45-3.52-6.25-7.84-6.25S1.5,4.3,1.5,7.75a.755.755,0,0,1-.75.75A.755.755,0,0,1,0,7.75C0,3.48,4.19,0,9.34,0s9.34,3.48,9.34,7.75A.755.755,0,0,1,17.93,8.5Z"
                                            transform="translate(2.66 14.25)" fill="#292d32" />
                                        <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                            opacity="0" />
                                    </g>
                                </g>
                            </svg>
                        </span>    لوحة التحكم
                    </div>
                    </a>
                </div>
            </li>
           
        </ul>
    @endif
    </div>
  </div>

