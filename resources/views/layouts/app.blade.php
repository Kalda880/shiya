<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استعادة كلمة المرور</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="{{ asset('front/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/index.css?rnd='.\Str::random(30))}}">
    @stack('css')
    
    <style 
    
    .side-nav-offcanva{
    margin-top: 35px;
  
  padding-left: 16px;
  
  
  
      list-style: none;
      color: black;
  }
  
  .side-nav-offcanva li {
      padding: 10px 16px;
      margin-bottom: 25px;
      transition: 0.4s;
      }
      .side-nav-offcanva li:hover{
          background-color: rgba(192, 215, 214, 0.2);
          border-radius: 8px;
      }
      .side-nav-offcanva li div{
          cursor: pointer;
          display: flex;
         
          align-items: center;
          color: black;
      }
      .side-nav-offcanva li div div span{
          margin-left: 10px;
      }
      .side-nav-offcanva li div div{
         display: flex;align-items: center;
      }
      .side-nav-offcanva li div {
          display: flex;
          justify-content: space-between;
      }
    
    ></style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ myRoute('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ myRoute('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ myRoute('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ myRoute('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    
                    <ul class="side-nav-offcanva">
                <a href="editprofile.html" >
                    <li>
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
                                </span> الملف الشخصي
                            </div>
    
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                                    viewBox="7.242 3.33 7.098 15.84">
                                    <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52"
                                        stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#1a1c1e"
                                        fill="transparent" data-name="Vector"></path>
                                </svg></span>
                        </div>
                    </li>
                </a>
               <a href="myprojects.html">
                <li>
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
                            </span> مشاريعي
                        </div>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                                viewBox="7.242 3.33 7.098 15.84">
                                <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52"
                                    stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#1a1c1e"
                                    fill="transparent" data-name="Vector"></path>
                            </svg></span>
                    </div>
                </li>
               </a>
               <a href="favorate.html">
                <li>
                    <div class="route"  id="favorate">
                        <div> <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g id="Group_56480" data-name="Group 56480" transform="translate(-11689 -594)">
                                        <rect id="Rectangle_14241" data-name="Rectangle 14241" width="24" height="24"
                                            transform="translate(11689 594)" fill="none" />
                                        <g id="svgexport-10" transform="translate(11690.404 595.901)">
                                            <g id="star">
                                                <path id="Path_11230" data-name="Path 11230"
                                                    d="M22.688,10.855l-4.629,4.512,1.093,6.373a.743.743,0,0,1-1.078.783l-5.724-3.009L6.626,22.524a.743.743,0,0,1-1.078-.783l1.093-6.373-4.63-4.512a.743.743,0,0,1,.412-1.268l6.4-.929,2.861-5.8a.774.774,0,0,1,1.333,0l2.861,5.8,6.4.929a.743.743,0,0,1,.412,1.268Z"
                                                    transform="translate(-1.787 -2.48)" fill="none" stroke="#292d32"
                                                    stroke-width="1.5" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>المفضلات </div>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                                viewBox="7.242 3.33 7.098 15.84">
                                <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52"
                                    stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#1a1c1e"
                                    fill="transparent" data-name="Vector"></path>
                            </svg></span>
                    </div>
                </li>
               </a>
            
               <a href="subscription.html">
                <li>
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
                            </span>اشتراكات
                        </div>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                                viewBox="7.242 3.33 7.098 15.84">
                                <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52"
                                    stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#1a1c1e"
                                    fill="transparent" data-name="Vector"></path>
                            </svg></span>
                    </div>
                </li>
               </a>
              <a href="payment.html">
                <li>
                    <div class="route"  id="payment-history">
                        <div>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g id="Group_56567" data-name="Group 56567" transform="translate(-6080 -318)">
                                        <path id="Vector" d="M0,0H24V24H0Z" transform="translate(6080 318)" fill="none"
                                            opacity="0" />
                                        <g id="Group_56566" data-name="Group 56566" transform="translate(27.8 -0.25)">
                                            <path id="Path_11755" data-name="Path 11755"
                                                d="M31.231,20.023l3.9,2.925a.65.65,0,1,0,.78-1.04L32.3,19.175V13.65a.65.65,0,1,0-1.3,0V19.5a.672.672,0,0,0,.231.523Z"
                                                transform="translate(6033.275 310.825)" fill="#292d32" />
                                            <path id="Path_11756" data-name="Path 11756"
                                                d="M11.047,2a9.749,9.749,0,0,0-9.613,8.124l-.247-.367a.651.651,0,0,0-1.079.728l1.3,1.95a.65.65,0,0,0,.474.289h.065a.649.649,0,0,0,.458-.192l1.625-1.625a.65.65,0,0,0-.92-.92l-.4.406a8.449,8.449,0,1,1,8.339,9.8,8,8,0,0,1-6.62-3.3.65.65,0,1,0-1.059.754A9.285,9.285,0,0,0,11.047,21.5a9.749,9.749,0,0,0,0-19.5Z"
                                                transform="translate(6054.203 318.25)" fill="#292d32" />
                                        </g>
                                    </g>
                                </svg>
                            </span> سجلات الدفع
                        </div>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                                viewBox="7.242 3.33 7.098 15.84">
                                <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52"
                                    stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#1a1c1e"
                                    fill="transparent" data-name="Vector"></path>
                            </svg></span>
                    </div>
                </li>
              </a>
                <li><a href="">
                        <div style="justify-content: start;">
                            <span><svg id="logout_linear" data-name="logout/linear" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <g id="vuesax_linear_logout" data-name="vuesax/linear/logout">
                                        <g id="logout">
                                            <path id="Vector"
                                                d="M0,5.07C.31,1.47,2.16,0,6.21,0h.13c4.47,0,6.26,1.79,6.26,6.26v6.52c0,4.47-1.79,6.26-6.26,6.26H6.21c-4.02,0-5.87-1.45-6.2-4.99"
                                                transform="translate(8.9 2.49)" fill="none" stroke="#292d32"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector" d="M11.38,0H0"
                                                transform="translate(3.62 12)" fill="none" stroke="#292d32"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector" d="M3.35,0,0,3.35,3.35,6.7"
                                                transform="translate(2.5 8.65)" fill="none" stroke="#292d32"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H24V24H0Z"
                                                transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                        </g>
                                    </g>
                                </svg>
                            </span>تسيل الخروج
                        </div>
                    </a></li>
            </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

