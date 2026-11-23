
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Fortune || Responsive HTML 5 Template</title> 

	<!-- mobile responsive meta -->
	<?php include('common/top-links.php'); ?>

 

</head>
<body>

<div class="boxed_wrapper logregbg" >
<?php /// include('common/mainmenu.php'); ?>
 


<!--Start rev slider wrapper-->     

<!--End rev slider wrapper--> 
<?php //include('common/featured-slider.php'); ?>


<?php //include('common/astro-ads.php'); ?>



<?php //include('common/asked-clinic-abroad.php'); ?>





<section class="about-faq sec-padd " >
    <div class="container">
        <div class="row">
        
        
        <div class="col-md-12 col-lg-12 col-sm-12 adpage" style="background:#069 !important;">
        
        
         <div class="col-md-4 col-lg-4">
         </div>
        <div class="col-md-4 col-lg-4" style="background:#fff; padding:10px;">
        <h4>Login</h4>
       <br/>
        <form class="form-horizontal register">
       <div class="form-group">
       
        <input type="email" name="name" class="form-control" placeholder="Full name" value="" />
       </div>
       
        <div class="form-group">
       
        <input type="text" name="address" class="form-control" placeholder="Enter your address" value="" />
       </div>
       
       
        <div class="form-group">
       
        <input type="submit" class="btn btn-primary" value="Login" />
       </div>
       
        </form>
        <br/>
        <button type="button" onClick="forgotPassword()">Forgot password</button>
        
        <div class="forgotpassword" id="forgotpwd">
        <div class="crush" onClick="forgotPassword()">X</div>
       
        
        <form class="form-vertical register">
     
       <div class="form-group">
       <span>Enter your email</span>
       <input type="email" class="form-control" placeholder="Enter your email" />
       </div>
        
       
        <button type="button" onClick="enterPin()" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
        
        
        
       

        
                
           <div class="col-md-4 col-lg-4">
         </div>
            
                
                
                
                

        </div>
        
            </div>
            
            
        </div>
   
</section>



<br/>
<br/>






<?php  include('common/loginregisterfooter.php'); ?>