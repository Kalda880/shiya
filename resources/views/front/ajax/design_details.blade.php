
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content design-modal" >
            <div class="modal-header">
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
            <div class="modal-body">
                <div class="row" style="height: 100%;">
                    <div class="first-half col-xl-4" style="height: 100%; padding: 25px;">
<div class="d-flex justify-content-between">
<p> {{ $design->title }}    </p>

    @if(intVal($design->price)==0)
    <p style="color:rgb(236, 70, 70);  font-weight: 700;">{{trans('messages.free')}}</p>
    @elseif(setting_value('ALL_PRODUCT_FREE')=='Y')
    <p style="color:rgb(236, 70, 70);  font-weight: 700;">
    <del style="margin: 0 17px;font-size: 12px;font-weight: 400;">{{ $design->price }} ر.س</del>
    {{trans('messages.free')}}
    </p>
    @else
    <p>
    {{ $design->price }} ر.س
    </p>
    @endif

</div>

<!--type-->
<p>نوع القالب :<span style="color:#E3A512 ;"> <svg xmlns="http://www.w3.org/2000/svg" width="19.857" height="16.753" viewBox="2.068 2.227 19.857 16.753">
<path d="m20.35 5.52-4 2.86c-.53.38-1.29.15-1.52-.46l-1.89-5.04c-.32-.87-1.55-.87-1.87 0l-1.9 5.03c-.23.62-.98.85-1.51.46l-4-2.86c-.8-.56-1.86.23-1.53 1.16l4.16 11.65c.14.4.52.66.94.66h9.53c.42 0 .8-.27.94-.66l4.16-11.65c.34-.93-.72-1.72-1.51-1.15Zm-5.85 9.23h-5c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h5c.41 0 .75.34.75.75s-.34.75-.75.75Z" fill="#e3a512" fill-rule="evenodd" data-name="Vector"></path>
</svg> مميز</span></p>
<!-- catgoury-->
<p>تصنيف القالب: {{ $design->category->title }}</p>
{{--  <p>ابعاد القالب : 545*545</p>  --}}

    <div class="design-btns" style=" width: 100%  !important;">

        @if(Auth::guard('site_users')->check())


        <form method="POST" action="{{ myRoute('customer.storepayment') }}" style=" width: 100%  !important;">
            @csrf
            <input type="hidden" name="design" value="{{ $design->id }}" />
            
            <input type="hidden" name="code" value="{{ $code }}" />

           <button type="submit" class="btn btn-primary use-btn" style="color: #fff !important; width: 100%  !important;">شراء</button>
        </form>
        <div></div>
@if(auth('site_users')->user()->code)
        <button  class="btn" onclick="copyTextToClipboard('{{myRoute('template.code',['id'=>$design->id,'code'=>auth('site_users')->user()->code])}}','{{trans('messages.copied-url-successful')}}')" style="color: var(--color-text) !important; width: 100%  !important;">نسخ رابط المنتج</button>
@endif



      @else

        <a data-bs-target="#login-modal" data-bs-toggle="modal" href="" style  = "color : white !important ; width :100% " class="btn btn-primary use-btn">يجب التسجيل الدخول أولا</a>


        @endif


<!--    <div>-->

<!--<svg style="color: #E3A512" width="40" height="40" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.95263 3.78755C7.87026 3.61206 7.69387 3.5 7.50001 3.5C7.30615 3.5 7.12976 3.61206 7.04739 3.78755L6.07916 5.85035L3.92454 6.17933C3.73928 6.20761 3.58539 6.33713 3.52588 6.51485C3.46638 6.69257 3.51126 6.88864 3.64214 7.02278L5.2159 8.63573L4.84331 10.9195C4.81248 11.1085 4.89228 11.2985 5.04881 11.4087C5.20534 11.519 5.41111 11.5302 5.57868 11.4376L7.50001 10.3755L9.42134 11.4376C9.58892 11.5302 9.79468 11.519 9.95122 11.4087C10.1077 11.2985 10.1875 11.1085 10.1567 10.9195L9.78412 8.63573L11.3579 7.02278C11.4888 6.88864 11.5336 6.69257 11.4741 6.51485C11.4146 6.33713 11.2607 6.20761 11.0755 6.17933L8.92087 5.85035L7.95263 3.78755Z" fill="red"></path> </svg>-->
<!--</div>-->
</div>

<div class="home-tags">
    @if(false)
    @foreach ($design->tags  as $tag)
    <span class="tag"><a href="">{{ $tag->title }}</a></span>
    @endforeach
 @endif

</div>
                    </div>
                    <div class="second-half col-xl-8" style="height: 90%;">
                        <img src="{{ designImage($design->images)  }}" width="100%" height="100%" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

