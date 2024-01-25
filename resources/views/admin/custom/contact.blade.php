@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
              تواصل معنا
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
                        <th class="whitespace-nowrap"> الموضوع   </th>
                        <th class="whitespace-nowrap"> الرسالة   </th>
                        <th class="whitespace-nowrap">الحالة</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($contacts as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->name }} </td>
                <td>  {{ $order->phone }} </td>
                <td>  {{ $order->email }} </td>
                <td>  {{ $order->subject }} </td>
                <td>  {{ $order->message }} </td>
                @if ($order->status == 0)
                <td><span class="btn btn-twitter text-white">جديد</span></td>
                @elseif ($order->status == 1)
                <td><span class="btn btn-warning text-white">جاري العمل</span></td>
                @else
                <td><span class="btn btn-success text-white">منتهية</span></td>
                @endif

                {{--  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">


                        <a class="flex items-center text-danger delete" href="javascript:;" data-href="{{ myRoute('dashboard.category.destroy', $order->id) }}">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> مسح </a>
                    </div>

                </td>  --}}
            </tr>

          @endforeach

                </tbody>
            </table>
        </div>



    </div>

</div>

@endsection

@include('inc.datatable')

