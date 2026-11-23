
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Fortune || Responsive HTML 5 Template</title> 

	<!-- mobile responsive meta -->
	<?php include('common/top-links.php'); ?>

 

</head>
<body>

<div class="boxed_wrapper logregbg">
<?php ////include('common/mainmenu.php'); ?>
 


<!--Start rev slider wrapper-->     

<!--End rev slider wrapper--> 
<?php //include('common/featured-slider.php'); ?>


<?php //include('common/astro-ads.php'); ?>



<?php //include('common/asked-clinic-abroad.php'); ?>





<section class="about-faq sec-padd ">
    <div class="container">
        <div class="row">
        
        
        <div class="col-md-12 col-lg-12 col-sm-12 adpage background">
        
        <div class="col-md-4 col-lg-4">
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
        
        <div class="advancedSearch" id="forgotpwd">
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
        
        
        
        <div class="col-md-8 col-lg-8">
         <h4>Register</h4>
       <br/>
        <form class="form-horizontal register">
       <div class="form-group">
      <span>First Name</span>
        <input type="text" name="fname" class="form-control" placeholder="First name" />
       </div>
        <div class="form-group">
       <span>Last Name</span>
        <input type="text" name="lname" class="form-control" placeholder="Last name"/>
       </div>
       
        <div class="form-group">
       <span>Gender</span>
        <input type="radio" name="gender"/> Male
        
          <input type="radio" name="gender" checked/> Female
          
            <input type="radio" name="gender"/> Other
       </div>
       
        <div class="form-group">
       <span>Email</span>
        <input type="email" name="email" class="form-control" placeholder="Email"/>
       </div>
       <div class="form-group">
       <span>Confirm email</span>
        <input type="email" name="conemail" class="form-control" placeholder="Confirm Email"/>
       </div>
       
        <div class="form-group">
       <span>Phone number</span>
        <input type="text" name="phone" class="form-control" placeholder="Phone numbers"/>
       </div>
       
         <div class="form-group">
       <span class="pull-left">Date of Birth</span><br/>
       <div class="col-md-4 col-lg-4 col-sm-12">
      
        <select class="form-control">
        <option class="form-control" value="0">Day</option>
        <?php for($i=0;$i<=31;$i++){?>
        <option class="form-control" value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php }?>
        </select>
       </div>
       
        <div class="col-md-4 col-lg-4 col-sm-12">
        <select class="form-control">
        <option class="form-control" value="0">Month</option>
        <option class="form-control" value="January">January</option>
        <option class="form-control" value="February">February</option>
        <option class="form-control" value="March">March</option>

        <option class="form-control" value="April">April</option>
        <option class="form-control" value="May">May</option>

        <option class="form-control" value="June">June</option>

        <option class="form-control" value="July">July</option>

        <option class="form-control" value="August">August</option>

        <option class="form-control" value="September">September</option>

        <option class="form-control" value="October">October</option>

        <option class="form-control" value="November">november</option>


        <option class="form-control" value="December">December</option>

        </select>
       </div>

 <div class="col-md-4 col-lg-4 col-sm-12">
        <select class="form-control">
        <option class="form-control" value="0">Year</option>
        <?php
		$date=date('Y');
		print_r($date);
		$start=$date-115;
		 for($i=$start;$i<=$date;$i++){?>
        <option class="form-control" value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php }?>
        </select>
       </div>

       </div>
       <div class="form-group">
       <span>Mobile</span>
        <input type="text" name="mobile" class="form-control" placeholder="Mobile numbers"/>
       </div>
       
        
        <div class="form-group">
       <span class="pull-left">Education : </span><br/>
       <div class="col-md-2 col-lg-2 clo-sm-12">
       <span>SEE/Class 10 :</span>
       </div>
       
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="mobile" class="form-control" placeholder="From /School"/>
       </div>
       
         
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="mobile" class="form-control" placeholder="Date of completion"/>
       </div>
       
       </div>
       
       
       <div class="form-group">
    
       <div class="col-md-2 col-lg-2 clo-sm-12">
       <span>+2/Inter :</span>
       </div>
       
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="mobile" class="form-control" placeholder="From /School/College"/>
       </div>
       
         <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="mobile" class="form-control" placeholder="Faculty"/>
       </div>
       
       </div>
       
       <div class="form-group">
    
       <div class="col-md-2 col-lg-2 clo-sm-12">
       <span>Bachelor : </span>
       </div>
       
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="mobile" class="form-control" placeholder="From/College"/>
       </div>
       
         <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="mobile" class="form-control" placeholder="Faculty"/>
       </div>
       
       </div>


<div class="form-group">
    
       <div class="col-md-2 col-lg-2 clo-sm-12">
       <span>Masters : </span>
       </div>
       
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="mobile" class="form-control" placeholder="From/College"/>
       </div>
       
         <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="mobile" class="form-control" placeholder="Faculty"/>
       </div>
       
       </div>
       
       
              
          <div class="form-group">
       <span>Address</span>
        <input type="text" name="address" class="form-control" placeholder="Address"/>
       </div>
        <div class="form-group">
       <span>Country</span>
       <select class="form-control">
       <option selected class="form-control">Nepal</option>
       <option class="form-control"> India</option>
       <option class="form-control"> China</option>
       </select>
       </div>
       
       
       <div class="form-group">
       <span>City</span>
       <select class="form-control">
       <option selected class="form-control">Nepal</option>
       <option class="form-control"> India</option>
       <option class="form-control"> China</option>
       </select>
       </div>
       
        <div class="form-group">
        <span>Password</span>
        <input type="password" name="password" class="form-control" placeholder="Enter password" />
       </div>
       
         <div class="form-group">
        <span>Confirm Password</span>
        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm password" />
       </div>
        <div class="form-group">
       
        <input type="submit" class="btn btn-primary" value="Register" />
       </div>
       
        </form>
        
        </div>

        
                
           
            
                
                
                
                

        </div>
        
            </div>
            
            
        </div>
   
</section>



<br/>
<br/>



<?php include('common/loginregisterfooter.php'); ?>