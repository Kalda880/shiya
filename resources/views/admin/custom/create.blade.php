@extends('layouts.main')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           انشاء فاتورة
        </h2>
    </div>

    <form method="POST" action="{{ myRoute('dashboard.newinvoice') }}" enctype="multipart/form-data">
        @csrf

    <div class="grid grid-cols-12 gap-6 mt-5">



        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">



                <div class="card-header">
                    <h3> بيانات العميل </h3>
                </div>

                <div class="mt-3">
                    <label for="crud-form-1" class="form-label"> الاسم  </label>
                    <input id="crud-form-1" type="text" required name="name" value="{{ $user->name }}" class="form-control w-full" >
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label"> رقم الهاتف  </label>
                    <input id="crud-form-1" type="text" required name="phone" value="{{ $user->phone }}" class="form-control w-full" >
                </div>

                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">  {{trans('messages.email')}} </label>
                    <input id="crud-form-1" type="email" required name="email" value="{{ $user->email }}" class="form-control w-full" >
                </div>



                <input id="crud-form-1" type="hidden" required name="request_id" value="{{ $user->id }}" class="form-control w-full" >
            </div>

        </div>
        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">


                <div class="card-header">
                    <h3> بيانات الفاتورة </h3>
                </div>

                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">    المنتج    </label>
                    <input id="crud-form-1" type="text" required name="product" value="{{ old('product') }}" class="form-control w-full" >
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">   قيمة المنتج    </label>
                    <input id="crud-form-1" type="text" required name="price" value="{{ old('price') }}" class="form-control w-full" >
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">    العدد    </label>
                    <input id="crud-form-1" type="text" required name="qty" value="{{ old('qty') }}" class="form-control w-full" >
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">    الاجمالي      </label>
                    <input id="crud-form-1" type="text" required name="total" value="{{ old('total') }}" class="form-control w-full" >
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">    الضريبة      </label>
                    <input id="crud-form-1" type="text" required name="tax" value="{{ old('tax') }}" class="form-control w-full" >
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">    الاجمالي بعد الضريبة      </label>
                    <input id="crud-form-1" type="text" required name="grand_total" value="{{ old('grand_total') }}" class="form-control w-full" >
                </div>




                <div class="text-right mt-5">
                    <a href="{{ myRoute('dashboard.custom') }}" type="button" class="btn btn-outline-secondary w-24 mr-1">الغاء</a>
                    <button type="submit" class="btn btn-primary w-24">حفظ</button>
                </div>

            </div>

        </div>


    </div>
</form>
</div>

@endsection
