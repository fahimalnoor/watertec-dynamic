@extends('frontend.frontmaster')
@section('content')

<!-- BEGIN content_for_index -->
<div id="shopify-section-1534155948093" class="shopify-section index-section index-section--flush">
  <div class="wrapper">
    <div class="home-slideshow">
      <div class="variable-width" data-slick='{dots: true, slidesToScroll: 1,autoplay:true,fade: true,autoplaySpeed:5000}'>
        @foreach($slider as $all_slide)
        
        <div class="slick-list slider_style_2">                
          <img src="{{ asset($all_slide->image) }}"  class="slide-img medium-down--hide" alt="" />
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


<div id="shopify-section-1529924056715" class="shopify-section index-section">
<div data-section-id="1529924056715"  data-section-type="category-listing-type-1" class="category-listing-type-1" style=" position:relative; background-image:url('resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/banner-1_35a2f4bf-f483-452c-bc63-b35acf225beee873.jpg?v=1532430216');background-repeat:no-repeat;background-position:top center;">  
  <div class="category_listing_overlay" style="position:absolute;top:0;width:100%;height:100%;left:0;right:0;background:rgba(0, 0, 0, 0.7);"></div> 
  
  
  <div class="grid-uniform">

    <div class="container">           
      <ul class="category-listing_block">         
              
        
        
        <li class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half small-grid__item wow fadeInUp"  data-wow-delay="ms">
          <div class="category-listing_section" style="background:#ffffff;">                      
            <div class="category-listing_inner">    
                
              <div class="category_image">                      
              </div>
                 
              <div class="category_text"> 
                                      
                <h4 style="color:#ffffff;background:#1d3750">Watertec</h4>
                                  

                  
                <p style="color:#3e454c;">Watertec is your first choice for quality products of your water supply system.</p>
                   

                 
                <a href="front/about"  class="small-btn"  style="color:#3e454c">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                 

              </div>     
            </div>
          </div>       
        </li>  
        
        
        <li class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half small-grid__item wow fadeInUp"  data-wow-delay="ms">
          <div class="category-listing_section" style="background:#1d3750;">                      
            <div class="category-listing_inner">    
                
              <div class="category_image">                      
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}" alt="Toilet Mount" />                
              </div>
                 
              <div class="category_text"> 
                                      
                <h4 style="color:#ffffff;background:#e81a46">Kazumi</h4>
                                  

                  
                <p style="color:#ffffff;">Category-1 Tap</p>
                   

                 
                <a href="#"  class="small-btn"  style="color:#ffffff">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                 

              </div>     
            </div>
          </div>       
        </li>  
        
        
        <li class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half small-grid__item wow fadeInUp"  data-wow-delay="ms">
          <div class="category-listing_section" style="background:#fff;">                      
            <div class="category-listing_inner">    
                
              <div class="category_image">                      
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-10_270x2702bf4.jpg?v=1532338961')}}" alt="Bath Tub" />                
              </div>
                 
              <div class="category_text"> 
                                      
                <h4 style="color:#ffffff;background:#1d3750">Roma</h4>
                                  

                  
                <p style="color:#3e454c;">Category-2 Tap</p>
                   

                 
                <a href="#"  class="small-btn"  style="color:#3e454c">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                 

              </div>     
            </div>
          </div>       
        </li>  
        
        
        <li class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half small-grid__item wow fadeInUp"  data-wow-delay="ms">
          <div class="category-listing_section" style="background:#1d3750;">                      
            <div class="category-listing_inner">    
                
              <div class="category_image">                      
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-9_270x2702c55.jpg?v=1532338976')}}" alt="Vanities" />                
              </div>
                 
              <div class="category_text"> 
                                      
                <h4 style="color:#ffffff;background:#e81a46">Mixer</h4>
                                  

                  
                <p style="color:#ffffff;">Category-3 Tap</p>
                   

                 
                <a href="#"  class="small-btn"  style="color:#ffffff">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                 

              </div>     
            </div>
          </div>       
        </li>  
        
        
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
            <a href="collections.html">
            
            <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-13_27d06db9-016c-4037-aa0a-4ba1183bdffd_1920X15e5.jpg?v=1532428534')}}" alt="Welcome To our shop!" />
            <div class="overlay"></div>
                       
              </a>
            
          </div>
        </div>
        <div class="grid__item wide--one-half post-large--one-half large--one-whole medium--grid__item small-grid__item">    
          <div class="block-content wow fadeInRight animated">             
             
             <div class="border-title"> 
            <h2 style="color:#ffffff;background:#e81a46">Welcome!</h2> 
            </div>
               
                                    
            <h4 style="color:#1d3750;">THE GLOBAL LEADER OF POLYMER TAP FITTINGS.</h4>        
              

                                     
            <p style="color:#3e454c;">We deliver all kind of water supply fittings. Just check out which out you need.</p>        
             

            
            <a href="resources/views/frontend/pages/about_builtec.php"  class="btn-line">About Us<i class="fa fa-angle-right" aria-hidden="true"></i>
              <div class="overlay"></div>
            </a>
            

            
           
            

              
            
            <div class="icon">
                          
              <a href="#"> 
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/builtec.png?v=1532420634')}}" alt="" />            
              </a>
                      
            </div>
            
            <div class="icon">
                          
              <a href="#"> 
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
            
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/17.jpg?v=1532339067')}}" alt="Wall Mount Toilet" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Wall Mount Toilet</h3>
            
            
            <h6 style="color:#ffffff;">30% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/19.jpg?v=1532428270')}}" alt="Glossy White Vanity" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Glossy White Vanity</h3>
            
            
            <h6 style="color:#ffffff;">50% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/21.jpg?v=1532339094')}}" alt="Hot Bath Tub" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Hot Bath Tub</h3>
            
            
            <h6 style="color:#ffffff;">20% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/Cover.jpg?v=1532428290')}}" alt="Rain Shower" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Rain Shower</h3>
            
            
            <h6 style="color:#ffffff;">40% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/28.jpg?v=1532428317')}}" alt="Adjustable Tub" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Adjustable Tub</h3>
            
            
            <h6 style="color:#ffffff;">60% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      
    </div>   
  </div>
</div>







<div id="shopify-section-1526634546444" class="shopify-section index-section"><div data-section-id="1526634546444"  data-section-type="client section" class="client-section">
     <div class="container">
      
  <div class="grid-uniform section-seven">
 
      <div class="grid__item">
        
        
        
        
        <div id="client-car" class="owl-carousel owl-theme client-section wow fadeInUp animated" style="border-top:1px solid #000;">
          
          
          <div class="item">
            <a href="#"> <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-1_250x2505d40.png?v=1532405874" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-2_250x250e672.png?v=1532405882" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-3_250x250c2ff.png?v=1532405891" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-4_250x250e553.png?v=1532405899" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-5_250x25029d0.png?v=1532405912" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-6_250x2508f7a.png?v=1532405923" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-7_250x2507633.png?v=1532405931" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-8_250x250df5b.png?v=1532405936" alt="" /></a>
          </div>
                     
          
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
                
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="resources/views/frontend/product/basin_tap.php">
                    
                    <div class="icon">
                      <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/products/new/BASIN-TAP.jpg?v=1532339163" alt="Bath Tub"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Basin Tap</span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="resources/views/frontend/product/bip_tap.php">
                    
                    <div class="icon">
                      <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/products/new/BIB-TAP.jpg?v=1532339172" alt="Paper Holder"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Bib Tap</span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="resources/views/frontend/product/sink_tap.php">
                    
                    <div class="icon">
                      <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/products/new/WALL-SINK-TAP.jpg?v=1532339186" alt="Rain Shower"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Wall Sink Tap</span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="resources/views/frontend/product/mixer.php">
                    
                    <div class="icon">
                      <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/products/new/MIXER.jpg?v=1532339197" alt="Vanities"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Mixer </span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="resources/views/frontend/product/shower_arm.php">
                    
                    <div class="icon">
                      <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/products/new/SHOWER-HEAD&ARM.jpg?v=1532339211" alt="Double Tap"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Shower Head Arm</span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="resources/views/frontend/product/bidet.php">
                    
                    <div class="icon">
                      <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/products/new/BIDET-index.jpg?v=1532339223" alt="Personal Shower"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Bidet</span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="resources/views/frontend/product/hand_bidet.php">
                    
                    <div class="icon">
                      <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/products/new/HAND-BIDET.jpg?v=1532339244" alt="Adjustable Tap"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Hand Bidet</span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="resources/views/frontend/product/sink_tap.php">
                    
                    <div class="icon">
                      <img src="resources/views/frontend/cdn/s/files/1/0045/0523/9670/products/new/PILLAR-SINK-TAP.jpg?v=1532339259" alt="Bidet Faucets"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Sink Tap</span>
                    
                  </a>
                </div>
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




</div><div id="shopify-section-1530083821640" class="shopify-section index-section"><div data-section-id="1530083821640" data-section-type="grid-banner-type-15" class="grid-banner-type-15">   
 <div class="container">    
   <div class="dt-sc-hr-invisible-large"></div>
  <div class="grid-uniform">       
    <div class="grid__item wide--one-quarter post-large--one-half large--one-half medium--one-half small--grid__item img-hover-effect-3 img-hover-effect wow fadeInUp animated">
      <a class="banner_half_img" href="{{ url('/front/collection') }}">
      
      <img src="{{asset('resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/img-22_8f86d3d1-cdf6-401a-8fae-356058847be3_1920Xb42f.jpg?v=1532418698')}}" alt="Oval Bath Tub" />
                 
        </a>
      
      <div class="featured-content featured-content-one">  

        
        <h2 style="color:#000000">GREAT COLLECTIONS</h2>
        
        
        <h3 style="color:#000">Special Solution</h3>
        
        
        <p style="color:#000">Fashion Undefined</p>    
                 
      </div>   
    </div> 
    <div class="grid__item wide--one-quarter post-large--one-half large--one-half medium--one-half small--grid__item img-hover-effect img-hover-effect-4 wow fadeInUp animated">
      
      
      <img src="{{asset('resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/img-21_1920Xe297.jpg?v=1532418431')}}" alt="Clean and Clear Bidets" />
                 
      
      
      <span class="grid__sale" style="color:#000000;background:#ffffff;">White</span>
      
      <div class="featured-content product-style-with-timer">     



        <div class="deal-clock  lof-clock-timer-detail-block time-one"></div>
         

        <script>
          //<![CDATA[
          jQuery(document).ready(function($){
            $(".time-one").lofCountDown({      
              TargetDate:"02/10/2019 12:30:30",
              DisplayFormat:"<ul class='list-inline'><li class='day'>%%D%%<span>D</span></li><li class='hours'>%%H%%<span>H</span></li><li class='mins'>%%M%%<span>M</span></li><li class='seconds'>%%S%%<span>S</span></li></ul>",
              FinishMessage: "Expired"
            });
          });
          //]]>
        </script>
        <div class="product-detail">
          
          <a class="grid-link__title" href="#" style="color:#000">Clean and Clear Bidets</a>
          
        
        </div>
      </div>
    </div>     
    <div class="grid__item wide--one-quarter post-large--one-half large--one-half medium--one-half small--grid__item img-hover-effect-3 img-hover-effect wow fadeInUp animated">
      <a class="banner_half_img" href="{{ url('/front/collection') }}">
      
      <img src="{{asset('resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/img-20_1920X5a1e.jpg?v=1532418444')}}" alt="UPTO" />
                 
        </a>
      
       
    </div> 
    <div class="grid__item wide--one-quarter post-large--one-half large--one-half medium--one-half small--grid__item img-hover-effect img-hover-effect-4 wow fadeInUp animated">
      <a class="banner_half_img" href="{{ url('/front/collection') }}">
      
      <img src="{{asset('resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/img-19_1920X25d8.jpg?v=1532418460')}}" alt="" />
                 
        </a>

      
            <div class="featured-content product-style-with-timer">     



      <div class="deal-clock  lof-clock-timer-detail-block time-two"></div>
       

      <script>
        //<![CDATA[
        jQuery(document).ready(function($){
          $(".time-two").lofCountDown({      
            TargetDate:"",
            DisplayFormat:"<ul class='list-inline'><li class='day'>%%D%%<span>D</span></li><li class='hours'>%%H%%<span>H</span></li><li class='mins'>%%M%%<span>M</span></li><li class='seconds'>%%S%%<span>S</span></li></ul>",
            FinishMessage: "Expired"
          });
        });
        //]]>
      </script>

      </div>
    </div>     
  </div> 
   <div class="dt-sc-hr-invisible-large"></div>
  </div>  
</div>
<style>
  .grid-banner-type-15 .featured-content .btn.four:hover { background: !important;color: !important;}
  .grid-banner-type-15 .featured-content .btn.three:hover { background:#1d3750 !important; color:#fff !important;}
  .grid-banner-type-15 .featured-content .btn.one:hover { background: !important;color: !important; }
  .grid-banner-type-15 .featured-content .btn.two:hover { background: !important;color: !important; }
  .grid-banner-type-15 .featured-content .offer_text { color:#000; }
  .grid-banner-type-15 .featured-content p span:before,.grid-banner-type-15 .featured-content p span:after { background:#000; }

</style>


</div>

<div id="shopify-section-1526542123663" class="shopify-section index-section"><div data-section-id="1526542123663" data-section-type="wide-banner-type-4" class="wide-banner-type-4">  
  <div class="grid-uniform">  

    <div class="wide-banner-type-4-block parallax" style="  background-image:url('resources/views/frontend/cdn/s/files/1/0045/0523/9670/files/banner-2_554acc84-fae7-4938-a2ce-e86365277dba_1920X3406.jpg?v=1532342910');background-repeat:no-repeat;background-size:cover ">
      <div class="wide-banner-type-4-content wow fadeInUp animated">    

        
        <h4 class="small-icon " style="color:#3e454c;background:#ffffff">LATEST ACTIVITY</h4>
         


        
        <h2 style="color:#ffffff;">MEDIA</h2>
         

        
        <iframe width="555" height="315" src="https://www.youtube.com/embed/7uqVctI21x0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        

        
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
              
        
        
        <li class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp"  data-wow-delay="ms">

          <div class="support_section">                      
              
            <div class="support_icon">                      
              <a  class="" style="color:">
                
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/icon-1_0617992a-a889-4b38-9316-83fd79c4f651_1920Xac70.png?v=1532431313" alt="" />
                 
              </a>
                
            </div>
              
            <div class="support_text"> 
                
              <h5 style="color:#ffffff;">CALL TODAY</h5>
               
                
              <p style="color:#ffffff;" class="desc">+ 88 017 6666 5100</p>
               
            </div>      
          </div>    
        </li>  
        
        
        <li class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp"  data-wow-delay="ms">

          <div class="support_section">                      
              
            <div class="support_icon">                      
              <a  class="" style="color:">
                
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/icon-2_9c205de7-333f-4b43-bdd0-38c1204ebf4e_1920X8f9c.png?v=1532431304" alt="" />
                 
              </a>
                
            </div>
              
            <div class="support_text"> 
                
              <h5 style="color:#ffffff;">CALL SALES </h5>
               
                
              <p style="color:#ffffff;" class="desc">+ 88 017 6666 5101-05</p>
               
            </div>      
          </div>    
        </li>  
        
        
        <li class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp"  data-wow-delay="ms">

          <div class="support_section">                      
              
            <div class="support_icon">                      
              <a  class="" style="color:">
                
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/icon-3_c9ab47d1-e5df-487f-b7a6-13b2f51573af_1920X7034.png?v=1532431294" alt="" />
                 
              </a>
                
            </div>
              
            <div class="support_text"> 
                
              <h5 style="color:#ffffff;">EMAIL</h5>
               
                
              <p style="color:#ffffff;" class="desc">watertecbd@gmail.com</p>
               
            </div>      
          </div>    
        </li>  
        
        
      </ul>
    </div>
  </div>

</div>

</div><!-- END content_for_index -->

@endsection