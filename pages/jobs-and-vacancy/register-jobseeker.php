
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Fortune || Responsive HTML 5 Template</title> 

	<!-- mobile responsive meta -->
	<?php include('common/top-links.php'); ?>

 

</head>
<body>

<div class="boxed_wrapper">
<?php include('common/jobs-and-vacancy-menu.php'); ?>
 


<!--Start rev slider wrapper-->     

<!--End rev slider wrapper--> 
<?php //include('common/featured-slider.php'); ?>


<?php //include('common/astro-ads.php'); ?>



<?php //include('common/asked-clinic-abroad.php'); ?>





<section class="about-faq sec-padd ">
    <div class="container">
        <div class="row">
        
        
        <div class="col-md-12 col-lg-12 col-sm-12 adpage background">
        
        <div class="col-md-2 col-sm-12 col-lg-2"></div>
        
        
        
        <div class="col-md-8 col-lg-8">
        
        
      
         
      
       <!--form for the job seeker-->
      
        <h4>Job seeker registration</h4><br/>
       <p>This information will generate your cv</p>
       <p>Note : if you dont have your real number on account edit from the profile</p>
        <form class="form-horizontal register" method="post" enctype="multipart/form-data" >
     
      <div class="form-group">
       <span>Photo</span>
        <input type="file" name="phone" class="form-control" placeholder="mobile numbers"/>
       </div>
       
        <div class="form-group">
      <span>Profile</span>
        <textarea name="profile" class="form-control" placeholder="Enter your profile : "></textarea>
       </div>
       
       <div class="form-group">
      <span>Desired Designation</span>
        <input type="text" name="fname" class="form-control" placeholder="Enter the post you want to apply" />
       </div>
        <div class="form-group">
       <span>Full name</span>
        <input type="text" name="fullname" class="form-control" placeholder="full name"/>
       </div>
       
        
       
        <div class="form-group">
       <span>Email</span>
        <input type="email" name="email" class="form-control" placeholder="Email"/>
       </div>
       
       
        <div class="form-group">
       <span>Mobile</span>
        <input type="text" name="phone" class="form-control" placeholder="mobile numbers"/>
       </div>
       
       <div class="col-md-12 col-lg-12 col-sm-12" id="skills">
       <p>Enter your skill and expertise level then click the save button to save it and add another if you have more than one</p>
       <div class="form-group">
      <div class="col-md-5">
       <span>Skill</span>
        <input type="text" name="phone" class="form-control" id="skillname" placeholder="mobile numbers"/>
      </div>
       <div class="col-md-5">
       <span>Expertise level in %</span>
       <select name="skillexp" class="form-control" id="skillpercent">
       
       <?php for($i=1;$i<=10;$i++){?>
       <option class="form-control" value="<?php echo $i.'0%'; ?>"><?php echo $i.'0'; ?>%</option>
       <?php }?>
       </select>
      </div>
      
      <div class="col-md-2 col-lg-2 col-sm-12">
      <br/>
      <button type="button" class="btn btn-primary btn-sm pull-right" onClick="saveSkill()">
      <i class="fa fa-save "></i> Save skill
      </button>
      </div>
      
       </div>
       
       
</div>




<div class="col-md-12 col-lg-12 col-sm-12" id="skills">
       <p>Enter your skill and expertise level then click the save button to save it and add another if you have more than one</p>
       <div class="form-group">
      <div class="col-md-5">
       <span>Skill</span>
        <input type="text" name="phone" class="form-control" id="skillname" placeholder="mobile numbers"/>
      </div>
       <div class="col-md-5">
       <span>Expertise level in %</span>
       <select name="skillexp" class="form-control" id="skillpercent">
       
       <?php for($i=1;$i<=10;$i++){?>
       <option class="form-control" value="<?php echo $i.'0%'; ?>"><?php echo $i.'0'; ?>%</option>
       <?php }?>
       </select>
      </div>
      
      <div class="col-md-2 col-lg-2 col-sm-12">
      <br/>
      <button type="button" class="btn btn-primary btn-sm pull-right" onClick="saveSkill()">
      <i class="fa fa-save "></i> Save skill
      </button>
      </div>
      
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
       
        
       
        <!--for fo the normal user-->
        
        </div>

        
                
           
            
                
                
                
                

        </div>
        
            </div>
            
            
        </div>
   
</section>



<br/>
<br/>




<?php include('common/footer.php'); ?>