
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
<?php  include('common/buy-sell-menu.php'); ?>
 


<!--Start rev slider wrapper-->     

<!--End rev slider wrapper--> 
<?php //include('common/featured-slider.php'); ?>


<?php //include('common/astro-ads.php'); ?>



<?php //include('common/asked-clinic-abroad.php'); ?>
<?php //include('common/banner-buy-and-sell.php'); ?>







<section class="about-faq sec-padd">
    <div class="container">
        <div class="row">
        
        
        <div class="col-md-12 col-lg-12 col-sm-12 ">
        
        

        
                
           
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
         
                      
           <form class="form-horizontal register" method="post" action="<?php echo url ?>controller/processuserregister.php" enctype="multipart/form-data">
       <div class="form-group">
      <span>First Name</span>
        <input type="text" name="fname" required class="form-control" placeholder="First name" />
       </div>
        <div class="form-group">
       <span>Last Name</span>
        <input type="text" name="lname" required class="form-control" placeholder="Last name"/>
       </div>
       
        <div class="form-group">
       <span>Gender</span>
        <input type="radio" name="gender" value="male"/> Male
        
          <input type="radio" name="gender" value="female" checked/> Female
          
            <input type="radio" name="gender" value="other"/> Other
       </div>
        <div class="form-group">
      
       <img id="uploadpreview" height="100px" style="display:none;"/>
       </div>
       
        <div class="form-group">
       <span>Photo</span>
        <input type="file" name="photo" class="form-control"  id="upoadprofile"/>
       </div>
        <div class="form-group">
       <span>Email</span>
        <input type="email" name="email" required class="form-control" id="email" placeholder="Email"/>
       </div>
       <div class="form-group">
       <span>Confirm email</span>
        <input type="email" name="conemail" id="conemail" required class="form-control" onChange="verifyEmailPassword('email','conemail','btnreg','confirmEmailmsg')" placeholder="Confirm Email"/>
        
        <span id="confirmEmailmsg"></span>
       </div>
       
        <div class="form-group">
       <span>Phone number</span>
        <input type="text" name="phone" class="form-control" placeholder="Phone numbers"/>
       </div>
       
         <div class="form-group">
       <span class="pull-left">Date of Birth</span><br/>
       <div class="col-md-4 col-lg-4 col-sm-12">
      
        <select class="form-control" name="bday">
        <option class="form-control" value="0">Day</option>
        <?php for($i=0;$i<=32;$i++){?>
        <option class="form-control" value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php }?>
        </select>
       </div>
       
        <div class="col-md-4 col-lg-4 col-sm-12">
        <select class="form-control" name="bmonth">
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
        <select class="form-control" name="byear">
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
       <input type="text" name="see" class="form-control" placeholder="college | city| region | state | country"/>
       </div>
       
         
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="seedate" class="form-control" placeholder="Date of completion"/>
       </div>
       
       </div>
       
       
       <div class="form-group">
    
       <div class="col-md-2 col-lg-2 clo-sm-12">
       <span>+2/Inter :</span>
       </div>
       
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="inter" class="form-control" placeholder="college | city| region | state | country"/>
       </div>
       
         <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="interdate" class="form-control" placeholder="Faculty| status | completion year"/>
       </div>
       
       </div>
       
       <div class="form-group">
    
       <div class="col-md-2 col-lg-2 clo-sm-12">
       <span>Bachelor : </span>
       </div>
       
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="bachelor" class="form-control" placeholder="college | city| region | state | country"/>
       </div>
       
         <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="bachelordate" class="form-control" placeholder="Faculty| status | completion year"/>
       </div>
       
       </div>


<div class="form-group">
    
       <div class="col-md-2 col-lg-2 clo-sm-12">
       <span>Masters : </span>
       </div>
       
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="masters" class="form-control" placeholder="college | city| region | state | country"/>
       </div>
       
         <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="mastersdate" class="form-control" placeholder="Faculty| status | completion year"/>
       </div>
       
       </div>
       
       
       
       <div class="form-group">
    
       <div class="col-md-2 col-lg-2 clo-sm-12">
       <span>Other : </span>
       </div>
       
       <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="eduother" class="form-control" placeholder="school/institution | city| region | state | country"/>
       </div>
       
         <div class="col-md-5 col-lg-5 clo-sm-12">
       <input type="text" name="eduotherdate" class="form-control" placeholder="Faculty| status | completion year"/>
       </div>
       
       </div>
       
       
              
          <div class="form-group">
       <span>Current Address *</span>
        <input type="text" name="curaddress" required class="form-control" placeholder="Current Address"/>
       </div>
       
            
          <div class="form-group">
       <span>Permanent Address *</span>
        <input type="text" name="peraddress" required class="form-control" placeholder="Permanent Address"/>
       </div>
        <div class="form-group">
       <span>Country *</span>
       <select class="form-control" required name="country" >
       <option selected class="form-control" >Nepal</option>
       <option class="form-control"> India</option>
       <option class="form-control"> China</option>
       </select>
       </div>
       
       
       <div class="form-group">
       <span>City</span>
       <select class="form-control" name="city">
       <option selected class="form-control">Nepal</option>
       <option class="form-control"> India</option>
       <option class="form-control"> China</option>
       </select>
       </div>
       
        <div class="form-group">
        <span>Password *</span>
        <input type="password" name="password" id="pwd" class="form-control" required placeholder="Enter password" />
       </div>
       
         <div class="form-group">
        <span>Confirm Password *</span>
        <input type="password" name="confirmpassword" onChange="verifyEmailPassword('pwd','conpwd','btnreg','showpwdconmsg')" required class="form-control" placeholder="Confirm password" id="conpwd" /> <br/>
        <span id="showpwdconmsg"></span>
       </div>
        <div class="form-group">
            <input type="hidden" name="url" value="<?php $_GET['url']?>"/>
        <input type="submit" class="btn btn-primary" value="Register" id="btnreg" />
       </div>
       
        </form> 
           
           
           
                </div>
                
                
                
                

        </div>
        
            </div>
            
            
        </div>
   
</section>



<br/>
<br/>

<!--clients and proect done numbers-->
<!--<section class="fact-counter sec-padd">
    <div class="container">
        <div class="row clearfix">
            <div class="counter-outer clearfix">
               
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                    <div class="item">
                        <div class="count-outer"><span class="count-text" data-speed="3000" data-stop="2456">0</span></div>
                        <h4 class="counter-title">Sucessfull Projects</h4>
                    </div>
                        
                </article>
                
             
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                    <div class="item">
                        <div class="count-outer"><span class="count-text" data-speed="3000" data-stop="146">0</span>+</div>
                        <h4 class="counter-title">Sucessfull Projects</h4>
                    </div>
                </article>
                
               
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                    <div class="item">
                        <div class="count-outer"><span class="count-text" data-speed="3000" data-stop="853">0</span>+</div>
                        <h4 class="counter-title">Sucessfull Projects</h4>
                    </div>
                </article>
                
               
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                    <div class="item">
                        <div class="count-outer"><span class="count-text" data-speed="3000" data-stop="2381">0</span></div>
                        <h4 class="counter-title">Sucessfull Projects</h4>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>-->





<!--partner slider -->
<!--<section class="clients-section sec-padd">
    <div class="container">
        <div class="section-title">
            <h2>our partners</h2>
        </div>
        <div class="client-carousel owl-carousel owl-theme">

            <div class="item tool_tip" title="media partner">
                <img src="images/clients/1.png" alt="Awesome Image">
            </div>
            <div class="item tool_tip" title="media partner">
                <img src="images/clients/2.png" alt="Awesome Image">
            </div>
            <div class="item tool_tip" title="media partner">
                <img src="images/clients/3.png" alt="Awesome Image">
            </div>
            <div class="item tool_tip" title="media partner">
                <img src="images/clients/4.png" alt="Awesome Image">
            </div>
            <div class="item tool_tip" title="media partner">
                <img src="images/clients/5.png" alt="Awesome Image">
            </div>

        </div>
    </div>  
</section>-->




<?php include('common/footer.php'); ?>