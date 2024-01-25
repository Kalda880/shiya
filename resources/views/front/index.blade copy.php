@extends('layouts.site')

@section('content')

<section class="home">
    <div class="home-container">

        <div class="home-content">
            <div class="home-text">
                <h1>أبدأ فـي إنشـاء</h1>
                <h2>تصمماتك الخاصة بشكل متميز</h2>
                <p>تصفح واكتشف لعي من المصادر المتنوعة والمميز لدينا يث يمكنك ستخدمها بشكل مجني مع مكان
                    إعادة التميم حسب رغبت وتحميلها</p>
            </div>

            <!--<div class="home-search">-->

            <!--    <form method="post" action="{{ myRoute('search') }}" >-->
            <!--       @csrf-->

            <!--    <input type="text" placeholder="ابحث ن القوالب المجني" name="title">-->
            <!--    <div class="search-btn">-->
            <!--        <span>-->
            <!--            <svg xmlns="http://www.w3.org/2000/svg" width="21.497" height="21.5"-->
            <!--                viewBox="1.25 1.25 21.497 21.5">-->
            <!--                <g data-name="search-normal">-->
            <!--                    <path-->
            <!--                        d="M11.5 21.75c-5.65 0-10.25-4.6-10.25-10.25S5.85 1.25 11.5 1.25s10.25 4.6 10.25 10.25-4.6 10.25-10.25 10.25Zm0-19c-4.83 0-8.75 3.93-8.75 8.75s3.92 8.75 8.75 8.75 8.75-3.93 8.75-8.75-3.92-8.75-8.75-8.75ZM22 22.75c-.19 0-.38-.07-.53-.22l-2-2a.754.754 0 0 1 0-1.06c.29-.29.77-.29 1.06 0l2 2c.29.29.29.77 0 1.06-.15.15-.34.22-.53.22Z"-->
            <!--                        fill="#fff" fill-rule="evenodd" data-name="Vector" />-->
            <!--                </g>-->
            <!--            </svg>-->
            <!--        </span>-->
            <!--    </div>-->
            <!--    </form>-->
            <!--</div>-->

        </div>
        <div class="home-image">
            <div class="image-container">
                <div class="image-text">
                    <p> إصنع هويتك <span style="color: #0083a8;">بسهولة </span> لأعمالك الخاصة </p>
                </div>
                <div class="tree">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="32.105" height="46.155"
                            viewBox="10.569 4.315 32.105 46.155">
                            <g data-name="tree">
                                <path
                                    d="M35.872 22.318H17.37c-2.617 0-3.527-1.753-1.996-3.883l9.25-12.955c1.088-1.553 2.907-1.553 3.994 0l9.25 12.955c1.532 2.13.622 3.883-1.996 3.883ZM39.022 39.932H14.22c-3.505 0-4.703-2.33-2.64-5.169l8.852-12.445H32.81l8.851 12.445c2.064 2.84.866 5.169-2.64 5.169ZM28.285 39.932v8.874c0 .91-.754 1.664-1.664 1.664-.91 0-1.663-.755-1.663-1.664v-8.874h3.327Z"
                                    fill="#fff" fill-rule="evenodd" data-name="Vector" />
                            </g>
                        </svg></span>
                    <div class="dots-wrapper">
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                    </div>

                </div>
                <div class="image-color">
                    <img src="{{ asset('images/colors.jpg')}}" alt="">
                </div>
                <div class="image-edit">
                    <img src="{{ asset('images/edit.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

</section>
<section class="slider-section">
    <div class="slider-container">
        <div class="slider-title">
            <h2>اكتشف ابرز الأقسام</h2>
        </div>
        <div class="slider-parent">
            <button class="prev-btn"><svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                    viewBox="7.242 3.33 7.098 15.84">
                    <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52" stroke-linejoin="round"
                        stroke-linecap="round" stroke-width="1.5" stroke="#1a1c1e" fill="transparent"
                        data-name="Vector" />
                </svg></button>
            <div class="slider slider-nav">

                @foreach ($categories as $category)


                <div>
                    <a href="{{ myRoute('template') }}?category_id={{ $category->id }}">
                       <img src="{{ $category->image }}" alt=""> <p>{{ $category->title }}</p>
                    </a>
                </div>

                @endforeach

            </div>

            <button class="prev-btn next-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="7.098" height="15.84"
                    viewBox="7.242 3.33 7.098 15.84">
                    <path d="M15.09 19.92 8.57 13.4c-.77-.77-.77-2.03 0-2.8l6.52-6.52" stroke-linejoin="round"
                        stroke-linecap="round" stroke-width="1.5" stroke="#1a1c1e" fill="transparent"
                        data-name="Vector"></path>
                </svg>
            </button>

        </div>

    </div>
</section>
<!-------Gallary-------------------------->


@foreach ($categories->where('featured', 1) as $category)

<section class="Gallary-section">
    <section class="invite-section">
        <div class="containerr">

            <div class="invite-title">
                <h2>{{ $category->title }}</h2>
                <a href="{{ myRoute('template') }}?category_id={{$category->id}}">
                    كتشف المزيد
                    <span><svg id="arrow-left_outline" data-name="arrow-left/outline"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="vuesax_outline_arrow-left" data-name="vuesax/outline/arrow-left">
                                <g id="arrow-left">
                                    <path id="Vector"
                                        d="M6.817,13.637a.742.742,0,0,1-.53-.22L.218,7.347a.754.754,0,0,1,0-1.06L6.287.218a.75.75,0,0,1,1.06,1.06l-5.54,5.54,5.54,5.54a.754.754,0,0,1,0,1.06A.725.725,0,0,1,6.817,13.637Z"
                                        transform="translate(2.753 5.182)" fill="#0083a8" />
                                    <path id="Vector-2" data-name="Vector"
                                        d="M17.58,1.5H.75A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0H17.58a.755.755,0,0,1,.75.75A.755.755,0,0,1,17.58,1.5Z"
                                        transform="translate(2.92 11.25)" fill="#0083a8" />
                                    <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none"
                                        opacity="0" />
                                </g>
                            </g>
                        </svg>
                    </span>
                </a>
            </div>

            <div class="invite-cards">

                @foreach ($category->designs->where('status', 1)->take(6) as $design)

                <div class="invite-card showdetails" data-id="{{ $design->id }}">
                    <img src="{{ designImage($design->images)  }}" alt="">
                    <div class="icons-container">

                        <div class="star">
                            <a href="{{ myRoute('customer.addfav', $design->id) }}"
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.125" height="20.13">
                                <path
                                    d="m20.9 8.376-4.629 4.512 1.094 6.373a.744.744 0 0 1-1.079.784l-5.723-3.01-5.724 3.009a.744.744 0 0 1-1.078-.783l1.093-6.374-4.63-4.511a.744.744 0 0 1 .413-1.268l6.398-.93L9.895.382c.251-.508 1.084-.508 1.334 0l2.861 5.798 6.398.929a.745.745 0 0 1 .413 1.268Z"
                                    fill="" fill-rule="evenodd" data-name="Path 11230" />
                            </svg>
                            </a>
                        </div>

                        <div class="eye showdetails"  data-id="{{ $design->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17.13"
                                viewBox="2 3.43 20 17.13">
                                <path
                                    d="M21.25 9.15C18.94 5.52 15.56 3.43 12 3.43c-1.78 0-3.51.52-5.09 1.49-1.58.98-3 2.41-4.16 4.23-1 1.57-1 4.12 0 5.69 2.31 3.64 5.69 5.72 9.25 5.72 1.78 0 3.51-.52 5.09-1.49 1.58-.98 3-2.41 4.16-4.23 1-1.56 1-4.12 0-5.69ZM12 16.04c-2.24 0-4.04-1.81-4.04-4.04S9.76 7.96 12 7.96s4.04 1.81 4.04 4.04-1.8 4.04-4.04 4.04Z"
                                    fill="#f6fbfa" fill-rule="evenodd" data-name="Vector" />
                            </svg>
                        </div>
                    </div>
                </div>


                @endforeach

            </div>
        </div>
    </section>

    @endforeach

    <div class="Gallary-text">
        <a href="{{ myRoute('template') }}">
            <div>
                اكتف المزيد من القوالب <span><svg id="arrow-left_outline" data-name="arrow-left/outline"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g id="vuesax_outline_arrow-left" data-name="vuesax/outline/arrow-left">
                            <g id="arrow-left">
                                <path id="Vector"
                                    d="M6.817,13.637a.742.742,0,0,1-.53-.22L.218,7.347a.754.754,0,0,1,0-1.06L6.287.218a.75.75,0,0,1,1.06,1.06l-5.54,5.54,5.54,5.54a.754.754,0,0,1,0,1.06A.725.725,0,0,1,6.817,13.637Z"
                                    transform="translate(2.753 5.182)" fill="#0083a8" />
                                <path id="Vector-2" data-name="Vector"
                                    d="M17.58,1.5H.75A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0H17.58a.755.755,0,0,1,.75.75A.755.755,0,0,1,17.58,1.5Z"
                                    transform="translate(2.92 11.25)" fill="#0083a8" />
                                <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none" opacity="0" />
                            </g>
                        </g>
                    </svg>
                </span>
            </div>
        </a>
    </div>
</section>



<!--<section class="Search-Words">-->
<!--    <div class="containerr">-->
<!--        <div class="Search-Title">-->
<!--            لمات <span>البحث الشهر</span>-->
<!--        </div>-->
<!--        <div class="Search-Tags">-->

<!--            @foreach ($famouse_tags as $tag)-->

<!--            <div class="Tag">-->

<!--                <span>-->
<!--                    <svg id="vuesax_outline_search-normal" data-name="vuesax/outline/search-normal"-->
<!--                        xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">-->
<!--                        <g id="search-normal">-->
<!--                            <path id="Vector"-->
<!--                                d="M7.688,15.375a7.688,7.688,0,1,1,7.688-7.687A7.7,7.7,0,0,1,7.688,15.375Zm0-14.25A6.563,6.563,0,1,0,14.25,7.688,6.57,6.57,0,0,0,7.688,1.125Z"-->
<!--                                transform="translate(0.938 0.938)" fill="" />-->
<!--                            <path id="Vector-2" data-name="Vector"-->
<!--                                d="M2.061,2.623a.556.556,0,0,1-.4-.165L.163.958a.562.562,0,0,1,.8-.8l1.5,1.5a.566.566,0,0,1,0,.8A.556.556,0,0,1,2.061,2.623Z"-->
<!--                                transform="translate(14.439 14.439)" fill="" />-->
<!--                            <path id="Vector-3" data-name="Vector" d="M0,0H18V18H0Z" fill="none" opacity="0" />-->
<!--                        </g>-->
<!--                    </svg>-->
<!--                    {{ $tag->title }}-->
<!--                </span>-->
<!--            </div>-->

<!--            @endforeach-->




<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--- JOin us section-->
<section class="Join-Us">
    <div class="containerr">
        <img class="Join-bg" src="{{ asset('images/bg.png')}}" alt="">
        <div class="Join-detail">
            <div class="Join-content">
                <h2>
                    نضم إلي عالم المبدعين لدينا
                </h2>
                <p>
                    هناك حيقة مثبتة من زمن ويل وهي أن المحتوى المقروء لصفحة م سيلهي القارئ عن لتركيز على الشكل
                    الخارجي لنص أو شكل توضع لقراءات في الصفح التي يقرها
                </p>
                <div class="Join-images">
                    <img src="{{ asset('images/Group 16895.png')}}" alt="">
                </div>
            </div>
            {{--  <div class="Join-Btn" data-bs-toggle="modal" data-bs-target="#Join-us">
               اتصل ب
            </div>  --}}

            <a class="Join-Btn"  href="{{ myRoute('contact') }}" >
               اتصل بنا
            </a>
        </div>
    </div>
</section>
<section class="Counters-section">
    <div class="containerr">
        <div class="Counter-Title">
            <h2>
                لماذ تختار شية ؟
            </h2>
            <p class="px-3">أسرع في التنفيذ 🚀</p>
<p class="px-3">أسهل بالتعامل 🫡</p>
<p class="px-3">أوفر بالسعر 💰</p>
            <p>نحن نلك الكثير من المميزات ودعم المحتوي العربي حيث انجازتنا تتحدث عنا</p>
        </div>
        <div class="Counter-Cards row">
            <div class=" col-md-6 col-xl-3 col-sm-12 mb-5">
                <div class=" Counter-Card couneter-content d-flex align-items-center justify-content-between">
                    <div class="Card-Text">
                        <div class="Counting">
                            <div>
                                <h2>3000+</h2>
                                <h2>1000+</h2>
                                <h2>2000+</h2>
                                <h2>5000+</h2>
                                <h2>1,0000+</h2>
                            </div>
                        </div>
                        <span>ملف متنوع</span>
                    </div>
                    <div class="Counter-Icon">
                        <span>
                            <svg id="vuesax_bulk_folder" data-name="vuesax/bulk/folder"
                                xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                                <g id="folder">
                                    <path id="Vector"
                                        d="M36.667,2.988v10.23a9.819,9.819,0,0,1-9.808,9.808H9.808A9.819,9.819,0,0,1,0,13.218V0H36.19a9.2,9.2,0,0,1,.458,2.567A3.245,3.245,0,0,1,36.667,2.988Z"
                                        transform="translate(3.667 17.307)" fill="#007697" />
                                    <path id="Vector-2" data-name="Vector"
                                        d="M36.19,13.64H0V8.1A8.106,8.106,0,0,1,8.1,0h4.272C15.363,0,16.3.972,17.49,2.567l2.567,3.41c.568.752.642.862,1.705.862h5.115A9.757,9.757,0,0,1,36.19,13.64Z"
                                        transform="translate(3.667 3.667)" fill="#007697" opacity="0.4" />
                                    <path id="Vector-3" data-name="Vector" d="M0,0H44V44H0Z" fill="none"
                                        opacity="0" />
                                </g>
                            </svg>

                        </span>
                    </div>
                </div>

            </div>
            <div class="  col-md-6 col-xl-3 col-sm-12 mb-5"">
               <div class=" Counter-Card">
                <div class="Card-Text">
                    <div class="Counting">
                        <div>
                            <h2>200+</h2>
                            <h2>400+</h2>
                            <h2>500+</h2>
                            <h2>600+</h2>
                            <h2>700+</h2>
                        </div>
                    </div>
                    <span>ملف منوع</span>
                </div>
                <div class="Counter-Icon">
                    <span>
                        <svg id="vuesax_bulk_profile-2user" data-name="vuesax/bulk/profile-2user"
                            xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                            <g id="profile-2user">
                                <path id="Vector"
                                    d="M8.708,0a8.7,8.7,0,0,0-.22,17.4,1.479,1.479,0,0,1,.4,0H9.02A8.7,8.7,0,0,0,8.708,0Z"
                                    transform="translate(7.792 3.667)" fill="#007697" opacity="0.4" />
                                <path id="Vector-2" data-name="Vector"
                                    d="M22.22,2.557C17.1-.853,8.763-.853,3.612,2.557A7.237,7.237,0,0,0,0,8.479a7.176,7.176,0,0,0,3.593,5.885,16.939,16.939,0,0,0,9.313,2.585,16.939,16.939,0,0,0,9.313-2.585,7.233,7.233,0,0,0,3.593-5.922A7.219,7.219,0,0,0,22.22,2.557Z"
                                    transform="translate(3.593 23.384)" fill="#007697" />
                                <path id="Vector-3" data-name="Vector"
                                    d="M10.78,6.02a6.562,6.562,0,0,1-5.738,7.095H4.95a.858.858,0,0,0-.312.037A6.578,6.578,0,0,1,0,11.63,8.39,8.39,0,0,0,2.75,4.663a8.508,8.508,0,0,0-1.412-4A6.583,6.583,0,0,1,10.78,6.02Z"
                                    transform="translate(25.868 7.437)" fill="#007697" opacity="0.4" />
                                <path id="Vector-4" data-name="Vector"
                                    d="M14.667,7.5a5.584,5.584,0,0,1-3.19,4.363,12.94,12.94,0,0,1-6.435,1.43A6.544,6.544,0,0,0,7.278,9.039a7.223,7.223,0,0,0-3.062-6.2A15.134,15.134,0,0,0,0,.532C4.052-.641,9.148.147,12.283,2.677A5.57,5.57,0,0,1,14.667,7.5Z"
                                    transform="translate(25.648 22.916)" fill="#007697" />
                                <path id="Vector-5" data-name="Vector" d="M0,0H44V44H0Z" fill="none" opacity="0" />
                            </g>
                        </svg>


                    </span>
                </div>
            </div>

        </div>
        <div class="  col-md-6 col-xl-3 col-sm-12 mb-5"">
               <div class=" Counter-Card">
            <div class="Card-Text">
                <div class="Counting">
                    <div>
                        <h2>17,0000+</h2>
                        <h2>40,0000+</h2>
                        <h2>50,0000+</h2>
                        <h2>55,0000+</h2>
                        <h2>60,0000+</h2>
                    </div>
                </div>
                <span>ملف متو</span>
            </div>
            <div class="Counter-Icon">
                <span>
                    <svg id="import" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                        <g id="Group_651" data-name="Group 651" transform="translate(15.712 5.958)" opacity="0.4">
                            <path id="Vector"
                                d="M5.318,6.693a1.371,1.371,0,0,1-.972-.4L-.347,1.6A1.375,1.375,0,1,1,1.6-.347L5.318,3.374,9.039-.347A1.375,1.375,0,0,1,10.984,1.6L6.291,6.291A1.371,1.371,0,0,1,5.318,6.693Z"
                                transform="translate(0.75 14.829)" fill="#007697" />
                            <path id="Vector-2" data-name="Vector"
                                d="M.625,20.645A1.375,1.375,0,0,1-.75,19.27V.625A1.375,1.375,0,0,1,2,.625V19.27A1.375,1.375,0,0,1,.625,20.645Z"
                                transform="translate(5.444 0.75)" fill="#007697" />
                        </g>
                        <path id="Vector-3" data-name="Vector"
                            d="M15.292,16.667A15.754,15.754,0,0,1,3.524,11.944,16.278,16.278,0,0,1-.75.625,1.375,1.375,0,1,1,2,.625C2,8.451,7.466,13.917,15.292,13.917S28.583,8.451,28.583.625a1.375,1.375,0,0,1,2.75,0,16.278,16.278,0,0,1-4.274,11.319A15.754,15.754,0,0,1,15.292,16.667Z"
                            transform="translate(6.708 21.705)" fill="#007697" />
                        <path id="Vector-4" data-name="Vector" d="M0,0H44V44H0Z"
                            transform="translate(44 44) rotate(180)" fill="none" opacity="0" />
                    </svg>

                </span>
            </div>
        </div>

    </div>
    <div class=" col-md-6 col-xl-3 col-sm-12 mb-5">
        <div class="Counter-Card">
            <div class="Card-Text">

                <div class="Counting">
                    <div>
                        <h2>10+</h2>
                        <h2>15+</h2>
                        <h2>25+</h2>
                        <h2>30+</h2>
                        <h2>35+</h2>
                    </div>
                </div>
                <span>ملف نو</span>
            </div>
            <div class="Counter-Icon">
                <span>
                    <svg id="vuesax_bulk_global" data-name="vuesax/bulk/global" xmlns="http://www.w3.org/2000/svg"
                        width="44" height="44" viewBox="0 0 44 44">
                        <g id="global">
                            <path id="Vector"
                                d="M8.415,8.378c-.055,0-.128.037-.183.037A18.344,18.344,0,0,1,0,.183C0,.128.037.055.037,0A58.47,58.47,0,0,0,6.875,1.54,61.5,61.5,0,0,0,8.415,8.378Z"
                                transform="translate(5.61 29.957)" fill="#007697" opacity="0.4" />
                            <path id="Vector-2" data-name="Vector"
                                d="M8.525.2A18.5,18.5,0,0,1,0,8.58,56.032,56.032,0,0,0,1.668,1.54,57.348,57.348,0,0,0,8.488,0C8.47.073,8.525.147,8.525.2Z"
                                transform="translate(29.865 29.957)" fill="#007697" opacity="0.4" />
                            <path id="Vector-3" data-name="Vector"
                                d="M8.672,8.672A58.013,58.013,0,0,0,1.668,7,51.176,51.176,0,0,0,0,0,18.428,18.428,0,0,1,8.672,8.672Z"
                                transform="translate(29.865 5.463)" fill="#007697" opacity="0.4" />
                            <path id="Vector-4" data-name="Vector"
                                d="M8.562.055A57.288,57.288,0,0,0,7.04,6.875,52.928,52.928,0,0,0,0,8.525,18.5,18.5,0,0,1,8.378,0C8.433,0,8.507.055,8.562.055Z"
                                transform="translate(5.463 5.61)" fill="#007697" opacity="0.4" />
                            <path id="Vector-5" data-name="Vector"
                                d="M12.8,8.415a57.436,57.436,0,0,0-12.8,0A52.018,52.018,0,0,1,1.87.972a3,3,0,0,0,.037-.4A19.077,19.077,0,0,1,6.4,0a18.923,18.923,0,0,1,4.473.568,3.044,3.044,0,0,0,.055.4A52.638,52.638,0,0,1,12.8,8.415Z"
                                transform="translate(15.602 3.667)" fill="#007697" />
                            <path id="Vector-6" data-name="Vector"
                                d="M8.415,12.8a51.412,51.412,0,0,1-7.443-1.87,3,3,0,0,0-.4-.037A19.077,19.077,0,0,1,0,6.4,18.923,18.923,0,0,1,.568,1.925a3.044,3.044,0,0,0,.4-.055A54.579,54.579,0,0,1,8.415,0,59.719,59.719,0,0,0,8.415,12.8Z"
                                transform="translate(3.667 15.602)" fill="#007697" />
                            <path id="Vector-7" data-name="Vector"
                                d="M8.415,6.4a19.077,19.077,0,0,1-.568,4.492,3,3,0,0,0-.4.037A55.263,55.263,0,0,1,0,12.8,57.436,57.436,0,0,0,0,0,52.018,52.018,0,0,1,7.443,1.87a1.527,1.527,0,0,0,.4.055A19.046,19.046,0,0,1,8.415,6.4Z"
                                transform="translate(31.918 15.602)" fill="#007697" />
                            <path id="Vector-8" data-name="Vector"
                                d="M12.8,0a51.412,51.412,0,0,1-1.87,7.443,3.044,3.044,0,0,0-.055.4A18.923,18.923,0,0,1,6.4,8.415a19.077,19.077,0,0,1-4.492-.568,3,3,0,0,0-.037-.4A54.579,54.579,0,0,1,0,0,57.365,57.365,0,0,0,6.4.4,57.09,57.09,0,0,0,12.8,0Z"
                                transform="translate(15.602 31.918)" fill="#007697" />
                            <path id="Vector-9" data-name="Vector"
                                d="M14.233,14.233a55.072,55.072,0,0,1-13.8,0,55.072,55.072,0,0,1,0-13.8,55.072,55.072,0,0,1,13.8,0A55.072,55.072,0,0,1,14.233,14.233Z"
                                transform="translate(14.667 14.667)" fill="#007697" />
                            <path id="Vector-10" data-name="Vector" d="M0,0H44V44H0Z" fill="none" opacity="0" />
                        </g>
                    </svg>


                </span>
            </div>
        </div>

    </div>
    </div>
    </div>
</section>

@endsection


@push('js')



@endpush
