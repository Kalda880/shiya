@extends('layouts.site')

@section('content')

@push('css')
<link rel="stylesheet" href="{{ asset('front/pages/profile.css?rnd='.\Str::random(30))}}">
@endpush

    <div class="page-contianer">
        <div class="container">
            <div class="title"> طلب مخصص  </div>
            <div class="content">
  
                <div class="content-form" style="margin: 0 auto;">

                    <form action="{{ myRoute('sendcustom') }}" method="POST">
                        @csrf

                        <div class="inputs">
                            <div class="input-name">
                                <label for="">
                                    اسم العميل او الشركة</label>
                                <input type="text" placeholder="" name="name" required>

                            </div>

                            <div class="input-email">
                                <label for="">البريد الالكتروني</label>
                                <input type="email"   id="" placeholder="" name="email" required>
                            </div>

                            <div class="input-number">
                                <label for="">رقم الهاتف </label>
                                <input type="number" name="phone" required id="">

                            </div>

                            <div class="input-name">
                                <label for=""> العنوان</label>
                                <input type="text" placeholder="" name="address" required>

                            </div>

                            <div style="width: 100%;" class="input-text">
                                <label for="">تفاصيل الطلب</label>

                                <textarea   name="content" required id=""></textarea>

                            </div>

                            <p style="width: 100%;" class="form-btn">
                                <button type="submit">ارسال</button>
                            </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
