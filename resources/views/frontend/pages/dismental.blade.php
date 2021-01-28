@extends('frontend.frontmaster')

@section('content')

<nav class="breadcrumb bread2" aria-label="breadcrumbs" style="margin-top: 85px">
 

  
  <h1>Dismental</h1>
  <a href="{{ url('/') }}" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  <span>Dismental</span>

  
</nav>
  <div class="dt-sc-hr-invisible-large"></div> 

 
    <main class="main-content ">  
      
      <div class="wrapper">
        
        <div class="grid__item">           
          <div class="grid">

  <div class="grid__item" style="text-align: center;">

    @foreach($sub as $all_sub)
    {!! $all_sub->description !!}
    @endforeach

</div>
              
        </div>          
        
      </div>
      
      
       <div class="dt-sc-hr-invisible-large"></div>
    </main>  