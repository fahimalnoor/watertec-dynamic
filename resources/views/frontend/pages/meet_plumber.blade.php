@extends('frontend.frontmaster')

@section('content')
<nav class="breadcrumb bread2" aria-label="breadcrumbs" style="margin-top: 85px">
 

  
  
  <h1>Meet The Plumber</h1>
  <a href="{{ url('/') }}" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  
  <span>Meet The Plumber</span>

  
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
         
      
      <a href="{{ url('meet-plumber') }}" class="grid-link">           
         
        @foreach($sub as $all_sub)
        
        <div class="reveal"> 
          <span class="product-additional">      
          
        {!! $all_sub->description !!}  
         </div>     
         @endforeach  
        
      </a>



      <div class="product_right_tag   offer_exist ">
       
          
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