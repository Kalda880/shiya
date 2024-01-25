@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           طلبات مخصصه
        </h2>

    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">

            <table  class="display table table-report -mt-2" style="width:100%">

                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">الاسم</th>
                        <th class="whitespace-nowrap"> الهاتف  </th>
                        <th class="whitespace-nowrap">{{trans('messages.email')}}  </th>
                        <th class="whitespace-nowrap"> العنوان   </th>
                        <th class="whitespace-nowrap"> الطلب   </th>
                        <th class="whitespace-nowrap">الفاتورة</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($contacts as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->name }} </td>
                <td>  {{ $order->phone }} </td>
                <td>  {{ $order->email }} </td>
                <td>  {{ $order->address }} </td>
                <td>  {{ $order->content }} </td>

                 <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">

                        @if (is_null($order->file))

                        <a class="flex items-center text-primary" target="_blank"  href="{{ myRoute('dashboard.createinvoice', $order->id) }}">
                            <i data-lucide="file-text" class="w-4 h-4 mr-1"></i> انشاء </a>

                        @else

                        <!--<a class="flex items-center text-primary ml-4" target="_blank"  href="{{ myRoute('dashboard.createinvoice', $order->id) }}">-->
                        <!--    <i data-lucide="file-text" class="w-4 h-4 ml-1"></i> انشاء </a>-->
                            
                        <a class="flex items-center text-danger" target="_blank"  href="{{  $order->file }}">
                            <i data-lucide="download" class="w-4 h-4 ml-1"></i> تحميل </a>

                        @endif

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

