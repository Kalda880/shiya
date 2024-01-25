@extends('layouts.designer-customer.index')

@section('content')


<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-6">

                  <div class="col-span-12 lg:col-span-12 mt-4">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                         سحب المبالغ المالية
                        </h2>

                    </div>
                    <div class="intro-y report-box mt-12 sm:mt-4">
                        <div class="box py-0 xl:py-5 grid grid-cols-12 gap-0 divide-y xl:divide-y-0 divide-x divide-dashed divide-slate-200 dark:divide-white/5">
                            <div class="report-box__item py-5 xl:py-0 px-5 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-primary bg-primary/20 border border-primary/20 flex items-center justify-center rounded-full"> <i data-lucide="pie-chart"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{$payment_available}} ر.س.</div>
                                    <div class="text-slate-500 mt-1"> الرصيد المتاح</div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 sm:!border-t-0 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-pending bg-pending/20 border border-pending/20 flex items-center justify-center rounded-full"> <i data-lucide="credit-card"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{ $payment_designer + $payment_affiliate}} ر.س.</div>
                                    <div class="text-slate-500 mt-1"> الرصيد الكي</div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-warning bg-warning/20 border border-warning/20 flex items-center justify-center rounded-full"> <i data-lucide="shopping-bag"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{$payment_designer}}  ر.س.</div>
                                    <div class="text-slate-500 mt-1">مبيعات (مصمم)</div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-success bg-success/20 border border-success/20 flex items-center justify-center rounded-full"> <i data-lucide="hard-drive"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{$payment_affiliate}}  ر.س.</div>
                                    <div class="text-slate-500 mt-1">تسويق</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y report-box mt-12 sm:mt-4">
                        <div class="box py-0 xl:py-5 grid grid-cols-12 gap-0 divide-y xl:divide-y-0 divide-x divide-dashed divide-slate-200 dark:divide-white/5">
                            <div class="report-box__item py-5 xl:py-0 px-5 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-success bg-success/20 border border-success/20 flex items-center justify-center rounded-full"> <i data-lucide="hard-drive"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{$payment_received}}  ر.س.</div>
                                    <div class="text-slate-500 mt-1">الرصيد المسحوب</div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-primary bg-primary/20 border border-primary/20 flex items-center justify-center rounded-full"> <i data-lucide="pie-chart"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{$payment_waiting}} ر.س.</div>
                                    <div class="text-slate-500 mt-1"> الرصيد في انتظار السحب</div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 sm:!border-t-0 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-pending bg-pending/20 border border-pending/20 flex items-center justify-center rounded-full"> <i data-lucide="credit-card"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{ $payment_processing}} ر.س.</div>
                                    <div class="text-slate-500 mt-1"> الرصيد قيد السحب</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-5 sm:mt-4">

                        <div class="tab-content mt-5">
                            <div class="tab-pane active" id="daily-new-transaction" role="tabpanel" aria-labelledby="daily-new-transaction-tab">
                                <div class="rounded-lg overflow-x-auto overflow-y-hidden">
                                    <div class="w-full text-left  mb-2">
                                    <a href="{{route('designer.payments.create')}}" class="btn btn-primary">سحب مبلغ جديد</a>
                                    </div>
                                    <table style="text-align: right;" class="table table-striped">

                                        <thead class="table-dark">
                                            <tr>
                                                <th class="!font-normal">#</th>
                                                <th class="!font-normal text-right">IBAN</th>
                                                <th class="!font-normal text-right">المبلغ</th>
                                                <th class="!font-normal text-right">الحالة</th>
                                                <th class="!font-normal text-right">التاريخ</th>
                                                <th class="!font-normal text-right">سبب الرفض</th>
                                                <th class="!font-normal text-right"></th>

                                              
                                             </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($payment_requests as $index => $payment_request)

                                            <tr>
                                                <td class="text-slate-500 whitespace-nowrap"> {{ $index + 1 }}  </td>
                                                <td class="text-right text-success">{{ ($payment_request->iban)}}</td>
                                                <td class="text-right text-success">{{ ($payment_request->amount)}}</td>
                                                
                                                <td class="text-right text-success"> {{$payment_request->getDocStatus()}} </td>
                                                <td class="text-right"><bdi>{{ date('Y-m-d H:i', strtotime($payment_request->created_at))  }}</bdi></td>
                                                <td class="text-right "> {{$payment_request->raison_declined}} </td>
                                                <td>
                                                    @if($payment_request->doc_status=='W')
                                                    <form method="POST" action="{{route('designer.payments.destroy',['id'=>$payment_request->id])}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">إلغاء</button>    
                                                </form>
                                            @endif
                                            </td>
                                            


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
