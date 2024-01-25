@extends('layouts.designer-customer.index')

@section('content')

<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">

                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            احصائياتك
                        </h2>

                    </div>
                    <div class="intro-y report-box mt-12 sm:mt-4">
                        <div class="box py-0 xl:py-5 grid grid-cols-12 gap-0 divide-y xl:divide-y-0 divide-x divide-dashed divide-slate-200 dark:divide-white/5">
                            <div class="report-box__item py-5 xl:py-0 px-5 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-primary bg-primary/20 border border-primary/20 flex items-center justify-center rounded-full"> <i data-lucide="pie-chart"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{$payment_designer + $payment_affiliate}} ر.س.</div>
                                    <div class="text-slate-500 mt-1"> الرصيد الكلي</div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 sm:!border-t-0 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-pending bg-pending/20 border border-pending/20 flex items-center justify-center rounded-full"> <i data-lucide="credit-card"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{ floatVal($designer->payments_count)}}</div>
                                    <div class="text-slate-500 mt-1">عمليات الشراء </div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-warning bg-warning/20 border border-warning/20 flex items-center justify-center rounded-full"> <i data-lucide="shopping-bag"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{$designer->designs_count}}</div>
                                    <div class="text-slate-500 mt-1">التصميمات </div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-success bg-success/20 border border-success/20 flex items-center justify-center rounded-full"> <i data-lucide="hard-drive"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">0</div>
                                    <div class="text-slate-500 mt-1">كوبونات الخصم</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y report-box mt-12 sm:mt-4">
                        <div class="box py-0 xl:py-5 grid grid-cols-12 gap-0 divide-y xl:divide-y-0 divide-x divide-dashed divide-slate-200 dark:divide-white/5">
                            <div class="report-box__item py-5 xl:py-0 px-5 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-primary bg-primary/20 border border-primary/20 flex items-center justify-center rounded-full"> <i data-lucide="pie-chart"></i> </div>

                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{$payment_designer}} ر.س.</div>
                                    <div class="text-slate-500 mt-1">مبلغ مبيعاتك</div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 sm:!border-t-0 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-pending bg-pending/20 border border-pending/20 flex items-center justify-center rounded-full"> <i data-lucide="credit-card"></i> </div>
                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{ $payment_affiliate }}  ر.س.</div>
                                    <div class="text-slate-500 mt-1"> مبلغ التسويق </div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 sm:!border-t-0 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-pending bg-pending/20 border border-pending/20 flex items-center justify-center rounded-full"> <i data-lucide="credit-card"></i> </div>
                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{ $payment_waiting + $payment_processing }}</div>
                                    <div class="text-slate-500 mt-1"> مبلغ في انتظار السحب </div>
                                </div>
                            </div>
                            <div class="report-box__item py-5 xl:py-0 px-5 sm:!border-t-0 col-span-12 sm:col-span-6 xl:col-span-3">
                                <div class="report-box__content">
                                    <div class="flex">
                                        <div class="report-box__item__icon text-pending bg-pending/20 border border-pending/20 flex items-center justify-center rounded-full"> <i data-lucide="credit-card"></i> </div>
                                    </div>
                                    <div class="text-2xl font-medium leading-7 mt-6">{{ $payment_received }}</div>
                                    <div class="text-slate-500 mt-1"> مبلغ المسحوب </div>
                                </div>
                            </div>
                          
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->


            </div>
        </div>

    </div>
</div>

@endsection
