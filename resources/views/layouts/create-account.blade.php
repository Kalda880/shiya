<div class="modal  fade " id="create-account" tabindex="-1" aria-labelledby="create-account" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class=" signUp ">
                <div class="modal-exit d-flex justify-content-between">
                    <h2>{{trans('messages.new-account')}}</h2>

                    <span id="exit" data-bs-dismiss="modal" aria-label="Close"><svg id="vuesax_bold_close-circle"
                            data-name="vuesax/bold/close-circle" xmlns="http://www.w3.org/2000/svg" width="30"
                            height="30" viewBox="0 0 30 30">
                            <g id="close-circle">
                                <path id="Vector"
                                    d="M12.5,0A12.5,12.5,0,1,0,25,12.5,12.521,12.521,0,0,0,12.5,0Zm4.2,15.375a.943.943,0,0,1,0,1.325.936.936,0,0,1-1.325,0L12.5,13.825,9.625,16.7a.936.936,0,0,1-1.325,0,.943.943,0,0,1,0-1.325L11.175,12.5,8.3,9.625A.937.937,0,0,1,9.625,8.3L12.5,11.175,15.375,8.3A.937.937,0,0,1,16.7,9.625L13.825,12.5Z"
                                    transform="translate(2.5 2.5)" fill="#797e8a" />
                                <path id="Vector-2" data-name="Vector" d="M0,0H30V30H0Z"
                                    transform="translate(30 30) rotate(180)" fill="none" opacity="0" />
                            </g>
                        </svg>
                    </span>
                </div>
                <div class="modal-title mb-2">
                    
                    <p style="">مرحبا بك في  شية، يرجي ملئ البيانات لانشاء حساب جديد</p>
                </div>
                @include('common.google-register')
                <hr/>
                <form class="sign-up-form" action="{{ myRoute('register') }}" method="POST">
                    @csrf


                    <div class="input">
                        <p> {{trans('messages.username')}} </p>
                        <input type="text" placeholder=" ادخل {{trans('messages.username')}}   " name="name" required style = "color : black">
                    </div>

                    <div class="input mt-3">
                        <p >{{trans('messages.email')}}</p>
                        <input type="text" placeholder=" ادخل {{trans('messages.email')}} " name="email" required style = "color : black">
                    </div>

                    <div class="input mt-3">
                        <p >{{trans('messages.phone-number')}}</p>
                        <input type="text" placeholder=" ادخل {{trans('messages.phone-number')}} " name="phone" required style = "color : black">
                    </div>

                    <div class="input mt-3">
                        <p > {{trans('messages.password')}} </p>
                        <div class="password">
                            <input type="password" id="create-account-password" placeholder="{{trans('messages.password')}}" name="password" required style = "color : black">
                            <div onclick="showHidePassword('create-account-password')" class="show-btn">
                                <svg id="create-account-password-hide" xmlns="http://www.w3.org/2000/svg" width="24.009" height="18.69"
                                    viewBox="0 0 24.009 18.69">
                                    <g id="eye" transform="translate(0.004 -2.655)">
                                        <path id="Path_3" data-name="Path 3"
                                            d="M23.271,9.419C21.72,6.893,18.192,2.655,12,2.655S2.28,6.893.729,9.419a4.908,4.908,0,0,0,0,5.162C2.28,17.107,5.808,21.345,12,21.345s9.72-4.238,11.271-6.764A4.908,4.908,0,0,0,23.271,9.419Zm-1.7,4.115C20.234,15.7,17.219,19.345,12,19.345S3.766,15.7,2.434,13.534a2.918,2.918,0,0,1,0-3.068C3.766,8.3,6.781,4.655,12,4.655s8.234,3.641,9.566,5.811A2.918,2.918,0,0,1,21.566,13.534Z"
                                            fill="#a8a8b4" />
                                        <path id="Path_4" data-name="Path 4"
                                            d="M12,7a5,5,0,1,0,5,5,5,5,0,0,0-5-5Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
                                            fill="#a8a8b4" />
                                    </g>
                                </svg>
                                <svg id="create-account-password-show" style="display: none" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zm151 118.3C226 97.7 269.5 80 320 80c65.2 0 118.8 29.6 159.9 67.7C518.4 183.5 545 226 558.6 256c-12.6 28-36.6 66.8-70.9 100.9l-53.8-42.2c9.1-17.6 14.2-37.5 14.2-58.7c0-70.7-57.3-128-128-128c-32.2 0-61.7 11.9-84.2 31.5l-46.1-36.1zM394.9 284.2l-81.5-63.9c4.2-8.5 6.6-18.2 6.6-28.3c0-5.5-.7-10.9-2-16c.7 0 1.3 0 2 0c44.2 0 80 35.8 80 80c0 9.9-1.8 19.4-5.1 28.2zm9.4 130.3C378.8 425.4 350.7 432 320 432c-65.2 0-118.8-29.6-159.9-67.7C121.6 328.5 95 286 81.4 256c8.3-18.4 21.5-41.5 39.4-64.8L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5l-41.9-33zM192 256c0 70.7 57.3 128 128 128c13.3 0 26.1-2 38.2-5.8L302 334c-23.5-5.4-43.1-21.2-53.7-42.3l-56.1-44.2c-.2 2.8-.3 5.6-.3 8.5z" fill="#a8a8b4" /></svg>
                            </div>
                        </div>

                    </div>

                  <div class="modal-btn-create d-flex justify-content-center mt-4">  <button type="submit" class="submit-btn">{{trans('messages.create-account')}}</button></div>
                    <div class="invite-code-container mt-3 ">
                        <div class="invite-code">
                            <input type="checkbox" id="invite-code-show"  class="form-check-input custom-check-box">
                            <span> هل لديك كود دعوة</span>
                        </div>
                        <div class="input mt-3" id="invite-comp">
                            <input type="text" value="{{ request('code')}}" name="code" placeholder="كود دعوة" style = "color : black">
                        </div>
                    </div>
                </form>
                <div class="modal-text-forg d-flex justify-content-center mt-4">
                    <p style="font-size: 14px; margin: 0;cursor: pointer;" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#login-modal"> لديك حساب <span style="color: #0083a8;">{{trans('messages.login')}}</span></p>
                    {{--<p style="font-size: 14px; margin: 0;cursor: pointer;" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#create-account-designer"> إنشاء حساب <span style="color: #0083a8;"> كمصمم </span></p>--}}
                </div>
            </div>
        </div>
    </div>
</div>