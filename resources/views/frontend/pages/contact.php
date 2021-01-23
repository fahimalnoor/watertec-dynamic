<?php
include "main-header.blade.php";
include "pages-header.blade.php";
?>

<nav class="breadcrumb bread2" aria-label="breadcrumbs" style="margin-top: 85px">
 

  
  <h1>Contact</h1>
  <a href="../index.html" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  <span>Contact</span>

  
</nav>
  <div class="dt-sc-hr-invisible-large"></div> 

 
    

      
    <main class="main-content ">  
      
        <div class="grid__item">           
          <div class="grid">
  <div class="grid__item">  
      <div id="shopify-section-contact" class="shopify-section">

<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.6329226472842!2d90.35848082916438!3d23.799685226095274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ3JzU4LjkiTiA5MMKwMjEnMzIuNSJF!5e0!3m2!1sen!2sbd!4v1604816204778!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>


        
<div class="contact-address">
  <div class="container">
    <div class="dt-sc-hr-invisible-large"></div>
    <div class="grid__item">
      
      <ul>
        <li class="grid__item wide--one-quarter post-large--one-half large--one-half">
          <div class="icon-wrapper" style="height: 237px;">
            <div class="icon">
              <i class="fa fa-phone"></i> 
            </div>
             
            <h4>TALK TO US</h4>
            <p>  Sales: + 88 017 6666 5101-05 <br>+ 88 017 6666 5100</p><mark></mark> 
            
          </div>
        </li>
        <li class="grid__item wide--one-quarter post-large--one-half large--one-half">
          <div class="icon-wrapper" style="height: 237px;">
            
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <h4>Contact Us</h4>
            <p> 
              <a title="" href="mailto:enquiry@watertec.com.bd">enquiry@watertec.com.bd</a><br>
            </p> 
            
          </div>
        </li>
         
        <li class="address grid__item wide--one-quarter post-large--one-half large--one-half"> 
          <div class="icon-wrapper" style="height: 237px;">
            <div class="icon">
              <i class="fa fa-home"></i>
            </div> 
            <h4>LOCATION</h4>
            <p> 35/C/1 SHAH ALI BAG,<br /> MIRPUR 1216<br /></p><mark></mark> 
          </div>
        </li>
        
         
        <li class="hours grid__item wide--one-quarter post-large--one-half large--one-half"> 
          <div class="icon-wrapper" style="height: 237px;">
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div> 
            <h4>OPENING HOURS</h4>
            <p> Saturday - Thursday 10am - 6 pm<br /></p>
          </div>
        </li>
        
      </ul>
      
    </div>
    <div class="dt-sc-hr-invisible-large"></div>
    <div class="grid__item">
      <div class="contact-form-section">
        <?php
            if(isset($_GET['msg'])){
               echo "<p style='color:red;font-weight:bold;'>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
                }
          ?>
        <form method="post" action="mail.php" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />
        
        
        
        <label for="ContactFormName" class="label--hidden">Name</label>
        <input type="text" id="ContactFormName" name="name" placeholder="Name" autocapitalize="words" value="">
        <label for="ContactFormEmail" class="label--hidden">Email</label>
        <input type="email" id="ContactFormEmail" name="email" placeholder="Email" autocorrect="off" autocapitalize="off" value="">
        
        <label for="ContactFormSub" class="label--hidden">translation missing: en.contact.form.phone</label>
        <input type="text" id="ContactFormSub" name="subject" placeholder="Subject" autocapitalize="words" value="">
        <label for="ContactFormMessage" class="label--hidden">Message</label>
        <textarea rows="7" id="ContactFormMessage" name="body" placeholder="Message"></textarea>
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
<?php
include "main-footer.blade.php";
?>