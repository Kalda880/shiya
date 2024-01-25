@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
            @lang('admin.payment setting')
        </h2>
    </div>


    <div class="grid grid-cols-12 gap-6 mt-5">


        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table  class="display table table-report -mt-2" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">@lang('admin.company')</th>
                        <th class="whitespace-nowrap">@lang('admin.name')  </th>
                        <th class="whitespace-nowrap">@lang('admin.branch_name')  </th>
                        <th class="whitespace-nowrap">@lang('admin.account_number')</th>
                        <th class="whitespace-nowrap">@lang('admin.swift')</th>
                        <th class="whitespace-nowrap">@lang('admin.iban')</th>
                        <th class="whitespace-nowrap">@lang('admin.status')</th>
                        <th class="whitespace-nowrap">@lang('admin.action')</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($payments as $index =>  $order)


            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>
                    <a href="{{ myRoute('dashboard.companies.show', $order->company_id)}}">
                         {{ $order->company->title }}
                    </a>
                 </td>
                <td>  {{ $order->name }} </td>
                <td>  {{ $order->branch_name }} </td>
                <td>  {{ $order->account_number }} </td>
                <td>  {{ $order->swift }} </td>
                <td>  {{ $order->iban }} </td>
                <td>

                    @if ($order->status == 1)

                    <button type="button" class="w-24 mr-1 mb-2 flex items-center justify-center btn btn-success text-white">

                        @lang('admin.active')
                    </button>

                    @else

                    <button type="button" class="w-24 mr-1 mb-2 flex items-center justify-center btn btn-danger text-white">

                        @lang('admin.notactive')
                    </button>

                    @endif
                 </td>

                <td>

                    <form action="{{ myRoute('dashboard.paymentsetting.update', $order->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @if ($order->status == 0)

                        <button type="submit" class="w-24 mr-1 mb-2 flex items-center justify-center btn btn-success text-white activate">
                            <i data-lucide="edit" class="w-4 h-4 mr-1"></i>
                            @lang('admin.activate')
                        </button>

                        @endif

                    </form>
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

