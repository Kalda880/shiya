@extends('layouts.designer-customer.index')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            تعديل كوبون
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">

            <div class="intro-y box p-5 ">
                <div class="px-5 sm:px-20 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">

                    <form method="POST" action="{{ myRoute('designer.coupon.update', $coupon->id) }}">
                        @csrf
                        @method('PUT')

                    <div class="py-5 grid grid-cols-12 gap-4 gap-y-5">
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-1" class="form-label">الاسم</label>
                            <input id="input-wizard-1" name="name" value="{{ $coupon->name }}" required type="text" class="form-control" placeholder="اسم الكوبون">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-2" class="form-label">الكود</label>
                            <input id="input-wizard-2" name="code" value="{{ $coupon->code }}" required type="text" class="form-control" placeholder="كود الكوبون">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-3" class="form-label">القيمة</label>
                            <input id="input-wizard-3" name="amount" value="{{ $coupon->amount }}" required type="number" class="form-control" placeholder="قيمة الكوبون">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-4" class="form-label">مرات الاستخدام</label>
                            <input id="input-wizard-4" name="times" value="{{ $coupon->times }}" required type="number" class="form-control" placeholder="عدد مرات الاستخدام">
                        </div>
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-center mt-5">
                            <button type="submit" class="btn btn-primary w-24 ml-2">حفظ</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
