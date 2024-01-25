@extends('layouts.designer-customer.index')

@section('content')

<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="flex items-center text-lg font-medium ml-auto">
            الصفحة الشخصية
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{ myRoute('designer.profile.edit') }}" class="btn btn-primary shadow-md ml-2"> <i class="w-4 h-4 ml-2" data-lucide="pencil"></i> تعديل البيانات الشخصية </a>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Profile Cover -->
        <div class="col-span-12">
            <div class="box intro-y px-3 pt-3 pb-5">
                <div class="image-fit h-80 before:content-[''] before:absolute before:w-full before:h-full before:bg-gradient-to-b from-black/20 to-black before:rounded-md before:z-10 ">
                    <img alt="" class="rounded-md" src="{{ Auth::user()->cover }}">
                </div>
                <div class="flex flex-col 2xl:flex-row items-center justify-center text-center 2xl:text-left">
                    <div class="-mt-20 2xl:-mt-10 2xl:ml-10 z-20">
                        <div class="image-fit w-40 h-40 rounded-full border-4 border-white shadow-md overflow-hidden">
                            <img alt="" src="{{ displayImage(Auth::user()->image) }}">
                        </div>
                    </div>
                    <div class="2xl:ml-5">
                        <h2 class="text-2xl mt-5 font-medium">
                         {{ Auth::user()->name }}
                        </h2>
                        <div class="mt-2 text-slate-500 flex items-center justify-center 2xl:justify-start"> <i data-lucide="map-pin" class="w-4 h-4 ml-2"></i>  {{ Auth::user()->country ?? "لم تحدد مدينتك بعد" }} </div>
                    </div>
                    <div class="mx-auto grid grid-cols-2 gap-y-2 md:gap-y-0 gap-x-5 h-20 mt-5 2xl:border-l 2xl:border-r border-dashed border-slate-200 px-10 mb-6 2xl:mb-0">
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center 2xl:justify-start"> <i data-lucide="mail" class="w-4 h-4 ml-2"></i>   {{ Auth::user()->email }} </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center 2xl:justify-start"> <i data-lucide="instagram" class="w-4 h-4 ml-2"></i>   {{ Auth::user()->instagram ?? "لم تضف رابط" }} </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center 2xl:justify-start"> <i data-lucide="twitter" class="w-4 h-4 ml-2"></i>   {{ Auth::user()->twitter ?? "لم تضف رابط" }} </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center 2xl:justify-start"> <i data-lucide="linkedin" class="w-4 h-4 ml-2"></i>   {{ Auth::user()->linkedin ?? "لم تضف رابط" }} </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Profile Cover -->
        <!-- BEGIN: Profile Content -->
        <div class="col-span-12 xl:col-span-6">
            <div class="box intro-y p-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium truncate text-base">المعلومات الشخصية</div>
                </div>
                <div class="leading-relaxed">
                    <p class="mt-5">
                        {!! Auth::user()->about ?? "لم تكتب نبذه عنك حتى الآن" !!} 
                        
                    </p>
                 </div>
            </div>
            <div class="box intro-y p-5 mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium truncate text-base">المهارات</div>
                </div>
                <div class="flex flex-wrap">

                    @foreach (Auth::user()->skills as $skill)

                    <div class="px-3 py-1 bg-primary/10 border border-primary/10 rounded-full mr-2 mb-2">{{ $skill->title }}</div>

                    @endforeach


                </div>
            </div>
        </div>


    </div>
</div>
@endsection
