@extends('frontend.frontmaster')

@section('content')

<nav class="breadcrumb bread2" aria-label="breadcrumbs" style="margin-top: 85px">
 

  
  <h1>About Watertec</h1>
  <a href="{{ url('/') }}" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  <span>About Watertec</span>

  
</nav>
  <div class="dt-sc-hr-invisible-large"></div> 

 
    

      
    <main class="">  
      
        <div class="grid__item">           
          <div class="grid">
  <div class="grid__item">  
     <div id="shopify-section-grid-banner-type-6" class="shopify-section index-section"><div data-section-id="grid-banner-type-6" data-section-type="grid-banner-type-6" class="grid-banner-type-6">  
  <div class="container">
    <div class="grid-uniform">        
            
      
        
      <div class="section-one wow fadeIn animated grid-banner-left">
        
        
            
             
            <span class="icon-bell icons"  style="color:#e81a46"></span>
              
             @foreach($sub as $all_sub)                 
            <h1 class="small-title">{{ $all_sub->sub_name }}</h1>  
            {!! $all_sub->description !!}      
            
         @endforeach
      </div>
      
      <style>
        
        
         
          
      
  
        .grid-banner-type-6 .ovrly09.overlay-grid-1531308458715::before  {background:#e81a46;}
  
  
  
   
  
        .grid-banner-type-6 .ovrly09.overlay-grid-1531308658351::before  {background:#7e57c2;}
  
  
  
   
  
        .grid-banner-type-6 .ovrly09.overlay-grid-1531308729525::before  {background:#e8c81a;}
  
  
        .grid-banner-type-6 .block-content h2 {color:#3e454c; }
        .grid-banner-type-6 .block-content h4 {color:; }
        .grid-banner-type-6 .block-content p { color:#3e454c; }
        .grid-banner-type-6 .section-one, .grid-banner-type-6 .section-two{background:rgba(0,0,0,0);}
        
      </style>

      <div class="dt-sc-hr-invisible-large"></div> 
    </div>
  </div>
</div>

</div>    
          
   
  </div>
</div>
              
        </div>          
        
      
       <div class="dt-sc-hr-invisible-large"></div>
    </main> 
@endsection