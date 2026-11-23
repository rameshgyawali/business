<header class="top-bar">
    <div class="container">
        <div class="clearfix">
            <ul class="top-bar-text float_left">
              
                <li><i class="icon-world"></i>6:37 AM Monday May 16</li>
            </ul>
            
            <div class="col-md-4">
            
            </div>
           

            
            <ul class="social float_right">
               
                 <li><a href="<?php echo url ?>register-employee-job-seeker">Login</a></li>
                 <li><a href="<?php echo url ?>register-employee-job-seeker">Register</a></li>
                 
                    <li><a href="<?php echo url ?>register-employee-job-seeker">Employer</a></li>
                 <li><a href="<?php echo urljobandvacancy ?>register-jobseeker">Job seeker</a></li>
                 
                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
            

    </div>
</header>

<div class="userAreaIcon" id="leftMenu">
<div class="menuUserDiv">
<a href="#" class="noticons" onclick="newItems('newsFeedList')"><i class="fa fa-newspaper-o"></i>
<div class="newArrive">109</div>
</a>
<div class="userLatestDataContainer" id="newsFeedList">
<?php for($i=0;$i<10;$i++){?>
<div class="notifyBox">
<div class="notifyBox_image">
<img src="images/blog/12.jpg"/>

</div>
<div class="notifyBox_content">
<h4><a href="#"><strong>Suman Kharel</strong> Commented on :</a></h4>
<h5>"beautiful flower of the world"</h5>
<h4><a href="#">Yesterday at 5:44 pm</a></h4>
<div class="notifyDelete" id="34" onclick="showMenuToDelete('newsFeed<?php echo $i ?>');"></div>

<div class="notifiDeleteMark" id="newsFeed<?php echo $i ?>">
<a href="#"><i class="fa fa-trash"></i>  Delete </a>
<a href="#"> <i class="fa fa-close"></i>  Turn off</a>
<a href="#"> <i class="fa fa-eye-slash"></i> Hide</a>
</div>
</div>
</div>
<?php }?>

</div>
</div>

<div class="menuUserDiv">
<a href="#" class="noticons" onclick="newItems('NotificationList')"><i class="fa fa-globe"></i>

<div class="newArrive">9</div>
</a>
<div class="userLatestDataContainer" id="NotificationList">
<?php for($i=0;$i<10;$i++){?>
<div class="notifyBox">
<div class="notifyBox_image">
<img src="images/blog/12.jpg"/>

</div>
<div class="notifyBox_content">
<h4><a href="#"><strong>Suman Kharel</strong> Commented on :</a></h4>
<h5>"beautiful flower of the world"</h5>
<h4><a href="#">Yesterday at 5:44 pm</a></h4>
<div class="notifyDelete" id="34" onclick="showMenuToDelete('NotificationList<?php echo $i ?>');"></div>

<div class="notifiDeleteMark" id="NotificationList<?php echo $i ?>">
<a href="#"><i class="fa fa-trash"></i>  Delete </a>
<a href="#"> <i class="fa fa-close"></i>  Turn off</a>
<a href="#"> <i class="fa fa-eye-slash"></i> Hide</a>
</div>
</div>
</div>
<?php }?>

</div>

</div>

<div class="menuUserDiv">
<a href="#" class="noticons" onclick="newItems('commentsList')"><i class="fa fa-comments"></i>
<div class="newArrive">9</div>
</a>
<div class="userLatestDataContainer" id="commentsList">
<?php for($i=0;$i<10;$i++){?>
<div class="notifyBox">
<div class="notifyBox_image">
<img src="images/blog/12.jpg"/>

</div>
<div class="notifyBox_content">
<h4><a href="#"><strong>Suman Kharel</strong> Commented on :</a></h4>
<h5>"beautiful flower of the world"</h5>
<h4><a href="#">Yesterday at 5:44 pm</a></h4>
<div class="notifyDelete" id="34" onclick="showMenuToDelete('commentsList<?php echo $i ?>');"></div>

<div class="notifiDeleteMark" id="commentsList<?php echo $i ?>">
<a href="#"><i class="fa fa-trash"></i>  Delete </a>
<a href="#"> <i class="fa fa-close"></i>  Turn off</a>
<a href="#"> <i class="fa fa-eye-slash"></i> Hide</a>
</div>
</div>
</div>
<?php }?>

</div>
</div>

<div class="menuUserDiv">

<a href="#" class="noticons" onclick="newItems('friends')"><i class="fa fa-users"></i><div class="newArrive">9</div></a>


<div class="userLatestDataContainer" id="friends">
<?php for($i=0;$i<10;$i++){?>
<div class="notifyBox">
<div class="notifyBox_image">
<img src="images/blog/12.jpg"/>

</div>
<div class="notifyBox_content">
<h4><a href="#"><strong>Suman Kharel</strong> Commented on :</a></h4>
<h5>"beautiful flower of the world"</h5>
<h4><a href="#">Yesterday at 5:44 pm</a></h4>
<div class="notifyDelete" id="34" onclick="showMenuToDelete('friends<?php echo $i ?>');"></div>

<div class="notifiDeleteMark" id="friends<?php echo $i ?>">
<a href="#"><i class="fa fa-trash"></i>  Delete </a>
<a href="#"> <i class="fa fa-close"></i>  Turn off</a>
<a href="#"> <i class="fa fa-eye-slash"></i> Hide</a>
</div>
</div>
</div>
<?php }?>

</div>
</div>

<div class="menuUserDiv">
<a href="#" class="noticons"onclick="newItems('friendrequest')"><i class="fa fa-user-plus"></i><div class="newArrive">9</div></a>

<div class="userLatestDataContainer" id="friendrequest">
<?php for($i=0;$i<10;$i++){?>
<div class="notifyBox">
<div class="notifyBox_image">
<img src="images/blog/12.jpg"/>

</div>
<div class="notifyBox_content">
<h4><a href="#"><strong>Suman Kharel</strong> Commented on :</a></h4>
<h5>"beautiful flower of the world"</h5>
<h4><a href="#">Yesterday at 5:44 pm</a></h4>
<div class="notifyDelete" id="34" onclick="showMenuToDelete('friendrequest<?php echo $i ?>');"></div>

<div class="notifiDeleteMark" id="friendrequest<?php echo $i ?>">
<a href="#"><i class="fa fa-trash"></i>  Delete </a>
<a href="#"> <i class="fa fa-close"></i>  Turn off</a>
<a href="#"> <i class="fa fa-eye-slash"></i> Hide</a>
</div>
</div>
</div>
<?php }?>

</div>
</div>

<div class="menuUserDiv">
<a href="#" class="noticons"onclick="newItems('textMessages')"><i class="fa fa-envelope"></i><div class="newArrive">9</div></a>

<div class="userLatestDataContainer" id="textMessages">
<?php for($i=0;$i<10;$i++){?>
<div class="notifyBox">
<div class="notifyBox_image">
<img src="images/blog/12.jpg"/>

</div>
<div class="notifyBox_content">
<h4><a href="#"><strong>Suman Kharel</strong> Commented on :</a></h4>
<h5>"beautiful flower of the world"</h5>
<h4><a href="#">Yesterday at 5:44 pm</a></h4>
<div class="notifyDelete" id="34" onclick="showMenuToDelete('textMessages<?php echo $i ?>');"></div>

<div class="notifiDeleteMark" id="textMessages<?php echo $i ?>">
<a href="#"><i class="fa fa-trash"></i>  Delete </a>
<a href="#"> <i class="fa fa-close"></i>  Turn off</a>
<a href="#"> <i class="fa fa-eye-slash"></i> Hide</a>
</div>
</div>
</div>
<?php }?>

</div>
</div>
</div>
<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="main-logo">
                    <a href="<?php echo url ?>"><img src="<?php echo url ?>logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 menu-column">
                <nav class="main-menu">
                    <div class="navbar-header">     
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix pull-right">

                            <li><a href="<?php echo url ?>"><i class="fa fa-home"></i> Home </a></li>

                            <li class="dropdown"><a href="<?php echo url ?>about-us"> <i class="fa fa-exclamation"></i> About us</a>
                                
                            </li>
                             


                            <li><a href="<?php echo url ?>"><i class="fa fa-edit"></i>  post new job</a>
                                  
                            </li>
                            
                            <li class="dropdown"><a href="<?php echo url ?>"><i class="fa fa-search"></i> profile</a>
                             <ul class="submenu">
                                    <li><a href="#"><i class="fa fa-user"></i> User profile</a></li>
                                     <li><a href="#"><i class="fa fa-book"></i> Add education</a></li>
                                     <li><a href="#"><i class="fa fa-list"></i> Add experiences</a></li>
                                     <li><a href="#"><i class="fa fa-list"></i> Add skills</a></li>
                                     <li><a href="#"><i class="fa fa-edit"></i> edit profile</a></li>
                                     <li><a href="#"><i class="fa fa-edit"></i> change password</a></li>
                                    <li><a href="#"><i class="fa fa-book"></i> Company profile</a></li>
                                    <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                                    
                                </ul>
                                
                                
                                
                                  
                            </li>
                            

                           
                            <!-- <li class=""><a href="<?php echo url ?>hospitals-and-clinics"><i class="fa fa-hospital-o"></i>  Hospital & clinics</a></li>-->
                            
                             


                              

                        </ul>
                        <ul class="mobile-menu clearfix">

                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>

                            <li class="dropdown"><a href="#"> <i class="fa fa-exclamation"></i> About us</a>
                                <ul class="submenu">
                                    <li><a href="#">Buy and Sales</a></li>
                                    <li><a href="our-projects.html">our projects</a></li>
                                    <li><a href="project-single.html">Single projects</a></li>
                                    <li><a href="consultation.html">Free Consultation</a></li>
                                    <li><a href="team.html">Meet Our Team</a></li>
                                    <li><a href="faq.html">Customers FAQ’s</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                </ul>
                            </li>


                            

                            <li class="dropdown"><a href="#"><i class="fa fa-book"></i>  Abroad study</a>
                                <ul>
                                    <li><a href="blog-grid.html">Blog Grid View</a></li>
                                    <li><a href="blog-large.html">Blog Large Image</a></li>
                                    <li><a href="blog-details.html">Blog Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-comment"></i>  Ask and solve</a>
                                <div class="megamenu submenu">
                                    <ul class="float_left megamenu-dropdown">
                                        <li><a href="shop.html">Shop Products</a></li>
                                        <li><a href="shop-single.html">Product Detail Page</a></li>
                                        <li><a href="shop-cart.html">View Shopping Items</a></li>
                                        <li><a href="checkout.html">Checkout Your Page</a></li>
                                        <li><a href="account.html">Login or Register</a></li>
                                     </ul>
                                     <div class="default-form-area float_left">
                                        <form name="contact_form" class="default-form register-form" action="http://steelthemes.com/demo/html/fortune-html/inc/sendmail.php" method="post">
                                            <div class="link">
                                                <a href="#" class="thm-color">Sing In</a>&nbsp; | &nbsp;<a href="account.html" class="thm-color-2">Register</a> 
                                            </div>  
                                            <div class="row-10 clearfix">
                                                <div class="form-group w100">
                                                    <input type="email" name="form_email" class="form-control" value="" placeholder="Email">
                                                </div>
                                                <div class="form-group w100">
                                                    <input type="password" name="form_password" class="form-control" value="" placeholder="Password" required>
                                                </div>
                                            </div> 
                                            <br>
                                            <div class="link_2 singn responsive-video-box clearfix">
                                                <a href="https://www.youtube.com/watch?v=mjxt9qn5z2I" class="fancy_video fancybox.iframe tran3s"><div><span class="fa fa-play"></span></div></a><a href="#" class="thm-color float_left">SINGIN</a><a href="#" class="thm-color float_right">Forgot Password?</a> 
                                            </div>
                                               
                                        </form>
                                    </div>
                                </div>
                            </li>
                            
                               <li><a href="#"><i class="fa fa-television"></i> Electronics</a>
                                <div class="megamenu submenu">
                                    <ul class="float_left megamenu-dropdown">
                                        <li><a href="service.html">View All Services</a></li>
                                        <li><a href="service-single.html">Business Growth</a></li>
                                        <li><a href="service-single.html">Sustainability</a></li>
                                        <li><a href="service-single.html">Performance</a></li>
                                        <li><a href="service-single.html">Advanced Analytics</a></li>
                                        <li><a href="service-single.html">Organization</a></li>
                                        <li><a href="service-single.html">Customer Insights</a></li>
                                     </ul>
                                     <div class="default-form-area float_left">
                                        <form name="contact_form" class="default-form" action="http://steelthemes.com/demo/html/fortune-html/inc/sendmail.php" method="post">
                                            <div class="row-10 clearfix">
                                                <div class="form-group w100">
                                                    <h5>i would like to discus</h5>
                                                    <select class="text-capitalize selectpicker" name="form_subject" data-style="g-select" data-width="100%">
                                                        <option value="0" selected="">Business Growth</option>
                                                        <option value="1">Sustainability</option>
                                                        <option value="2">Performance</option>
                                                        <option value="3">Advanced Analytics</option>
                                                        <option value="4">Organization</option>
                                                        <option value="5">Customer Insight</option>
                                                    </select>
                                                </div>
                                                <div class="form-group w50">
                                                    <input type="text" name="form_name" class="form-control" value="" placeholder="Name" required>
                                                </div>
                                                <div class="form-group w50">
                                                    <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                                                </div>
                                            </div> 
                                            <button type="submit" class="thm-btn">submit</button>     
                                        </form>
                                    </div>
                                </div>
                            </li>

                            <li class=""><a href="#"><i class="fa fa-phone"></i>  contact us</a></li>


                              

                        </ul>
                    </div>
                </nav> <!-- End of #main_menu -->
            </div>
            
            
            
        </div>
                

   </div> <!-- End of .conatiner -->
</section>
