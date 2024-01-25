@extends('layouts.main')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           @lang('admin.edit privacy')
        </h2>
    </div>

    <form method="POST" action="{{ myRoute('dashboard.updateprivacy') }}">
        @csrf

    <div class="grid grid-cols-12 gap-6 mt-5">



        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">


                @foreach ($locales as $locale)

                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">@lang('admin.' . $locale . '.terms')</label>
                    <textarea id="crud-form-1"  name="{{ $locale }}[content]"   class="form-control w-full editor">{{ $term->translate($locale)->content }}</textarea>
                </div>


                @endforeach


                <div class="text-right mt-5">
                    <a href="{{ myRoute('dashboard.branches.index') }}" type="button" class="btn btn-outline-secondary w-24 mr-1">@lang('admin.cancel')</a>
                    <button type="submit" class="btn btn-primary w-24">@lang('admin.save')</button>
                </div>
            </div>

        </div>



    </div>
</form>
</div>

@endsection

