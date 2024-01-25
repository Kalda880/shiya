@extends('layouts.site')

@push('css')

<link rel="stylesheet" href="{{ asset('front/pages/contactus.css')}}">

@endpush

@section('content')

<div class="page-container  " style="margin:0; margin-top:100px; ">

    @include('customer.sidebar')

    <div class="pages  ">

        <div class="payment-history " data-page="payment-history">
            <h2>سجلات الدفع</h2>
            <div class="table-container">
                <table>
                    <thead>

                        <th>رقم المرجع </th>
                        <th> التاريخ </th>
                        <th>التكلفة</th>
                        <th>
                            الحالة
                        </th>
                        <th></th>
                    </thead>
                    <tbody>

                        @foreach($payments as $payment)

                        <tr>
                            <td> #{{ $payment->number}} </td>
                            <td>{{ $payment->created_at}}</td>
                            <td>{{ $payment->amount}}</td>

                            <td>نجح</td>
                            <td style="display: flex;
                        justify-content: center;">
                         <a href="{{ $payment->invoice }}" target="_blank">
                                <span>

                                    <svg id="import" xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                        viewBox="0 0 44 44">
                                        <g id="Group_651" data-name="Group 651" transform="translate(15.712 5.958)"
                                            opacity="0.4">
                                            <path id="Vector"
                                                d="M5.318,6.693a1.371,1.371,0,0,1-.972-.4L-.347,1.6A1.375,1.375,0,1,1,1.6-.347L5.318,3.374,9.039-.347A1.375,1.375,0,0,1,10.984,1.6L6.291,6.291A1.371,1.371,0,0,1,5.318,6.693Z"
                                                transform="translate(0.75 14.829)" fill="#0083a8"></path>
                                            <path id="Vector-2" data-name="Vector"
                                                d="M.625,20.645A1.375,1.375,0,0,1-.75,19.27V.625A1.375,1.375,0,0,1,2,.625V19.27A1.375,1.375,0,0,1,.625,20.645Z"
                                                transform="translate(5.444 0.75)" fill="#0083a8"></path>
                                        </g>
                                        <path id="Vector-3" data-name="Vector"
                                            d="M15.292,16.667A15.754,15.754,0,0,1,3.524,11.944,16.278,16.278,0,0,1-.75.625,1.375,1.375,0,1,1,2,.625C2,8.451,7.466,13.917,15.292,13.917S28.583,8.451,28.583.625a1.375,1.375,0,0,1,2.75,0,16.278,16.278,0,0,1-4.274,11.319A15.754,15.754,0,0,1,15.292,16.667Z"
                                            transform="translate(6.708 21.705)" fill="#0083a8"></path>
                                        <path id="Vector-4" data-name="Vector" d="M0,0H44V44H0Z"
                                            transform="translate(44 44) rotate(180)" fill="none" opacity="0"></path>
                                    </svg>

                                </span>
                                تحميل الفاتورة
                              </a>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

<script src="{{ asset('front/pages/contactus.js')}}"></script>

@endpush
