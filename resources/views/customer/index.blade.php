@extends('layouts.site')

@push('css')

 <link rel="stylesheet" href="{{ asset('front/pages/contactus.css')}}">

@endpush

@section('content')

<div class="page-container  " style="margin:0; margin-top:100px; ">

    @include('customer.sidebar')

    <div class="pages ">
        <div class="edit-profile dest active-page" data-page="edit-profile">

            <div class="row">

                <div class="col-md-6">
                  <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">التصميمات</h5>
                          <span class="h2 font-weight-bold mb-0">{{ $designs }}</span>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>


                <div class="col-xl-6">
                  <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">المشروعات</h5>
                          <span class="h2 font-weight-bold mb-0">{{ $projects }}</span>
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

@push('js')

<script src="{{ asset('front/pages/contactus.js')}}"></script>

@endpush
