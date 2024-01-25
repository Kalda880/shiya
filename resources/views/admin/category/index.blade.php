@extends('layouts.main')

@section('content')
@php
$table_order = "[4,'asc'],[3,'asc']";
@endphp

<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           {{trans('messages.departments')}}
        </h2>
        <div class="w-full sm:w-auto flex flex-wrap gap-y-3 mt-4 sm:mt-0">
            <a href="{{ myRoute('dashboard.category.create') }}" class="btn btn-primary shadow-md mr-2">
                 <i class="w-4 h-4 mr-2" data-lucide="plus"></i> اضافة قسم جديد
            </a>
         </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">


        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table  class="display table table-report -mt-2" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">العنوان</th>
                        <th class="whitespace-nowrap"> الصورة  </th>
                        <th class="whitespace-nowrap"> ترتيب  </th>
                        <th class="whitespace-nowrap"> الحالة  </th>
                        <th class="whitespace-nowrap"> التصميمات  </th>
                        <th class="whitespace-nowrap"> مميز  </th>
                        <th class="whitespace-nowrap">التحكم</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($categories as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->title }} </td>
                <td class="text-center">
                    <img alt="" data-action="zoom" class="rounded-md" width="80" src="{{ categoryImage($order) }}">
               </td>
               <td>  {{ $order->cat_order }} </td>

               <td class="w-40">
                <div class="form-check form-switch w-full sm:w-auto sm:ms-auto mt-3 sm:mt-0">
                <input disabled @if ($order->is_active===1) checked @endif id="show-example-{{$order->id}}"  name="show-example-{{$order->id}}"  class="form-check-input me-0 ms-3" type="checkbox">
                </div>
                </td>

                <td> {{ $order->designs->count() }}  </td>
                <td> 0  </td>

                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="{{ myRoute('dashboard.category.edit', $order->id) }}">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1 ml-1"></i> تعديل </a>
                        <a class="flex items-center text-danger delete-confirm-model" data-tw-target="#delete-confirmation-modal" data-tw-togg1le="modal" href="javascript:;" data-text="{{trans('messages.category')}}:{{$order->title}}"  data-href="{{ myRoute('dashboard.category.destroy', $order->id) }}">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> مسح </a>
                    <a href="{{ myRoute('dashboard.category.sub-categories.index',['cat_id'=>$order->id]) }}" class="flex items-center text-info">
                        <i data-lucide="list" class="w-4 h-4 mr-1 ml-1"></i>
                    فروع
                    </a>

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

