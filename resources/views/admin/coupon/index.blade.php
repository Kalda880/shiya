@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           الكوبونات
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">


        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table  class="display table table-report -mt-2" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">المصمم</th>
                        <th class="whitespace-nowrap">العنوان</th>
                        <th class="whitespace-nowrap"> القيمة  </th>
                        <th class="whitespace-nowrap"> الكود  </th>
                        <th class="whitespace-nowrap"> مرات الاستخدام  </th>
                        <th class="whitespace-nowrap"> استخدم  </th>
                        <th class="whitespace-nowrap">تاريخ الاضافة</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($coupons as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->designer->name }} </td>
                <td>  {{ $order->name }} </td>
                <td>  {{ $order->amount }} </td>
                <td>  {{ $order->code }} </td>
                <td>  {{ $order->times }} </td>
                <td> 0 </td>
                <td>  {{ $order->created_at }} </td>

            </tr>

          @endforeach

                </tbody>
            </table>
        </div>



    </div>

</div>

@endsection

@include('inc.datatable')

