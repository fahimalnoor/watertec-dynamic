@extends('frontend.frontmaster')

@section('content')
<nav class="breadcrumb bread1" aria-label="breadcrumbs">
 
  <h1>Mixer</h1>
  <a href="{{ url('/') }}" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  
  <span>Mixer</span>

  
</nav>
  <div class="dt-sc-hr-invisible-large"></div> 

    <main class="main-content ">  
      
      <div class="wrapper">
        
        <div class="grid__item">           
          

<div class="grid__item">
  <div class="collection-products position-change">
	    
    
    <div class="grid__item wide--fifth-fifths post-large--fifth-fifths large-tenth--tenths sidebar-hidden second">       
      <div class="collection-list">
        <div class="grid-uniform grid-link__container col-main">            
             
          
<header class="section-header section-header--large">
  <div class="toolbar">
    
    <div class="view-mode grid__item wide--one-third post-large--two-tenths large--two-tenths">
            
      <a class="grid btn active" href="#" title="Grid view"><span class="fa fa-th-large" aria-hidden="true"></span></a>  
      <a class="list btn" href="#" title="List view" ><span class="fa fa-th-list" aria-hidden="true"></span></a>  
    </div>    
    
    <div class="grid__item wide--five-tenths post-large--eight-tenths large--eight-tenths right">
      
    </div>

  </div>
</header>
          
          <div class="products-grid-view">
                
          <ul>
            

<li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item on-sale" id="product-1892471406710" >
  <div class="products product-hover-16">
    <div class="product-container">  
      
      <a href="{{ url('/mixer') }}" class="grid-link">           
        
        
        
           
        <div class="ImageOverlayCa"></div>
        
        <div class="reveal"> 
          <span class="product-additional">      
            <img src="{{ asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/new/mx1.jpg?v=1532428466') }}" class="featured-image" alt="12&quot; Rain Shower">
          </span>
          <img  src="{{ asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/new/mx1.jpg?v=1532428466') }}" class="hidden-feature_img" alt="12&quot; Rain Shower" />
        </div>      
        
      </a>



      <div class="product_right_tag   offer_exist ">
          
        
      </div>

  
    </div>

  </div>
</li>

     
<li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item" id="product-1892833067126" >
  <div class="products product-hover-16">
    <div class="product-container">  
      
      <a href="{{ url('/mixer') }}" class="grid-link">            
        
        
        
           
        <div class="ImageOverlayCa"></div>
        
        <div class="reveal"> 
          <span class="product-additional">      
            <img src="{{ asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/new/mx2.jpg?v=1532438114') }}" class="featured-image" alt="15-Litre Water Heater">
          </span>
          <img  src="{{ asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/new/mx2.jpg?v=1532438114') }}" class="hidden-feature_img" alt="15-Litre Water Heater" />
        </div>      
        
      </a>



      <div class="product_right_tag  ">
         
        
      </div>

      
    </div>

  </div>
</li>

 

<li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item" id="product-1786324156534" >
  <div class="products product-hover-16">
    <div class="product-container">  
      
      <a href="{{ url('/mixer') }}" class="grid-link">           
        
        
        
           
        <div class="ImageOverlayCa"></div>
        
        <div class="reveal"> 
          <span class="product-additional">      
            <img src="{{ asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/new/mx3.jpg?v=1532437397') }}" class="featured-image" alt="2000-Watt Water Heater">
          </span>
          <img  src="{{ asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/new/mx3.jpg?v=1532437400') }}" class="hidden-feature_img" alt="2000-Watt Water Heater" />
        </div>      
        
      </a>



      <div class="product_right_tag  ">
         
        
      </div>

      
    </div>

  </div>
</li>


<li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item" id="product-1786324156534" >
  <div class="products product-hover-16">
    <div class="product-container">  
      
      <a href="{{ url('/mixer') }}" class="grid-link">           
         
        <div class="ImageOverlayCa"></div>
        
        <div class="reveal"> 
          <span class="product-additional">      
            <img src="{{ asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/new/mx4.jpg?v=1532437397') }}" class="featured-image" alt="2000-Watt Water Heater">
          </span>
          <img  src="{{ asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/new/mx4.jpg?v=1532437400') }}" class="hidden-feature_img" alt="2000-Watt Water Heater" />
        </div>      
        
      </a>



      <div class="product_right_tag  ">
         
        
      </div>

      
    </div>

  </div>
</li>
    
          </ul>
          
          </div>
   
        </div>
      </div>
    </div>
    
</div>
</div>   
    <div class="dt-sc-hr-invisible-large"></div>
		          
        </div>          
        
      </div>
      
      
       <div class="dt-sc-hr-invisible-large"></div>
    </main>  
<style type="text/css">
  .reveal img {border-radius: 5%}
</style>
@endsection