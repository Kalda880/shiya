@extends('layouts.designer-customer.index')

@section('content')


<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        احصائيات استخدام كوبونات الخصم
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ myRoute('designer.coupon.create') }}" class="btn btn-primary shadow-md ml-2">اضافة كوبون جديد</a>


        </div>

        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table style="text-align: right;" class="table">
                <thead class="table-dark">
                    <tr>
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">اسم الكوبون</th>
                        <th class="whitespace-nowrap">كود الكوبون</th>
                        <th class="text-center whitespace-nowrap">قيمة الكوبون</th>
                        <th class="text-center whitespace-nowrap">مرات استخدام الكوبون</th>
                        {{--  <th class="text-center whitespace-nowrap">الحالة</th>  --}}
                        <th class="text-center whitespace-nowrap">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach (Auth::user()->coupons as $index => $coupon)


                    <tr class="intro-x">
                        <td> {{ $index + 1 }} </td>
                        <td>  {{ $coupon->name }}  </td>
                        <td class="text-center"> {{ $coupon->code }}  </td>
                        <td class="text-center"> {{ $coupon->amount }}  </td>
                        <td class="text-center"> {{ $coupon->times }}   استخدام</td>
                        {{--  <td class="w-40">
                            <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 lr-2"></i> مفعل </div>
                        </td>  --}}
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center ml-3" href="{{ myRoute('designer.coupon.edit', $coupon->id) }}"> <i data-lucide="check-square" class="w-4 h-4 ml-1"></i> تعديل </a>

                                <form method="post" action="{{ myRoute('designer.coupon.destroy', $coupon->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="flex items-center text-danger confirm"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> حذف </button>
                                </form>
                             </div>
                        </td>

                    </tr>

                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>

</div>
@endsection
