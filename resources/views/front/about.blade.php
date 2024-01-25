@extends('layouts.site')

@section('content')
 
    @push('js')
        
    <link rel="stylesheet" href="{{ asset('front/pages/who.css')}}">

    @endpush
 
    <div class="page-container">
        <div class="title">من نحن</div>
        <div class="container">
            <div class="banner">
                
                <div class="content">
                    <h2 style=" margin-bottom: 20px; font: normal normal normal 30px/48px GE Flow;
letter-spacing: 0px;
color: #0083A8;
opacity: 1;">شية - SHYA</h2>
                    <p>
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام " هنا يوجد محتوى نصي
                    </p>
                    <p style="margin-top: 20px;"> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي</p>
                </div>  <div class="img-who">  <img src="{{ asset('images/who.png') }}" alt=""> </div> <div class="deco"> </div>
            </div>
            </section>
<section class="home-cust">

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
<!------- 
            <div class="cards">
                <div class="card">
                    <div>
                        <span><svg id="vuesax_bulk_diamonds" data-name="vuesax/bulk/diamonds" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                            <g id="diamonds">
                              <path id="Vector" d="M0,0H48V48H0Z" fill="none" opacity="0"/>
                              <path class="Vector-2" data-name="Vector" d="M38.421,10.48l-13.7,15.08a6.266,6.266,0,0,1-9.44,0L1.581,10.48A6.966,6.966,0,0,1,.461,3.6L2.061,0h35.88l1.6,3.6A6.966,6.966,0,0,1,38.421,10.48Z" transform="translate(3.999 16)" fill="#0083a8"/>
                              <path class="Vector-3" data-name="Vector" d="M35.88,11.7H0L3.52,3.78A5.741,5.741,0,0,1,9.34,0h17.2a5.741,5.741,0,0,1,5.82,3.78Z" transform="translate(6.06 4.3)" fill="#0083a8" opacity="0.4"/>
                            </g>
                          </svg>
                          </span>
                    </div>
                    <h2>جودة مميزة</h2>
                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها</p>
                </div>
                <div class="card">
                    <div>
                        <span><svg id="vuesax_bulk_diamonds" data-name="vuesax/bulk/diamonds" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                            <g id="diamonds">
                              <path id="Vector" d="M0,0H48V48H0Z" fill="none" opacity="0"/>
                              <path class="Vector-2" data-name="Vector" d="M38.421,10.48l-13.7,15.08a6.266,6.266,0,0,1-9.44,0L1.581,10.48A6.966,6.966,0,0,1,.461,3.6L2.061,0h35.88l1.6,3.6A6.966,6.966,0,0,1,38.421,10.48Z" transform="translate(3.999 16)" fill=""/>
                              <path class="Vector-3" data-name="Vector" d="M35.88,11.7H0L3.52,3.78A5.741,5.741,0,0,1,9.34,0h17.2a5.741,5.741,0,0,1,5.82,3.78Z" transform="translate(6.06 4.3)" fill="" opacity="0.4"/>
                            </g>
                          </svg>
                          </span>
                    </div>
                    <h2>جودة مميزة</h2>
                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها</p>
                </div>
                <div class="card">
                    <div>
                        <span><svg id="vuesax_bulk_diamonds" data-name="vuesax/bulk/diamonds" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                            <g id="diamonds">
                              <path id="Vector" d="M0,0H48V48H0Z" fill="none" opacity="0"/>
                              <path class="Vector-2" data-name="Vector" d="M38.421,10.48l-13.7,15.08a6.266,6.266,0,0,1-9.44,0L1.581,10.48A6.966,6.966,0,0,1,.461,3.6L2.061,0h35.88l1.6,3.6A6.966,6.966,0,0,1,38.421,10.48Z" transform="translate(3.999 16)" fill=""/>
                              <path class="Vector-3" data-name="Vector" d="M35.88,11.7H0L3.52,3.78A5.741,5.741,0,0,1,9.34,0h17.2a5.741,5.741,0,0,1,5.82,3.78Z" transform="translate(6.06 4.3)" fill="" opacity="0.4"/>
                            </g>
                          </svg>
                          </span>
                    </div>
                    <h2>جودة مميزة</h2>
                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها</p>
                </div>
                <div class="card">
                    <div>
                        <span><svg id="vuesax_bulk_diamonds" data-name="vuesax/bulk/diamonds" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                            <g id="diamonds">
                              <path id="Vector" d="M0,0H48V48H0Z" fill="none" opacity="0"/>
                              <path class="Vector-2" data-name="Vector" d="M38.421,10.48l-13.7,15.08a6.266,6.266,0,0,1-9.44,0L1.581,10.48A6.966,6.966,0,0,1,.461,3.6L2.061,0h35.88l1.6,3.6A6.966,6.966,0,0,1,38.421,10.48Z" transform="translate(3.999 16)" fill=""/>
                              <path class="Vector-3" data-name="Vector" d="M35.88,11.7H0L3.52,3.78A5.741,5.741,0,0,1,9.34,0h17.2a5.741,5.741,0,0,1,5.82,3.78Z" transform="translate(6.06 4.3)" fill="" opacity="0.4"/>
                            </g>
                          </svg>
                          </span>
                    </div>
                    <h2>جودة مميزة</h2>
                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها</p>
                </div>
            </div>-------------------------->
        </div>
    </div>

 
 
@endsection