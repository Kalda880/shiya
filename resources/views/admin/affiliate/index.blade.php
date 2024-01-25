@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           المسوقين
        </h2>
        <div class="w-full sm:w-auto flex flex-wrap gap-y-3 mt-4 sm:mt-0">
            <a href="{{ myRoute('dashboard.affiliate.create') }}" class="btn btn-primary shadow-md mr-2">
                 <i class="w-4 h-4 mr-2" data-lucide="plus"></i> اضافة مسوق جديد
            </a>
         </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">

            <table  class="display table table-report -mt-2" style="width:100%">

                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">الاسم</th>
                        <th class="whitespace-nowrap"> الصورة  </th>
                        <th class="whitespace-nowrap"> رقم الجوال  </th>
                        <th class="whitespace-nowrap">{{trans('messages.email')}}  </th>
                        <th class="whitespace-nowrap"> عدد الميعات   </th>
                        <th class="whitespace-nowrap"> إجمالي المبيعات   </th>
                        <th class="whitespace-nowrap">الكود</th>
                        <th class="whitespace-nowrap">التحكم</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($affiliate as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->name }} </td>
                <td class="text-center">
                    <img alt="" data-action="zoom" class="rounded-md" width="80" src="{{ $order->image }}">
               </td>
               <td>  {{ $order->phone }} </td>
               <td>  {{ $order->email }} </td>
               @if ($order->payments)
               <td> {{ $order->payments->count() }} </td>
               <td> {{ 0.1 * $order->payments->sum('amount') }} ريال</td>
               @else
               <td> 0 </td>
               <td> 0.00 ريال </td>
               @endif
               <td>  {{ $order->code }}  </td>



                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="{{ myRoute('dashboard.affiliate.edit', $order->id) }}">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1 ml-1"></i> عرض </a>

                            <form method="POST" action="{{ myRoute('dashboard.affiliate.destroy', $order->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="flex items-center text-danger delete">  <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> مسح </button>

                            </form>
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

