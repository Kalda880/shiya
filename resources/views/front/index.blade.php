@extends('layouts.site')
@push('css')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush
@section('content')

<section class="home">
    <div class="home-container">
<div class="home-image">
            <div class="image-container" style="mix-blend-mode: multiply;
opacity: 1; ">               
                <!--  <div class="image-color">
                   <img src="{{ asset('images/colors.jpg')}}" alt="">
                </div>-->
            </div>
        </div>
        <div class="home-content">
            <div class="home-text" >
                <h1 style="text-align: right;
font: normal normal normal 47px GE Flow;
letter-spacing: 0px;
color: #124956;
opacity: 1; margin-right:50px;">أبدأ فـي إنشـاء</h1>
                <h2 style="text-align: right;
font: normal normal normal 46px GE Flow;
letter-spacing: 0px;
color: #0283A8;
opacity: 1;margin-right:50px;">تصمماتك الخاصة بشكل متميز</h2>
                <p style="text-align: right;
font: normal normal normal 30px GE Flow;
letter-spacing: 0px;
color: #0283A8;
opacity: 1; margin-right:50px;">تصفح واكتشف لعي من المصادر المتنوعة والمميز لدينا يث يمكنك ستخدمها بشكل مجني مع مكان
                    إعادة التميم حسب رغبت وتحميلها</p>
					 <div class="home-button" ><button type="button" class="home-btn">ابدأ الآن</button></div>
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
        <div class="home-separator" ></div>
    </div>
<section class="home-cust">
<div class="section-invitation" >
	<div class="invitaion-text" >
		<h1>
			دعوات زواج
		</h1>
		<p>
			نقدم لك مجموعة متنوعة من تصاميم الدعوات الزفافية الجاهزة والتي يمكنك تعديلها وفقًا لأذواقك ومتطلباتك. ستجد لدينا تصاميم مذهلة وفريدة تناسب جميع الأذواق.
		</p>
	<div class="invitation-button" ><button type="button" class="invitation-btn">صمم الآن</button></div>
</div>
<div class="invitaion-img" > 
	<img src="./assets/images/invit-env.png" alt="">                
</div>

</div>
</section>
<section class="home-cust">
<div class="section-congrats" >
	
	<div class="congrats-img" > 
	<img src="./assets/images/Acongrat-100.jpg" alt="">                
	</div>
	<div class="congrats-text" >
		<h1>
			تهنئة مولود
		</h1>
		<p>
تصاميم تهنئة مولود جاهزة: نقدم لك في هذا القسم مجموعة متنوعة من تصاميم تهنئة المولود الجاهزة		</p>
	<div class="congrats-button" ><button type="button" class="congrats-btn">صمم الآن</button></div>
</div>


</div>
</section>

<section class="home-cust">
<div class="section-invitation" >
	<div class="invitaion-text" >
		<h1>
			تهنئة بالتخرج
		</h1>
		<p>
			في هذا القسم، ستجد مجموعة واسعة من تصاميم التهنئة بالتخرج جاهزة للاستخدام. تتنوع التصاميم بين الألوان والأشكال والأساليب لتناسب مختلف الأذواق والأهداف		</p>
	<div class="invitation-button" ><button type="button" class="invitation-btn">صمم الآن</button></div>
</div>
<div class="invitaion-img" > 
	<img src="./assets/images/gradua.png" alt="">                
</div>

</div>
</section>
<section class="home-cust">
<div class="why-title" > 
			<h1>
			لماذ تختار شية ؟	
			</h1>	
</div>
<div class="section-why" >
	
<div class="why-img" > 
	<img src="./assets/images/plane.png" alt="">  
		<h3>
			في التنفيذ		
			</h3>	
</div>
<div class="why-img" > 
	<img src="./assets/images/hand.png" alt="">     
<h3>
		أسهل بالتعامل		
		</h3>		
</div>
<div class="why-img" > 

	<img src="./assets/images/wallet.png" alt="">                
<h3>
			أوفر بالسعر		
			</h3>	
	</div>

</div>
</section>
</section>



<!----
<section style="width: 100vw;overflow: hidden;">
    @foreach ($categories as $category)
    <div class="home category">
        <div class="home-container" {{$loop->index % 2 ==0?'':'style=flex-direction:row-reverse'}}>
            <div class="home-content px-5" data-aos="{{$loop->index % 2 ==0?'fade-left':'fade-right'}}">
        <div class="home-text">
            
            <h1><a href="{{ myRoute('template') }}?category_id={{ $category->id }}">
                {{ $category->title }}
            </a>
            </h1>
            <p>{{ $category->description }}</p>
        </div>
        
    </div>
    <div class="home-image" data-aos="zoom-in">
        <div class="image-container" style="background-image: url({{categoryImage($category) }})">
           
        </div>
    </div>
</div>
</div>
    @endforeach
</section>------>
<!-------Gallary-------------------------->





@endsection


@push('js')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
  </script>
@endpush
