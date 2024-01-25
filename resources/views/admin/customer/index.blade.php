@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           المستخدمين
        </h2>

    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">

            <table  class="display table table-report -mt-2" style="width:100%">

                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">الاسم</th>
                        <th class="whitespace-nowrap"> الصورة  </th>
                        <th class="whitespace-nowrap"> الهاتف  </th>
                        <th class="whitespace-nowrap">{{trans('messages.email')}}  </th>
                        <th class="whitespace-nowrap"> التصميمات   </th>
                        <th class="whitespace-nowrap"> الحالة   </th>
                        <th class="whitespace-nowrap">التحكم</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($customers as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->name }} </td>
                <td class="text-center">
                    <img alt="" data-action="zoom" class="rounded-md" width="80" src="{{ $order->image }}">
               </td>
               <td>  {{ $order->phone }} </td>
               <td>  {{ $order->email }} </td>
               <td> {{ $order->designs->count() }}  </td>
               <td>
                @if ($order->customer_status == 1)
                <span class="bg-success text-white rounded-md p-2">مفعل</span>
                @else
                <span class="bg-danger text-white rounded-md p-2">غير مفعل</span>
                @endif
              </td>


                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center text-danger delete-confirm-model" data-tw-target="#delete-confirmation-modal"  href="javascript:;" data-text="المستخدم :{{$order->name}}"  data-href="{{ myRoute('dashboard.customer.destroy', $order->id) }}">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> مسح </a>
                   
                    </div>

                </td>
            </tr>

          @endforeach

                </tbody>
            </table>
        </div>
        @include("admin.dialogs.delete",['id_modal'=>"delete-confirmation-modal"])



    </div>

</div>

@endsection

@include('inc.datatable')

