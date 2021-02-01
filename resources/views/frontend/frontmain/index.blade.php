@extends('frontend.frontmaster')
@section('content')

<!-- BEGIN content_for_index -->
<div id="shopify-section-1534155948093" class="shopify-section index-section index-section--flush">
  <div class="wrapper">
    <div class="home-slideshow">
      <div class="variable-width" data-slick='{dots: true, slidesToScroll: 1,autoplay:true,fade: true,autoplaySpeed:5000}'>
        @foreach($slider as $all_slide)
        @if($all_slide->description == "<p>first slide</p>"){
        
        
          <div class="slick-list slider_style_2">                
        


        <img src="{{ $all_slide->image }}"  class="slide-img medium-down--hide" alt="" />
        
        
        
        <img src="{{ $all_slide->image }}"  class="slide-img wide--hide post-large--hide large--hide" alt="" />
        
        
        
        
        <div class="slider-content slider-content-bg medium-down--hide" style="top: 48%;">
          <div class="slide_left" style="">
        
            
            <h5 class="slide-text animated "
                style="display:inline-block;
                       
                       font-size: 20px;
                       
                       
                       color:#ffffff;
                        
                       
                       background:#e81a46;
                        ">
              IT'S HOW YOU LIVE
            </h5>
            
        
            
            <h2 class="slide-heading animated "
                style=" 
                       font-size: 45px;
                       
                       
                       color:#000;
                       ">
              LOTS OF LUXURY                   
            </h2>
            
            
            <h4 class=" slide-sub-heading-2 animated "
                style="
                       font-size: 45px;
                       
                       
                       color:#000;
                       ">
              IN A LITTLE SPACE                   
            </h4>
            
         
          
             </div>
        </div>
        
        
                <style> 
                  .slider_style_2 .slide-offer-text span {color:#000!important;}
                   .slider_style_2 .btn:hover {color:#ffffff!important;background:#e81a46!important;}
                  @media screen and (min-width: 320px) and (max-width: 767px) {
        
                    .slider_style_2 .slider-content {background:rgba(255, 255, 255, 0.7);}
                  }
                </style>
              </div>
        
        }
        @elseif($all_slide->description == "<p>second slide</p>"){

          <div class="slick-list slider_style_1"> 
        


<img src="{{ $all_slide->image }}"  class="slide-img medium-down--hide" alt="" />



<img src="{{ $all_slide->image }}"  class="slide-img wide--hide post-large--hide large--hide" alt="" />





<div class="slider-content slider-content-bg medium-down--hide" style="top: 48%;">
  <div class="slide_left" style="">

    
    <h5 class="slide-text animated "
        style="display:inline-block;
               
               font-size: 20px;
               
               
               color:#ffffff;
                `
               
               background:#e81a46;
                ">
      IT'S HOW YOU LIVE
    </h5>
    

    
    <h2 class="slide-heading animated "
        style=" 
               font-size: 45px;
               
               
               color:#000;
               ">
      TAKE A FRESH LOOK                   
    </h2>
    
    
    <h4 class=" slide-sub-heading-2 animated "
        style="
               font-size: 45px;
               
               
               color:#000;
               ">
      AT WATERTEC                   
    </h4>
    
  
     </div>
</div>

        <style> 
          .slider_style_1 .slide-offer-text span {color:#000!important;}
           .slider_style_1 .btn:hover {color:#ffffff!important;background:#e81a46!important;}

          @media screen and (min-width: 320px) and (max-width: 767px) {

            .slider_style_1 .slider-content {background:rgba(255, 255, 255, 0.7);}
          }
        </style>
      </div>
        }

        @elseif($all_slide->description == "<p>third slide</p>"){

          <div class="slick-list slider_style_1">    
<img src="{{ $all_slide->image }}"  class="slide-img medium-down--hide" alt="" />

<img src="{{ $all_slide->image }}"  class="slide-img wide--hide post-large--hide large--hide" alt="" />
<div class="slider-content slider-content-bg medium-down--hide" style="top: 48%;">
  <div class="slide_left" style="">

    <h5 class="slide-text animated "
        style="display:inline-block;
               
               font-size: 20px;
               
               
               color:#ffffff;
                
               
               background:#e81a46;
                ">
      Committed To Customer
    </h5>
    
    <h2 class="slide-heading animated "
        style=" 
               font-size: 45px;
               
               
               color:#000;
               ">
      High Perceived Value By                   
    </h2>
    
    <h4 class=" slide-sub-heading-2 animated "
        style="
               font-size: 45px;
               
               
               color:#000;
               ">
      Replacing Costly Material                   
    </h4>
     </div>
</div>
        <style> 

          .slider_style_3 .slide-offer-text span {color:#ffffff!important;}
           .slider_style_3 .btn:hover {color:#ffffff!important;background:#000000!important;}
          
            
          .slider_style_3 .slider-content {background:rgba(232, 26, 70, 0.7);}
           
          
          
           @media screen and (min-width: 320px) and (max-width: 767px) {
          
           }
          
        </style>
      </div>

        }


        @endif

        @endforeach


      </div>
    </div>
  </div>
  <script>  
  $(document).on('ready', function() {
    $('.variable-width').slick({
      dots: true,
      slidesToScroll: 1,
      autoplay:true,
      fade: true,
      autoplaySpeed:5000,
      afterChange: function(slick, currentSlide){
      console.log(currentSlide);
    }
                               });   
  })
</script>


<style>

.variable-width img {height: 600px;width: 100%;}
  @media screen and (min-width: 320px) and (max-width: 767px) {}

</style>

<style>
  .home-slideshow  .slick-arrow:before{ color: #000000; }  
</style>


</div>


<div id="shopify-section-1529924056715" class="shopify-section index-section">
<div data-section-id="1529924056715"  data-section-type="category-listing-type-1" class="category-listing-type-1" style=" position:relative; background-image:url('resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/banner-1_35a2f4bf-f483-452c-bc63-b35acf225beee873.jpg?v=1532430216');background-repeat:no-repeat;background-position:top center;">  
  <div class="category_listing_overlay" style="position:absolute;top:0;width:100%;height:100%;left:0;right:0;background:rgba(0, 0, 0, 0.7);"></div> 
  
  
  <div class="grid-uniform">

    <div class="container">           
      <ul class="category-listing_block">         
              
      
        
        @foreach($content2 as $all_content2)
        <li class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half small-grid__item wow fadeInUp"  data-wow-delay="ms">
          <div class="category-listing_section" style="background:#1d3750;">                      
            <div class="category-listing_inner">    
                
              <div class="category_image">                      
                <img src="{{asset($all_content2->image)}}" alt="Sample Product" />                
              </div>
              <div class="category_text" style="color:#ffffff;"> 
                                      <br>
                {!! $all_content2->description !!}
                  
              </div>
                 <a href="{{ url('/front/about') }}"  class="small-btn"  style="color:#ffffff">Read More
                 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                  
            </div>
          </div>       
        </li>  
        @endforeach
         
      </ul>

      <div class="grid__item">


        <div class="border-title wow flash">          
          
          <h3 style="color:#ffffff">Renowned Specialists in Polymer Tap Fittings!</h3>
          
        </div>
      </div>

      



    </div>
  </div>  
</div>
<style>
  .category-listing-type-1 .category_image img { background:#000000;}
  .category-listing-type-1 ul {margin-top:-10%;}
  .category-listing-type-1 .small-btn:hover {color:#e81a46!important}
  
  .category-listing-type-1 .category_image {background:#e81a46;}
  .category-listing_section:hover .category_image::before {box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.25); }
  
</style>


</div><div id="shopify-section-1526630587896" class="shopify-section index-section"><div data-section-id="1526630587896" data-section-type="grid-banner-type-32" class="grid-banner-type-32" style="float:left;width:100%;background:#ffffff;">  
  <div class="wrapper">  

    <div class="grid-uniform">        
        
      <div class="section-one ">
        <div class="grid__item wide--one-half post-large--one-half large--one-whole medium--grid__item small-grid__item wow fadeInLeft animated"> 
          <div class="ovrly09">

            @foreach($content3 as $all_content3)
            <a href="{{ route('front.collection') }}">
            
            <img src="{{ asset($all_content3->image) }}" alt="Welcome To our shop!" />
            <div class="overlay"></div>
                       
              </a>
              @endforeach
            
          </div>
        </div>
        <div class="grid__item wide--one-half post-large--one-half large--one-whole medium--grid__item small-grid__item">    
          <div class="block-content wow fadeInRight animated">             
             
             {!! $all_content3->description !!}

            
            <a href="{{ route('front.about') }}"  class="btn-line">About Us<i class="fa fa-angle-right" aria-hidden="true"></i>
              <div class="overlay"></div>
            </a>
            
            <div class="icon">
                          
              <a href="{{ route('front.about_builtec') }}"> 
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/builtec.png?v=1532420634')}}" alt="" />            
              </a>
                      
            </div>
            
            <div class="icon">
                          
              <a href="{{ route('front.testimonial') }}"> 
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/certified_icon.png?v=1532420745')}}" alt="" />            
              </a>
                      
            </div>
            
          </div>  
        </div>
      </div>
      
      


      <style>
        
        .grid-banner-type-32  
        
        
        .grid-banner-type-32 .section-one {  background: ; }
        .grid-banner-type-32 .block-content h6 { }        
        .grid-banner-type-32 .block-content h4 { }  
        .grid-banner-type-32 .block-content p {  }
         .grid-banner-type-32 .overlay { background:rgba(247, 247, 247, 0.7); } 
        
        .grid-banner-type-32 .btn-line::after {background:#3e454c;}
        .grid-banner-type-32 .btn-line {color:#3e454c;}
        .grid-banner-type-32 .btn-line:hover {color:#e81a46;}
      </style>
    </div>

  </div>
</div>

</div>
<div id="shopify-section-1531225331207" class="shopify-section index-section"><div data-section-id="1531225331207" data-section-type="grid-banner-type-22" class="grid-banner-type-22" style="background:#f7fafb;">  
  <div class="dt-sc-hr-invisible-large"></div>  
  <div class="wrapper">


    
    <div class="grid__item{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}">
      <div class="instagram-detail">
        <div class="border-title wow fadeInDown animated">
          <div class="container">
            <i class="fa fa-picture-o" aria-hidden="true"></i>
            <h2 style="color:#ffffff;background:#e81a46;" class="text-center">Gallery Section</h2>   
            
            <div> <p  style="color:;" class="small-desc">Check out our gallery section for latest collection.</p></div> 
              
          </div>
        </div>
      </div>
    </div>
      




    <div class="grid-uniform featuredItems wow fadeInUp animated "> 
            @foreach($content4 as $all_content4)
      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset($all_content4->image)}}" alt="Wall Mount Toilet" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
          <div class="featured-content">   
            
          {!! $all_content4->description !!}
            
            <a class="btn_line one" href="{{ route('front.products') }}"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
        @endforeach
      </li>        
   
</div>


<div id="shopify-section-1526634546444" class="shopify-section index-section"><div data-section-id="1526634546444"  data-section-type="client section" class="client-section">
     <div class="container">
      
  <div class="grid-uniform section-seven">
 
      <div class="grid__item">
        
        <div id="client-car" class="owl-carousel owl-theme client-section wow fadeInUp animated" style="border-top:1px solid #000;">
          
          @foreach($content5 as $all_content5)
          <div class="item">
            <img src="{{ $all_content5->image }}" alt="" />
          </div>
          @endforeach      
          
        </div>
        <div class="nav_brand_type"> </div>
      </div>
   
  </div>

   
  </div>
</div>


</div>



<div id="shopify-section-1530009956771" class="shopify-section index-section">
<div data-section-id="1530009956771" data-section-type="full-banner-blocks" class="full-banner-blocks block5">      
  <div class="parallax section section-1530009956771-block " id="section1530009956771" style=" background-image:url('resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/bg-overlay-img_1920X9536.jpg?v=1531204271');background-repeat:no-repeat;background-size:cover ">  
    <div class="container">      
      <div class="grid__item"  >
        <div class="full-banner-block"> 
          <div class="full-banner-content content-center "> 

          
            <div class="grid__item ">
            @foreach($content6 as $all_content6)
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
              
                <div class="icon-section wow fadeInUp animated">
                  <a href="{{ $all_content6->link }}">
                    
                    <div class="icon">
                      <img src="{{ asset($all_content6->image) }}"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    <span style="color:#fff">{!! $all_content6->description !!}</span>
                    
                  </a>
                </div>
                
              </div>   
              @endforeach           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<style>


  .block5 .icon-section .icon::before {background:#e81a46;}



  
  .full-banner-blocks.block5 .parallax::before {background:#1d3750;}
   


</style>
</div>



<div id="shopify-section-1530083821640" class="shopify-section index-section"><div data-section-id="1530083821640" data-section-type="grid-banner-type-15" class="grid-banner-type-15">   
 <div class="container">    
 <style>
* {
  box-sizing: relative;
}

.container {
  position: relative;
}

/* Bottom right text */
.text-block {
  position: relative;
  background-color: transparent;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
  
<div class="container">
 <div class="row">
 @foreach($content7 as $all_content7)

  <div class="column">
    <img src="{{ $all_content7->image }}" style="width:100%">
    <div class="text-block">
    {!! $all_content7->description !!}
    </div>
  </div>
  
  @endforeach
</div>

</div>
</div>
</div>
</div>

<div id="shopify-section-1526542123663" class="shopify-section index-section"><div data-section-id="1526542123663" data-section-type="wide-banner-type-4" class="wide-banner-type-4">  
  <div class="grid-uniform">  

    <div class="wide-banner-type-4-block parallax" style="  background-image:url('resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/banner-2_554acc84-fae7-4938-a2ce-e86365277dba_1920X3406.jpg?v=1532342910');background-repeat:no-repeat;background-size:cover ">
      <div class="wide-banner-type-4-content wow fadeInUp animated">    

        
        <h4 class="small-icon " style="color:#3e454c;background:#ffffff">LATEST ACTIVITY</h4>
         


        
        <h2 style="color:#ffffff;">MEDIA</h2>
         

        @foreach($content8 as $all_content8)
        <iframe width="555" height="315" src="{{ $all_content8->description }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endforeach

        
        <a  href="front/collection" style="color:#fff;background:#e81a46" class="btn">View More</a>    
                 
      </div> 


  </div>
</div>  
<style>
        



  #shopify-section-1526542123663 .wide-banner-type-4-content a.btn:hover{background:#ffffff!important;color:#3e454c !important;}
</style>

</div>

</div><div id="shopify-section-1530084495671" class="shopify-section index-section"><div data-section-id="1530084495671"  data-section-type="support-block-type-1" class="support-block-type-1" style="background:#1d3750;float:left;width:100%;">     
  <div class="grid-uniform">
    <div class="container">
      <ul class="support_block" >         
              
        
        @foreach($content9 as $all_content9)
        <li class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp"  data-wow-delay="ms">

          <div class="support_section">                      
              
            <div class="support_icon">                      
              <a  class="" style="color:">
                
                <img src="{{asset($all_content9->image)}}" alt="" />
                 
              </a>
                
            </div>
             {!! $all_content9->description !!}     
          </div>    
        </li>
        @endforeach
        
      </ul>
    </div>
  </div>

</div>

</div>

@endsection