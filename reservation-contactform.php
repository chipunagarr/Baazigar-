
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<?php include 'conn.php';?>

<body>
  <div class="page-wrapper"> 
  
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="B" class="letters-loading">
                            B
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="Z" class="letters-loading">
                            Z
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="G" class="letters-loading">
                            G
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- Preloader End -->
    
    
    <!-- Main Header-->
    

<?php include 'header-top.php';?>

    <!--End Main Header -->
    
    <!--Menu Backdrop-->
    <div class="menu-backdrop"></div>

    <!-- Hidden Navigation Bar -->
    

    <?php include 'header.php';?>
    <!--End Hidden Bar -->

    <!--End Hidden Bar -->

    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-3.jpg);"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>book your table</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h1><span>Reservation Form</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Online Reservation Section-->
    <section class="reservation-contactform inner-page">
        <div class="left-bg"><img src="images/background/bg-5.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>Reservation</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>Book A Table</h2>
                <div class="text desc">Restaurant will be open for all days, Sunday night will be closed, All booking payment is secured with credit card, no charges will be aplly for online booking. no refundable.</div>
                <div class="text request-info">Booking request <a href="#">+88-123-123456</a> or fill out the order form</div>
            </div>
            <div class="default-form reservation-form">
                <form method="post" action="">
                    <div class="row clearfix">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="Uusername" placeholder="Your Name" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="email" name="Email"  placeholder="Your Email" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="number" name="Number"  placeholder="Phone Number" required="">
                            </div>
                        </div>
                    

                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <span class="alt-icon far fa-user"></span>
                                <select type="Number"  name="Person" class="l-icon">
                                    <option name="Person">1 Person</option>
                                    <option>2 Person</option>
                                    <option>3 Person</option>
                                    <option>4 Person</option>
                                    <option>5 Person</option>
                                    <option>6 Person</option>
                                    <option>7 Person</option>
                                </select>
                                <span class="arrow-icon far fa-angle-down"></span>
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <span class="alt-icon far fa-calendar"></span>
                                <input class="l-icon datepicker" type="datepicker" name="date" value="" placeholder="DD-MM-YYYY" required readonly>
                                <span class="arrow-icon far fa-angle-down"></span>
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <span class="alt-icon far fa-clock"></span>
                                <select type="Number" name="time" class="l-icon">
                                    <option>08 : 00 am</option>
                                    <option>09 : 00 am</option>
                                    <option>10 : 00 am</option>
                                    <option>11 : 00 am</option>
                                    <option>12 : 00 pm</option>
                                    <option>01 : 00 pm</option>
                                    <option>02 : 00 pm</option>
                                    <option>03 : 00 pm</option>
                                    <option>04 : 00 pm</option>
                                    <option>05 : 00 pm</option>
                                    <option>06 : 00 pm</option>
                                    <option>07 : 00 pm</option>
                                    <option>08 : 00 pm</option>
                                    <option>09 : 00 pm</option>
                                    <option>10 : 00 pm</option>
                                </select>
                                <span class="arrow-icon far fa-angle-down"></span>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="field-inner">
                                <textarea name="request" placeholder="Special Request" required=""></textarea>
                            </div>
                        </div>

                    <button type="submit" name="s" class="theme-btn btn-style-one clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">book a table</span>
                            <span class="text-two">book a table</span>
                        </span>
                    </button>
                    </div>

                </form>
                <div class="powered-by">*Powered by OpenTable</div>
            </div>
        </div>
<?php           
            if(isset($_REQUEST['s']))
                        {
                            extract($_REQUEST);
                           echo $query="insert into reservaion values(NULL,'$Uusername','$Email',$Number,'$Person','$date','$time','$request'
)";     
                           
              
                            $res=mysqli_query($con,$query);
                            
                            if($res)
                            {
                                echo "<script>alert('Submit Successfully')</script>";
                               echo "<script>window.location='index.php'</script>";
                            }
                                else
                                {
                                    echo "<script>alert('Submit Failed')</script>";
                                   // echo "<script>window.location='index.php'</script>";
                                }
                                    
                                   
                                
                            }
                            ?>

        <!--Location Section-->
        <div class="location-with-image">
        <div class="auto-container">
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="loc-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <div class="image"><img src="images/resource/media/location-1.jpg" alt=""></div>
                            <div class="over-content">
                                <div class="cat">USA</div>
                                <h4>New York</h4>
                                <div class="text">Restaurant St, Delicious City, NY. <br> P. +88-123-123456   |   E. booking@domainname.com</div>
                                <div class="more-link"><a href="#">get direction</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="loc-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="images/resource/media/location-2.jpg" alt=""></a></div>
                            <div class="over-content">
                                <div class="cat">france</div>
                                <div class="text">520, Delicious City, Revenu Paris. <br> P. +88-123-123456   |   E. booking@domainname.com</div>
                                <div class="more-link"><a href="#">get direction</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>

    </section>

    


  <?php include 'footer.php';?>

</div>
<!--End pagewrapper--> 

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/swiper.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/custom-script.js"></script>
</body>

<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/delici/all-demo/Delici-Video-Hero-Center-Header/reservation-contactform.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2023 06:43:16 GMT -->
</html>