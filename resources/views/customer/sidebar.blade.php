<div class="side-nav ">
    <div class="profile " style="
    margin-top: 30px;
">
        <div class="profile-img">
            <img src="{{ displayImage(Auth::user()->image) }}" alt="" style="width: 90px;height:90px; border-radius :50%"  >
        </div>
        <div class="profile-info">
            <p class="name">{{ Auth::user()->name }}</br>
            {{ Auth::user()->email }}</p>
        </div>
    </div>
    <ul>
     
       
        <li>
            <div class="route"  id="edit-profile1">
                <div>
                    <a href="{{ myRoute('customer.profile') }}">

                    <span><svg id="user_outline" data-name="user/outline" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <g id="vuesax_outline_user" data-name="vuesax/outline/user">
                                <g id="user">
                                    <path id="Vector"
                                        d="M5.75,11.5A5.75,5.75,0,1,1,11.5,5.75,5.757,5.757,0,0,1,5.75,11.5Zm0-10A4.25,4.25,0,1,0,10,5.75,4.259,4.259,0,0,0,5.75,1.5Z"
                                        transform="translate(6.25 1.25)" fill="white" />
                                    <path id="Vector-2" data-name="Vector"
                                        d="M17.93,8.5a.755.755,0,0,1-.75-.75c0-3.45-3.52-6.25-7.84-6.25S1.5,4.3,1.5,7.75a.755.755,0,0,1-.75.75A.755.755,0,0,1,0,7.75C0,3.48,4.19,0,9.34,0s9.34,3.48,9.34,7.75A.755.755,0,0,1,17.93,8.5Z"
                                        transform="translate(2.66 14.25)" fill="white" />
                                    <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                        opacity="0" />
                                </g>
                            </g>
                        </svg>
                    </span> الملف الشخصي
                </a>
                </div>

            </div>
        </li>
        <li class="group-item">
            <a href="#">قائمة مصمم</a>
        </li>
           
        <li>
            <div class="route"  id="edit-profile2">
                <a href="{{ myRoute('designer.') }}" >
                <div>
                    <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z"/></svg>
                    </span>    احصائياتك
                </div>
                </a>
            </div>
        </li>
        <li>
            <div class="route"  id="edit-profile2">
                <a href="{{ myRoute('designer.payments') }}" >
                <div>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18" y2="11"/><line x1="10" x2="10" y1="18" y2="11"/><line x1="14" x2="14" y1="18" y2="11"/><line x1="18" x2="18" y1="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>
                    </span>    سحب الاموال
                </div>
                </a>
            </div>
        </li>
        <li id="edit-profile2">
            <button class="btn btn-toggle align-items-right rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                <span style="margin-left: .5rem;margin-right: -11px;"><svg xmlns="http://www.w3.org/2000/svg" height="26" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fcfcfc" d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/></svg>
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
                <div id="edit-profile2">
                    <a href="{{ myRoute('designer.finance.index') }}">

                    <span ><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/></svg>
                    </span>  المعاملات المالية
                </div>
                </a>
            </div>
        </li>
        <li>
            <div >
                <div id="edit-profile2">
                    <a href="{{ myRoute('designer.tickets.index') }}">

                    <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                    </span>  تواصل مع الدعم
                </div>
                </a>
            </div>
        </li>
          <li class="group-item">
            <a href="#">قائمة عميل</a>
        </li>
           
        <li>
            <div class="route"  id="edit-profile2">
                <a href="{{ myRoute('customer.') }}" >
                <div>
                    <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
                    </span>    لوحة التحكم
                </div>
                </a>
            </div>
        </li>
        <li>
            <div class="route"  id="projects">
                <div id="edit-profile2">
                    <a href="{{ myRoute('customer.projects') }}">

                    <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M160 32c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160zM396 138.7l96 144c4.9 7.4 5.4 16.8 1.2 24.6S480.9 320 472 320H328 280 200c-9.2 0-17.6-5.3-21.6-13.6s-2.9-18.2 2.9-25.4l64-80c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l17.3 21.6 56-84C360.5 132 368 128 376 128s15.5 4 20 10.7zM192 128a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120z"/></svg>
                    </span> مشاريعي
                </div>
                </a>
            </div>
        </li>

        <li id="edit-profile2">
            <div class="route"  id="projects">
                <a href="{{ myRoute('customer.designs') }}">
                <div>
                    <span><svg xmlns="http://www.w3.org/2000/svg" height="26" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fcfcfc" d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/></svg>
                    </span> تصميماتي
                </div>


            </div>
        </a>
        </li>
{{--
        <li>
            <div class="route"  id="favorate">
                <a href="{{ myRoute('customer.favourite') }}">
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
                </a>
            </div>
        </li>  --}}
        {{--  <li>
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
                    </span>الاشتراكات
                </div>

            </div>
        </li>  --}}
      <li id="edit-profile2">
            <div class="route"  id="payment-history">
                <a href="{{ myRoute('customer.payment') }}">
                <div>
                    <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/></svg>
                    </span> سجلات الدفع
                </div>
                </a>
            </div>
        </li>
        <li class="group-item">
            <a href="#">قائمة مسوقين</a>
        </li>
           
        <li id="edit-profile2">
            <div class="route"  id="edit-profile">
                <a href="{{ myRoute('affiliate.') }}" >
                <div>
                    <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
                    </span>    لوحة التحكم
                </div>
                </a>
            </div>
        </li>
        <li id="edit-profile2">
            <form method="POST" action="{{ myRoute('logout') }}" id="logoutform">
                @csrf
            </form>

            <a href="#"  onclick="event.preventDefault();
            document.getElementById('logoutform').submit();">
                <div style="justify-content: start;">
                    <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                    </span>تسجيل الخروج
                </div>
            </a>
        </li>
    </ul>
</div>
