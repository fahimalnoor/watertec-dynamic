@extends('frontend.frontmaster')

@section('content')
<nav class="breadcrumb bread2" aria-label="breadcrumbs" style="margin-top: 85px">
 
  <h1>Media</h1>
  <a href="{{ url('/') }}" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  
  <span>Media</span>

</nav>
  <div class="dt-sc-hr-invisible-large"></div> 

 
    <main class="main-content ">  
      
      <div class="wrapper">
        
        <div class="grid__item">           
          


<div class="grid__item">
  <div class="collection-products position-change">
	    

              
      <a href="{{ url('media') }}" class="grid-link">            
        
        @foreach($sub as $all_sub)
        
        <div class="reveal"> 
          <span class="product-additional">      
          
        {!! $all_sub->description !!}  
         </div>     
         @endforeach      
        
      </a>

    
</div>
</div>   
    <div class="dt-sc-hr-invisible-large"></div>
		          
        </div>          
        
      </div>
      
      
       <div class="dt-sc-hr-invisible-large"></div>
    </main>  
<style type="text/css">
  .reveal img {border-radius: 25%}
</style>
@endsection