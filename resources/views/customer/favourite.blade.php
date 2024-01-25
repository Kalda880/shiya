@extends('layouts.site')

@push('css')

<link rel="stylesheet" href="{{ asset('front/pages/contactus.css')}}">

@endpush

@section('content')

<div class="page-container  " style="margin:0; margin-top:100px; ">

    @include('customer.sidebar')

    <div class="pages ">

        <div class="favorate  " data-page="favorate">
            <div class="cardd col-lg-3 col-md-12 col-sm-12 col-12">
                <div style="width: 100%;" class="card-img">
                    <img style="width: 100%; height: 100%;" src="/assets/images/cards/card1.png" alt="">
                    <div class="edit-badge">

                        <span><svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="5.5"
                                viewBox="2.25 9.25 19.5 5.5">
                                <g data-name="more">
                                    <path
                                        d="M5 14.75c-1.52 0-2.75-1.23-2.75-2.75S3.48 9.25 5 9.25 7.75 10.48 7.75 12 6.52 14.75 5 14.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM19 14.75c-1.52 0-2.75-1.23-2.75-2.75S17.48 9.25 19 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM12 14.75c-1.52 0-2.75-1.23-2.75-2.75S10.48 9.25 12 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5Z"
                                        fill="#fff" fill-rule="evenodd" data-name="Vector" />
                                </g>
                            </svg></span>
                    </div>
                </div>

            </div>
            <div class="cardd col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card-img">
                    <img src="/assets/images/cards/card1.png" alt="">
                    <div class="edit-badge">

                        <span><svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="5.5"
                                viewBox="2.25 9.25 19.5 5.5">
                                <g data-name="more">
                                    <path
                                        d="M5 14.75c-1.52 0-2.75-1.23-2.75-2.75S3.48 9.25 5 9.25 7.75 10.48 7.75 12 6.52 14.75 5 14.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM19 14.75c-1.52 0-2.75-1.23-2.75-2.75S17.48 9.25 19 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM12 14.75c-1.52 0-2.75-1.23-2.75-2.75S10.48 9.25 12 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5Z"
                                        fill="#fff" fill-rule="evenodd" data-name="Vector" />
                                </g>
                            </svg></span>
                    </div>
                </div>

            </div>
            <div class="cardd col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card-img">
                    <img src="/assets/images/cards/insta2.png" alt="">
                    <div class="edit-badge">

                        <span><svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="5.5"
                                viewBox="2.25 9.25 19.5 5.5">
                                <g data-name="more">
                                    <path
                                        d="M5 14.75c-1.52 0-2.75-1.23-2.75-2.75S3.48 9.25 5 9.25 7.75 10.48 7.75 12 6.52 14.75 5 14.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM19 14.75c-1.52 0-2.75-1.23-2.75-2.75S17.48 9.25 19 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM12 14.75c-1.52 0-2.75-1.23-2.75-2.75S10.48 9.25 12 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5Z"
                                        fill="#fff" fill-rule="evenodd" data-name="Vector" />
                                </g>
                            </svg></span>
                    </div>
                </div>

            </div>
            <div class="cardd col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card-img">
                    <img src="/assets/images/cards/card1.png" alt="">
                    <div class="edit-badge">

                        <span><svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="5.5"
                                viewBox="2.25 9.25 19.5 5.5">
                                <g data-name="more">
                                    <path
                                        d="M5 14.75c-1.52 0-2.75-1.23-2.75-2.75S3.48 9.25 5 9.25 7.75 10.48 7.75 12 6.52 14.75 5 14.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM19 14.75c-1.52 0-2.75-1.23-2.75-2.75S17.48 9.25 19 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM12 14.75c-1.52 0-2.75-1.23-2.75-2.75S10.48 9.25 12 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5Z"
                                        fill="#fff" fill-rule="evenodd" data-name="Vector" />
                                </g>
                            </svg></span>
                    </div>
                </div>

            </div>
            <div class="cardd col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card-img">
                    <img src="/assets/images/cards/card1.png" alt="">
                    <div class="edit-badge">

                        <span><svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="5.5"
                                viewBox="2.25 9.25 19.5 5.5">
                                <g data-name="more">
                                    <path
                                        d="M5 14.75c-1.52 0-2.75-1.23-2.75-2.75S3.48 9.25 5 9.25 7.75 10.48 7.75 12 6.52 14.75 5 14.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM19 14.75c-1.52 0-2.75-1.23-2.75-2.75S17.48 9.25 19 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM12 14.75c-1.52 0-2.75-1.23-2.75-2.75S10.48 9.25 12 9.25s2.75 1.23 2.75 2.75-1.23 2.75-2.75 2.75Zm0-4a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5Z"
                                        fill="#fff" fill-rule="evenodd" data-name="Vector" />
                                </g>
                            </svg></span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection

@push('js')

<script src="{{ asset('front/pages/contactus.js')}}"></script>

@endpush
