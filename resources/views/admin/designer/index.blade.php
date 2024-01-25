@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           المصممين
        </h2>
        <div class="w-full sm:w-auto flex flex-wrap gap-y-3 mt-4 sm:mt-0">
            <a href="{{ myRoute('dashboard.designer.create') }}" class="btn btn-primary shadow-md mr-2">
                 <i class="w-4 h-4 mr-2" data-lucide="plus"></i> اضافة مصمم جديد
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
                        <th class="whitespace-nowrap"> الهاتف  </th>
                        <th class="whitespace-nowrap">{{trans('messages.email')}}  </th>
                        <th class="whitespace-nowrap"> التصميمات   </th>
                        <th class="whitespace-nowrap"> الحالة   </th>
                        <th class="whitespace-nowrap">التحكم</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($designers as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->name }} </td>
                <td class="text-center">
                    <img alt="" data-action="zoom" class="rounded-md" width="80" src="{{ $order->image }}">
               </td>
               <td>  {{ $order->phone }} </td>
               <td>  {{ $order->email }} </td>
               <td> {{ $order->designs->count() }}   </td>
               <td>
                @if ($order->designer_status)
                <a href="{{ myRoute('dashboard.designer.status.update',$order->id)}}" class="bg-success text-white rounded-md p-2">مفعل</a>
                @else
                <a href="{{ myRoute('dashboard.designer.status.update',$order->id)}}" class="bg-danger text-white rounded-md p-2">غير مفعل</a>
                @endif
              </td>


                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">

                        <a class="flex items-center text-danger delete-confirm-model" data-tw-target="#delete-confirmation-modal"  href="javascript:;" data-text="المصمم :{{$order->name}}"  data-href="{{ myRoute('dashboard.designer.destroy', $order->id) }}">
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

