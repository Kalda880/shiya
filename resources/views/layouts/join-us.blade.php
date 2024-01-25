<div class="modal  fade " id="Join-us" tabindex="-1" aria-labelledby="Join-us" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class=" signUp ">
                <div class="modal-exit">
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
                <div class="modal-title">
                    <h2>ااضا إلينا</h2>
                    <p>
                    مرحباً بك للمتابعة يرجي تسجيل الدخول                    </p>
                </div>
                <form class="sign-up-form">
                    <div class="form-btn">
                        <label for="des" class="active">مصمم</label>
                        <input type="radio" name="" id="des">
                        <label for="mar">مسوق</label>
                        <input type="radio" name="" id="mar">
                    </div>
                    <div class="input">
                        <p>{{trans('messages.username')}}</p>
                        <input type="text" placeholder="{{trans('messages.username')}}" style = "color : black">
                    </div>
                    <div class="input">
                        <p>{{trans('messages.email')}}</p>
                        <input type="text" placeholder="أدخل {{trans('messages.email')}}" style = "color : black">
                    </div>
                    <div class="input password">
                        <p>{{trans('messages.password')}}</p>
                        <input type="password" style = "color : black">
                    </div>
                    <div class="input">
                        <p>م المستخدم</p>
                        <input type="text" style = "color : black">
                    </div>
                    <button type="submit" class="submit-btn">{{trans('messages.create-account')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>