<nav class="navbarr">
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
                        <a href="{{ route('template') }}">{{trans('messages.departments')}}</a>
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
                    <a href="{{ route('contact') }}">    الدعم</a>
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
                    <a href="{{ route('customrequst') }}">    طلب مخصص</a>
                    </li>

                </ul>
            </div>
            <div class="nav-mobile" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="60px" height="60px">
                    <path
                        d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z" />
                </svg>
            </div>
        </div>

        <div class="account ">


            @if (Auth::guard('customer')->check())

            <div class="logged" style="display: block;">
                <span>
                    <img src="{{ displayImage(Auth::guard('customer')->user()->image) }}" style="border-radius: 50%;" alt="">

                </span>

                <div class="drop-list">
                    <ul>
                        <li>
                            <a href="{{ route('customer.profile') }}">
                                <span><svg id="user_outline" data-name="user/outline"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
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
                                </span> الملف الشخصي</a></li>
                        <li>
                            <a href="{{ route('customer.designs') }}">
                                <span><svg id="document-cloud_outline" data-name="document-cloud/outline"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g id="vuesax_outline_document-cloud"
                                            data-name="vuesax/outline/document-cloud">
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
                                </span> تصميماتي</a></li>
                        <li>
                            <a href="{{ route('customer.projects') }}">
                                <span><svg id="document-cloud_outline" data-name="document-cloud/outline"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g id="vuesax_outline_document-cloud"
                                            data-name="vuesax/outline/document-cloud">
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
                                </span> مشاريعي</a></li>
                        <li>
                            <a href="{{ route('customer.favourite') }}">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g id="Group_56480" data-name="Group 56480"
                                            transform="translate(-11689 -594)">
                                            <rect id="Rectangle_14241" data-name="Rectangle 14241" width="24"
                                                height="24" transform="translate(11689 594)" fill="none" />
                                            <g id="svgexport-10" transform="translate(11690.404 595.901)">
                                                <g id="star">
                                                    <path id="Path_11230" data-name="Path 11230"
                                                        d="M22.688,10.855l-4.629,4.512,1.093,6.373a.743.743,0,0,1-1.078.783l-5.724-3.009L6.626,22.524a.743.743,0,0,1-1.078-.783l1.093-6.373-4.63-4.512a.743.743,0,0,1,.412-1.268l6.4-.929,2.861-5.8a.774.774,0,0,1,1.333,0l2.861,5.8,6.4.929a.743.743,0,0,1,.412,1.268Z"
                                                        transform="translate(-1.787 -2.48)" fill="none"
                                                        stroke="#292d32" stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>المفضلات </a>
                            </li>

                        <li><a href="{{ route('customer.payment') }}">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g id="Group_56567" data-name="Group 56567"
                                            transform="translate(-6080 -318)">
                                            <path id="Vector" d="M0,0H24V24H0Z" transform="translate(6080 318)"
                                                fill="none" opacity="0" />
                                            <g id="Group_56566" data-name="Group 56566"
                                                transform="translate(27.8 -0.25)">
                                                <path id="Path_11755" data-name="Path 11755"
                                                    d="M31.231,20.023l3.9,2.925a.65.65,0,1,0,.78-1.04L32.3,19.175V13.65a.65.65,0,1,0-1.3,0V19.5a.672.672,0,0,0,.231.523Z"
                                                    transform="translate(6033.275 310.825)" fill="#292d32" />
                                                <path id="Path_11756" data-name="Path 11756"
                                                    d="M11.047,2a9.749,9.749,0,0,0-9.613,8.124l-.247-.367a.651.651,0,0,0-1.079.728l1.3,1.95a.65.65,0,0,0,.474.289h.065a.649.649,0,0,0,.458-.192l1.625-1.625a.65.65,0,0,0-.92-.92l-.4.406a8.449,8.449,0,1,1,8.339,9.8,8,8,0,0,1-6.62-3.3.65.65,0,1,0-1.059.754A9.285,9.285,0,0,0,11.047,21.5a9.749,9.749,0,0,0,0-19.5Z"
                                                    transform="translate(6054.203 318.25)" fill="#292d32" />
                                            </g>
                                        </g>
                                    </svg>
                                </span> سجلات الدفع</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" id="logoutform">
                                @csrf
                            </form>

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logoutform').submit();">


                                <span>
                                    <svg id="logout_linear" data-name="logout/linear"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g id="vuesax_linear_logout" data-name="vuesax/linear/logout">
                                            <g id="logout">
                                                <path id="Vector"
                                                    d="M0,5.07C.31,1.47,2.16,0,6.21,0h.13c4.47,0,6.26,1.79,6.26,6.26v6.52c0,4.47-1.79,6.26-6.26,6.26H6.21c-4.02,0-5.87-1.45-6.2-4.99"
                                                    transform="translate(8.9 2.49)" fill="none" stroke="#292d32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5" />
                                                <path id="Vector-2" data-name="Vector" d="M11.38,0H0"
                                                    transform="translate(3.62 12)" fill="none" stroke="#292d32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5" />
                                                <path id="Vector-3" data-name="Vector" d="M3.35,0,0,3.35,3.35,6.7"
                                                    transform="translate(2.5 8.65)" fill="none" stroke="#292d32"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5" />
                                                <path id="Vector-4" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none"
                                                    opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>تسجيل الخروج </a>
                            </li>
                    </ul>
                </div>


            @elseif (Auth::guard('designer')->check())

            <div class="logged">
                <div class="btn-new">
                    <a data-bs-target="#create-account" data-bs-toggle="modal">

                           لوح التحكم </a>
                </div>
            </div>


            @else


                <div class="btn-new">
                    <a data-bs-target="#create-account" data-bs-toggle="modal" style="cursor: context-menu;">

                        حساب جديد </a>
                </div>
                <div class="btn-login">
                    <a data-bs-target="#login-modal" data-bs-toggle="modal" style="cursor: context-menu;">

                        {{trans('messages.login')}}
                    </a>
                </div>


            @endif


        </div>
    </div>

    </div>
</nav>
