@extends('layouts.designer-customer.index')

@section('content')


<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-6">

                  <div class="col-span-12 lg:col-span-12 mt-4">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                          المعاملات المالية
                        </h2>

                    </div>
                    <div class="intro-y box p-5 mt-5 sm:mt-4">

                        <div class="tab-content mt-5">
                            <div class="tab-pane active" id="daily-new-transaction" role="tabpanel" aria-labelledby="daily-new-transaction-tab">
                                <div class="rounded-lg overflow-x-auto overflow-y-hidden">

                                    <table style="text-align: right;" class="table table-striped">

                                        <thead class="table-dark">
                                            <tr>
                                                <th class="!font-normal">#</th>
                                                <th class="!font-normal text-right">التصميم</th>
                                                <th class="!font-normal text-right">سعر التصميم</th>
                                                <th class="!font-normal text-right">المبلغ</th>
                                                <th class="!font-normal text-right">الحالة</th>
                                                <th class="!font-normal text-right">التاريخ</th>
                                                <th class="!font-normal text-right">عرض</th>
                                             </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($payments as $index => $payment)

                                            <tr>
                                                <td class="text-slate-500 whitespace-nowrap"> {{ $index + 1 }}  </td>
                                                <td class="text-right text-success">{{ ($payment->design) ? $payment->design->title : '' }}</td>
                                                <td class="text-right">{{ $payment->amount }}</td>
                                                <td class="text-right">{{ $payment->amount*$payment->designer_percentage }}</td>
                                                <td class="text-right text-success"> تم الدفع </td>
                                                <td class="text-right">{{ date('Y-m-d', strtotime($payment->created_at))  }}</td>
                                                <td class="text-right"><a target="_blank" href="{{ $payment->file }}" class="btn btn-success text-white"> عرض </a> </td>


                                            </tr>

                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection
