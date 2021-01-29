@extends('frontend.frontmaster')
@section('content')

<nav class="breadcrumb" aria-label="breadcrumbs" style="margin-top: 85px">
 

  
  <h1>Contact</h1>
  <a href="{{ url('/') }}" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  <span>Contact</span>
  
</nav>
  <div class="dt-sc-hr-invisible-large"></div> 

    <main class="main-content ">  
      
        <div class="grid__item">           
          <div class="grid">
  <div class="grid__item">  
      <div id="shopify-section-contact" class="shopify-section">

<div id="map"><iframe style="border:0;overflow:hidden;" src="https://maps.google.co.in/?ie=UTF8&amp;t=m&amp;ll=-37.823006,144.977388&amp;spn=0.02034,0.042915&amp;z=14&amp;output=embed" width="960" height="578"></iframe> </div>


        
<div class="contact-address">
  <div class="container">
    <div class="dt-sc-hr-invisible-large"></div>
    <div class="grid__item">
      
        @foreach($menu as $all_menu)
        {!! $all_menu->description !!}
        @endforeach
        
        
      
    </div>
    <div class="dt-sc-hr-invisible-large"></div>
    <div class="grid__item">
      <div class="contact-form-section">
        <form method="post" action="https://bath-fixtures.myshopify.com/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />
        
        
        
        <label for="ContactFormName" class="label--hidden">Name</label>
        <input type="text" id="ContactFormName" name="contact[name]" placeholder="Name" autocapitalize="words" value="">
        <label for="ContactFormEmail" class="label--hidden">Email</label>
        <input type="email" id="ContactFormEmail" name="contact[email]" placeholder="Email" autocorrect="off" autocapitalize="off" value="">
        
        <label for="ContactFormSub" class="label--hidden">translation missing: en.contact.form.phone</label>
        <input type="text" id="ContactFormSub" name="contact[subject]" placeholder="Subject" autocapitalize="words" value="">
        <label for="ContactFormMessage" class="label--hidden">Message</label>
        <textarea rows="7" id="ContactFormMessage" name="contact[body]" placeholder="Message"></textarea>
        <button type="submit" class="btn">Send</button>
        </form>
      </div>
    </div>
  </div>
  
  <style>
    .contact-address .icon {display: inline-block;font-size: 20px;height: 70px;line-height: 70px;margin-bottom: 25px;position: relative;text-align: center;width: 70px;color:#ffffff;}

    .contact-address { float:left;width:100%; }
    .contact-address .icon::after {background: #e81a46; border-radius: 50%; content: ""; height: 50px;left: 0;margin: 0 auto; position: absolute;right: 0; top: 10px;width: 50px;z-index: -1;}
    .contact-form-section .contact-form {background:rgba(0,0,0,0); }
    .contact-address .social-icons li a:hover { background:;border-color:;}
.contact-address .icon-wrapper{padding: 30px 10px;border:1px solid #e81a46;float:left;width:100%;}
.contact-address h4 { font-size: 18px;text-transform:uppercase;letter-spacing:1px;color:#3e454c; }

  
  </style>
  
  
</div>





</div>
  </div>
</div>
              
        </div>          
        
      
       <div class="dt-sc-hr-invisible-large"></div>
    </main>  

@endsection