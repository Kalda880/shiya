@extends('layouts.main')

@section('content')



<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
          تعديل بيانات المسوق
        </h2>
    </div>

    <form method="POST" action="{{ myRoute('dashboard.affiliate.update', $affiliate->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

    <div class="grid grid-cols-12 gap-6 mt-5">


        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">


                <div class="mt-3">
                    <label for="name" class="form-label">الاسم</label>
                    <input id="name" required type="text" name="name" value="{{ $affiliate->name }}" class="form-control w-full" placeholder="الاسم">
                </div>

                <div class="mt-3">
                    <label for="phone" class="form-label">رقم الهاتف</label>
                    <input id="phone" required type="tel" name="phone" value="{{ $affiliate->phone }}" class="form-control w-full" placeholder="رقم الهاتف">
                </div>

                <div class="mt-3">
                    <label for="email" class="form-label">البريد الالكتروني</label>
                    <input id="email" required type="email" name="email" value="{{ $affiliate->email }}" class="form-control w-full" placeholder="البريد الالكتروني">
                </div>

                <div class="mt-3">
                    <label for="code" class="form-label">  كود السوق </label>
                    <input id="code" required type="text" value="{{ $affiliate->code }}" name="code" class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="password" class="form-label"> كلمه السر </label>
                    <input id="password"   type="password" name="password" class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="password_confirmation" class="form-label"> تأكيد كلمه السر</label>
                    <input id="password_confirmation"   type="password" name="password_confirmation" class="form-control w-full">
                </div>


                <div class="mt-3">
                    <label for="image" class="form-label">الصورة لشخصية</label>
                    <input id="image" type="file"   name="image"  class="form-control w-full">
                </div>




                <div class="text-right mt-5">
                    <a href="{{ myRoute('dashboard.affiliate.index') }}" type="button" class="btn btn-outline-secondary w-24 mr-1">لغاء</a>
                    <button type="submit" class="btn btn-primary w-24">حفظ</button>
                </div>

            </div>

        </div>
        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">


                <div class="mt-3">
                    <label for="name" class="form-label">عدد المبيعات</label>
                    <input id="name" readonly type="text" value="{{ $affiliate->payments->count() }}" class="form-control w-full" />
                </div>
                
                <div class="mt-3">
                    <label for="name" class="form-label">إجمالي المبيعات</label>
                    <input id="name" readonly type="text" value="{{ $affiliate->payments->sum('amount') }} ريال" class="form-control w-full" />
                </div>
                
                <div class="mt-3">
                    <label for="name" class="form-label">نسبة المسوق للمبيعات</label>
                    <input id="name" readonly type="text" value="{{ 0.1 * $affiliate->payments->sum('amount') }} ريال" class="form-control w-full" />
                </div>
                
                <div class="mt-3">
                    <label for="name" class="form-label">نسبة الموقع للمبيعات</label>
                    <input id="name" readonly type="text" value="{{ 0.4 * $affiliate->payments->sum('amount') }} ريال" class="form-control w-full" />
                </div>
                
                <div class="mt-3">
                    <h3 class="mb-3">المبيعات<h3>
                    <ul class="list-group">
                        @foreach($affiliate->payments as $payment)
                            <li dir="ltr" class="list-group-item">{{$payment->design->title}} ==== {{$payment->design->price}} ريال</li>
                            <hr />
                        @endforeach
                    </ul>
                </div>


            </div>

        </div>


    </div>
</form>
</div>

@endsection
