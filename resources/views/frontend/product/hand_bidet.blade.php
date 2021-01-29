@extends('frontend.frontmaster')

@section('content')
<nav class="breadcrumb bread1" aria-label="breadcrumbs">
 

  <h1>Hand Bidet</h1>
  <a href="{{ url('/') }}" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  
  <span>Hand Bidet</span>

  
  
  
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
      <a class="list btn" href="" title="List view" ><span class="fa fa-th-list" aria-hidden="true"></span></a>  
    </div>    
    
    <div class="grid__item wide--five-tenths post-large--eight-tenths large--eight-tenths right">
      
  
    </div>

  </div>
</header>
          
          <div class="products-grid-view">
          <a href="{{ url('/hand-bidet') }}" class="grid-link">            
        
        
        
        @foreach($product_handBidet as $all_product)
         
          {!! $all_product->description !!}
         
     @endforeach   
     
   </a>
      <div class="product_right_tag   offer_exist ">
          
        
      </div>

     
    </div>

  </div>
          
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