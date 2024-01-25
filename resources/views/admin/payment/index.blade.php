@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           المدفوعات
        </h2>

    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">

            <table  class="display table table-report -mt-2" style="width:100%">

                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">رقم الفاتورة</th>
                        <th class="whitespace-nowrap">المستخدم</th>
                        <th class="whitespace-nowrap"> التصميم  </th>
                        <th class="whitespace-nowrap"> المبلغ  </th>
                        <th class="whitespace-nowrap"> التاريخ   </th>
                        <th class="whitespace-nowrap">التحكم</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($payments as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->number }} </td>
                <td>  {{ $order->customer->name }} </td>
                <td class="text-center">
                    <img alt="" data-action="zoom" class="rounded-md" width="80" src="{{ $order->image }}">
                    {{ $order->design->title }}
               </td>
               <td>  {{ $order->amount }} </td>
               <td>  {{ $order->created_at }} </td>



                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">

                        <a class="flex items-center text-danger delete" href="{{  $order->invoice }}">
                            <i data-lucide="download" class="w-4 h-4 mr-1"></i> تحميل الفاتورة </a>
                    </div>

                </td>
            </tr>

          @endforeach

                </tbody>
            </table>
        </div>



    </div>

</div>

@endsection

@include('inc.datatable')

