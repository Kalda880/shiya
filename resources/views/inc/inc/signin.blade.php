@push('css')

<style>

    .showmodal p{
        font-size: 14px;
        color: #797e8a;
        margin-bottom: 20px;
    }
</style>

@endpush

<div class="modal-container"  id="signin-modal">

    <div class="modal signUp ">

        <div class="modal-exit">
            <span id="exit"><svg id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle"
                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
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
            <h2>  حساب جديد </h2>
            <p>مرحباً بك في شـيـة ،   يرجي تسجيل البيانات المطلوبة لانشاء حسابك              </p>
        </div>
        <form class="sign-up-form" method="POST" action="{{ route('register') }}">
            @csrf


            <div class="input">

                <p> اسم المستخدم </p>

                <input type="text" name="name" value="{{ old('name')}}" required autofocus>

            </div>

            <div class="input">

                <p>  {{trans('messages.email')}}</p>

                <input type="email" name="email" value="{{ old('email')}}" required autofocus>

            </div>

            <div class="input">
                <p> كلمه المرور</p>
                <input type="password" name="password" required >
            </div>

            <button type="submit" class="submit-btn">  انشاء حساب</button>
        </form>

    </div>
    <div class="back-drop"></div>
</div>


