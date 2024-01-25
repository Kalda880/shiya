@extends('layouts.main')

@section('content')

<div class="content settings-page">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           اعدادات عامة
        </h2>

    </div>

    <div class="box intro-y p-3 mt-3">

     <ul class="nav nav-pills flex-col md:flex-row" role="tablist">

        @foreach ($group_settings as $key=>$group_setting)
        <li id="setting-tab-{{$group_setting->id}}" class="nav-item flex-1" role="presentation">
            <button class="nav-link w-full py-2 {{!$key?'active':''}}" data-tw-toggle="pill" data-tw-target="#setting-tab-{{$group_setting->id}}" type="button"
            role="tab" aria-controls="setting-tab-{{$group_setting->id}}" aria-selected="{{!$key?'true':'false'}}" > {{$group_setting->label}}</button>
         </li>
         @endforeach

   </ul>
    </div>

    <div class="grid grid-cols-1 mt-5 intro-y box p-5">

        <div class="tab-content mt-5">

            @foreach ($group_settings as $key=>$group_setting)
            <div id="setting-tab-{{$group_setting->id}}" class="tab-pane leading-relaxed {{!$key?'active':''}}" role="tabpanel" aria-labelledby="setting-tab-{{$group_setting->id}}">

                @foreach ($group_setting->settings()->active()->get() as $index=>$site_setting)
                @include('admin.settings.inputs.index')
                @endforeach

             </div>
            @endforeach    
            


                

          </div>

    </div>

</div>

@endsection

