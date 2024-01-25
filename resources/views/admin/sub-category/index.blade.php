@extends('layouts.main')

@section('content')
@php
//$table_order = "[3,'asc']";
@endphp

<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <div class="me-auto">
        <h2 class="text-lg font-medium">
          اقسام فرعية
        </h2>
        <h3 class="text-success">قسم {{$category->title}}</h3>

        </div>
        <div class="w-full sm:w-auto flex flex-wrap gap-y-3 mt-4 sm:mt-0">
            <a href="{{ myRoute('dashboard.category.sub-categories.create',['cat_id'=>$category->id]) }}" class="btn btn-primary shadow-md mr-2">
                 <i class="w-4 h-4 mr-2" data-lucide="plus"></i> اضافة فرع جديد
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
                        <th class="whitespace-nowrap">التحكم</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($items as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->name  }} </td>


                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="{{ myRoute('dashboard.category.sub-categories.edit', ['cat_id'=>$category->id,'id'=>$order->id]) }}">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1 ml-1"></i> تعديل </a>
                        <a class="flex items-center text-danger delete-confirm-model" data-tw-target="#delete-confirmation-modal" data-tw-togg1le="modal" href="javascript:;" data-text="{{trans('messages.category')}}:{{$order->title}}"  data-href="{{ myRoute('dashboard.category.sub-categories.destroy', ['cat_id'=>$category->id,'id'=>$order->id]) }}">
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

