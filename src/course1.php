<?php


  include("php/server.php");
  include_once('php/loginserver.php');
   include_once('php/signupserver.php');
  include_once('php/logoutserver.php')
?>
<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="logo.png" type="image/png">
		<title>YOU CHEF</title>
		<!-- Bootstrap CSS -->


		<!-- <link rel="stylesheet" href="css/style.css"> -->
		<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">

		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">

		<link rel="stylesheet" href="css/aos.css">
		<link rel="stylesheet" href="css/ionicons.min.css">

		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="css/jquery.timepicker.css">


		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/icomoon.css">


		<link rel="stylesheet" href="vendors/linericon/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
		<link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
		<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
		<link rel="stylesheet" href="css/uikit.min.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<link rel="shortcut icon" type="image/x-icon" href="image/favicon.png">
		<!-- main css -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style1.css">

		<link rel="stylesheet" href="css/pizza.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/mycss.css">






	</head>
    <body  >

        <!--================Header Area =================-->
        <header class="header_area" >
            <!-- <div class="container"> -->
                <nav class="navbar navbar-expand-lg navbar-light" style="background-image: url(image/.jpg);">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php" ><img src="logo.png" alt="">YOU CHEF</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

                        <!-- <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p> -->

                        <div style="float: right; cursor: pointer;">
                           <span class=" my-cart-icon fa fa-shopping-cart" style="color:black">
                              Shopping Cart<span class="badge badge-notify my-cart-badge"></span>
                           </span>
                         </div>


                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class=" nav-item "><a class="nav-link" href="index.php">Home</a></li>

                            <li class="nav-item submenu dropdown">
                                <span   class=" nav-link dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" >Order</span>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="readymeal.php">Ready Meals</a></li>
                                    <li class="nav-item"><a class="nav-link" href="foodrecipe.php">Recipe With Ingredients</a></li>
                                    <li class="nav-item"><a class="nav-link" href="restaurant.php">Restaurent</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <span  class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</span>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="course1.php">ITALIAN COURSE</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">course 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">course 3</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">course 4</a></li>
                                </ul>
                            </li>

                            <li class=" nav-item"><a class="nav-link" href="contact.php" >Contact</a></li>

                            <!-- Search form -->

                            <li class="nav-item submenu dropdown">
                                <?php
                                    if(isset($_SESSION['email'])){ ?>
                                    <span class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile</span>
                                    <?php } else {?>
                                <span class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log In / Sign up</span>
                                    <?php } ?>
<!-- ENTER CHANGES FOR LOGGED IN ACCOUNTS AND OTHERWISE FOR EVERY PAGE -->
                                <ul class="dropdown-menu">
                                    <?php
                                        if(isset($_SESSION['email'])){ ?>
                                             <li class="nav-item"><a class="nav-link" href="profile.php" ><?php echo $_SESSION['lastname']; ?></a></li>
                                             <li class="nav-item"><a class="nav-link" href="index.php?logout='1'" >Logout</a></li>
                                    <?php	} else { ?>
                                             <li class="nav-item"><a class="nav-link"  data-toggle="modal" data-target="#log_modal">Login</a></li>
                                             <li class="nav-item"><a class="nav-link"  data-toggle="modal" data-target="#sign_modal">Sign up</a></li>
                                    <?php	} ?>


                                    <!-- <li class="nav-item"><a class="nav-link" href="blog.php" data-toggle="modal" data-target="#log_modal">Login</a></li> -->
                                    <!-- <li class="nav-item"><a class="nav-link" href="foodreview.php" data-toggle="modal" data-target="#sign_modal">Sign up</a></li> -->
                                </ul>
                            </li>


                        </ul>
                    </div>

                </nav>
                <!-- </div> -->

            </header>
        <!--================Header Area =================-->

		<!--================Breadcrumb Area =================-->
		<section class="breadcrumb_area" style="background-image: url(image/bg_4.jpg);" >
			<div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""
			>

			</div>
			<div class="container" >
				<div id="particles-js"></div>
				<script src="particles.js"></script>
				<script src="app.js"></script>
				<div class="page-cover text-center">
					<h2 class="page-cover-tittle">Courses</h2>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Courses </li>

					</ol>

				</div>
			</div>
		</section>
		<!--================Courses Area =================-->
        <section class="accomodation_area " style="background: url(image/bg_4.jpg)no-repeat fixed;">


        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-7 heading-section text-center ftco-animate">

                    <h2 class="mb-4">Italian Course</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>

                    <div class="star">
                        <span>Ratting</span>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                    </div>
                </div>
            </div>
        </div>






        </section>

        <section class="ftco-section" style="background: url(image/bg_4.jpg)no-repeat fixed;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="pricing-entry d-flex ftco-animate">
                            <!-- <div class="img" style="background-image: url(image/pizza-1.jpg);"></div> -->
                            <div>
                            <button class="buttonload  btn btn-warning btn-sm">
                              <i class="fa fa-refresh fa-spin"></i>Incomplete
                            </button>
                            </div>
                            <div class="desc pl-3">
                                <div class="d-flex text align-items-center">
                                    <h3><span>Pepperoni Pizza  </span></h3>
                                </div>
                                <div class="star">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>



                                <div class="text-center">
                                  <img id="blah" src="image/pizza-1.jpg" style="" class="rounded"  alt="..." width="304" height="236">
                                  <br><br>

                                    <!-- ADD FOOD TYPE FOR CART IN DATA SUMMARY -->

                                  <button class="ml-2 btn btn-warning btn-sm my-cart-btn fa fa-shopping-cart"
                                      data-id="6" data-name="Pepperoni Pizza" data-summary="recipe" data-price="2.90" data-quantity="1"
                                      data-image="image/pizza-1.jpg.jpg" style="color:black">Add
                                  </button>
                                  <button id="1" class="ml-2 btn btn-info btn-sm"  name="subvideo"  value="subvideo" data-toggle="modal" data-target="#subvideo_modal"
                                      style="color:black">Submit Video
                                  </button>


                                  <!-- <button type="button" class="btn btn-primary mr-2 " name="subvideo"  value="subvideo" data-toggle="modal" data-target="#subvideo_modal">Submit Video</button> -->

                                </div>

                                <div class="d-block">
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-entry d-flex ftco-animate">
                            <!-- <div class="img" style="background-image: url(image/pizza-1.jpg);"></div> -->
                            <div>
                            <button class="buttonload  btn btn-warning btn-sm">
                              <i class="fa fa-refresh fa-spin"></i>Incomplete
                            </button>
                            </div>
                            <div class="desc pl-3">
                                <div class="d-flex text align-items-center">
                                    <h3><span>Pepperoni Pizza  </span></h3>
                                </div>
                                <div class="star">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <div class="text-center">
                                  <img id="blah" src="image/pizza-1.jpg" style="" class="rounded"  alt="..." width="304" height="236">
                                  <br><br>

                                    <!-- ADD FOOD TYPE FOR CART IN DATA SUMMARY -->

                                  <button class="ml-2 btn btn-warning btn-sm my-cart-btn fa fa-shopping-cart"
                                      data-id="6" data-name="Pepperoni Pizza" data-summary="recipe" data-price="2.90" data-quantity="1"
                                      data-image="image/pizza-1.jpg.jpg" style="color:black">Add
                                  </button>
                                  <button id="1" class="ml-2 btn btn-info btn-sm"  name="subvideo"  value="subvideo" data-toggle="modal" data-target="#subvideo_modal"
                                      style="color:black">Submit Video
                                  </button>


                                  <!-- <button type="button" class="btn btn-primary mr-2 " name="subvideo"  value="subvideo" data-toggle="modal" data-target="#subvideo_modal">Submit Video</button> -->

                                </div>

                                <div class="d-block">
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-entry d-flex ftco-animate">
                            <!-- <div class="img" style="background-image: url(image/pizza-1.jpg);"></div> -->
                            <div>
                            <button class="buttonload  btn btn-warning btn-sm">
                              <i class="fa fa-refresh fa-spin"></i>Incomplete
                            </button>
                            </div>
                            <div class="desc pl-3">
                                <div class="d-flex text align-items-center">
                                    <h3><span>Pepperoni Pizza  </span></h3>
                                </div>
                                <div class="star">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <div class="text-center">
                                  <img id="blah" src="image/pizza-1.jpg" style="" class="rounded"  alt="..." width="304" height="236">
                                  <br><br>

                                    <!-- ADD FOOD TYPE FOR CART IN DATA SUMMARY -->

                                  <button class="ml-2 btn btn-warning btn-sm my-cart-btn fa fa-shopping-cart"
                                      data-id="6" data-name="Pepperoni Pizza" data-summary="recipe" data-price="2.90" data-quantity="1"
                                      data-image="image/pizza-1.jpg.jpg" style="color:black">Add
                                  </button>
                                  <button id="1" class="ml-2 btn btn-info btn-sm"  name="subvideo"  value="subvideo" data-toggle="modal" data-target="#subvideo_modal"
                                      style="color:black">Submit Video
                                  </button>


                                  <!-- <button type="button" class="btn btn-primary mr-2 " name="subvideo"  value="subvideo" data-toggle="modal" data-target="#subvideo_modal">Submit Video</button> -->

                                </div>

                                <div class="d-block">
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-entry d-flex ftco-animate">
                            <!-- <div class="img" style="background-image: url(image/pizza-1.jpg);"></div> -->
                            <div>
                            <button class="buttonload  btn btn-warning btn-sm">
                              <i class="fa fa-refresh fa-spin"></i>Incomplete
                            </button>
                            </div>
                            <div class="desc pl-3">
                                <div class="d-flex text align-items-center">
                                    <h3><span>Pepperoni Pizza  </span></h3>
                                </div>
                                <div class="star">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>

                                <div class="text-center">
                                  <img id="blah" src="image/pizza-1.jpg" style="" class="rounded"  alt="..." width="304" height="236">
                                  <br><br>

                                    <!-- ADD FOOD TYPE FOR CART IN DATA SUMMARY -->

                                  <button class="ml-2 btn btn-warning btn-sm my-cart-btn fa fa-shopping-cart"
                                      data-id="6" data-name="Pepperoni Pizza" data-summary="recipe" data-price="2.90" data-quantity="1"
                                      data-image="image/pizza-1.jpg.jpg" style="color:black">Add
                                  </button>
                                  <button id="1" class="ml-2 btn btn-info btn-sm"  name="subvideo"  value="subvideo" data-toggle="modal" data-target="#subvideo_modal"
                                      style="color:black">Submit Video
                                  </button>


                                  <!-- <button type="button" class="btn btn-primary mr-2 " name="subvideo"  value="subvideo" data-toggle="modal" data-target="#subvideo_modal">Submit Video</button> -->

                                </div>

                                <div class="d-block">
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>

        </section>





        <!--================service are =================-->

        <section class="ftco-section ftco-services " style="background: url(image/bg_4.jpg)no-repeat fixed;">
        	<div class="overlay"></div>
        	<div class="container">
        		<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section ftco-animate text-center">
						<h2 class="mb-4" style="color:white;">Our Services</h2>
						<p style="color:white;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
        		<div class="row">
					<div class="col-md-4 ftco-animate">
						<div class="media d-block text-center block-6 services">
							<div class="icon d-flex justify-content-center align-items-center mb-5">
								<span class="flaticon-diet"></span>
							</div>
							<div class="media-body">
								<h3 class="heading" style="color:white">Healthy Foods</h3>
								<p style="color:white">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="media d-block text-center block-6 services">
							<div class="icon d-flex justify-content-center align-items-center mb-5">
								<span class="flaticon-bicycle"></span>
							</div>
							<div class="media-body">
								<h3 class="heading" style="color:white;">Fastest Delivery</h3>
								<p style="color:white;">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="media d-block text-center block-6 services">
							<div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
							<div class="media-body">
								<h3 class="heading" style="color:white;">Original Recipes</h3>
								<p style="color:white;">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <!--================ Accomodation Area  =================-->



        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap" style="background: url(image/background/facilites_bg1.jpg)no-repeat fixed; border:none">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
			</div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">YOU CHEF</h2>
                    <p>Food where you want, the way you want.</p>
				</div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
						<h4 class="sec_h4"><i class="fa fa-arrows-alt"></i></i>Restaurant</h4>
						<p>We deliver your favorite meals from popular restaurants that are near your delivery location</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="facilities_item">
						<h4 class="sec_h4"><i class="fa fa-arrows-alt"></i>Ready Meals</h4>
						<p><br>The option to select ready meals allows you to order food without the hassle of cooking!</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="facilities_item">
						<h4 class="sec_h4"><i class="fa fa-arrows-alt"></i>Ingredients</h4>
						<p>Need Ingredients to cook your own recipe? We deliver that as well so you dont have to go look for all the fresh ingredients!</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="facilities_item">
						<h4 class="sec_h4"><i class="fa fa-arrows-alt"></i>Recipe With Ingredients</h4>
						<p>We also offer to deliver food recipes and their ingredients so you can cook your own fresh meal and have fun learning!</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="facilities_item">
						<h4 class="sec_h4"><i class="fa fa-arrows-alt"></i>Courses</h4>
						<p><br>Our cooking courses have sets of recipes to offer you an expertise under our list of cooking categories!</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="facilities_item">
						<h4 class="sec_h4"><i class="fa fa-arrows-alt"></i>About Us</h4>
						<p>Our goal is to deliver food to you in whichever form you want it and encourage you to try being a chef in your kitchen!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Facilities Area  =================-->


	<!--================ Testimonial Area  =================-->
	<section class="testimonial_area section_gap"  style="background: url(image/bg_4.jpg)no-repeat fixed; border:none">
		<!-- <div class="container"> -->
		<div class="section_title text-center">
			<h2 class="">Testimonial from our Clients</h2>
			<p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
		</div>
		<div class="testimonial_slider owl-carousel">

			<?php for($i=1;$i<=8;$i++){ ?>
				<div class="media testimonial_item"  style="background: url(image/background/.jpg)no-repeat fixed; border:none">
					<!-- <img class="rounded-circle" src="image/testtimonial-1.jpg" alt=""> -->
					<div class="media-body">
						<p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
						<a href="#"><h4 class="">Fanny Spencer</h4></a>
						<div class="star">
							<a href="#"><i class="fa fa-star"></i></a>
							<a href="#"><i class="fa fa-star"></i></a>
							<a href="#"><i class="fa fa-star"></i></a>
							<a href="#"><i class="fa fa-star"></i></a>
							<a href="#"><i class="fa fa-star-half-o"></i></a>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
		<!-- </div> -->
	</section>
	<!--================ Testimonial Area  =================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap" style="background: url(image/background/facilites_bg1.jpg)no-repeat fixed; border:none">
		<div class="container">
			<div class="row">
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Agency</h6>
						<p style="color:white">The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Navigation Links</h6>
						<div class="row">
							<div class="col-6">
								<ul class="list_style">
									<li><a href="#">Home</a></li>
									<li><a href="#">Order</a></li>
									<li><a href="#">Ready Meal</a></li>
									<li><a href="#">Receipe</a></li>
								</ul>
							</div>
							<div class="col-6">
								<ul class="list_style">
									<li><a href="#">Ingredients</a></li>
									<li><a href="#">Courses</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Subscribe</h6>
						<p style="color:white">For business professionals caught between high OEM price and mediocre print and graphic output, </p>
						<div id="mc_embed_signup">
							<form target="_blank" action="#" method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
									<button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>

			</div>
			<div class="border_line"></div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-sm-12 footer-text m-0">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script>  This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">You Chef Group Member</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-whatsapp"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

    <!-- ##############################  modal area   ###########################################-->

    <!-- Modal HTML -->




     <!-- login bg-modal (Login) -->
     <div class="modal fade" id="log_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:#000" >
       <div class="modal-dialog" role="document">
         <div class="modal-content">


             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>

           <div class="modal-body ">
               <section>
               <div class="loginbox" >
                   <img src="avatar.png" class="avatar">
                   <h1>Login Here</h1>

     			  <?php
                  // include_once('php/loginserver.php');
                  ?>

                   <form action="" method="post">
                       <p>Email Id</p>
                       <input type="email" name="email" required="1" placeholder="Enter Email Id" style="color:#000" >
                       <p>Password</p>
                       <input type="password" name="pass" required="1" placeholder="Enter Password" style="color:#000">

                       <!-- <input type="submit" class="btn btn-warning btn-sm" name="login" value="Login"> -->
                       <button type="submit" class="btn btn-warning logbtn" name="login" style="width:100%;" value="Login">Login</button>

                       <a class="nav-link" href="foodreview.php" data-toggle="modal" data-target="#"><p>Forgot your password ?</p></a>
                       <a class="nav-link" href="foodreview.php" data-toggle="modal" data-target="#sign_modal"><p>Don't have an account ?</p></a>
                   </form>

               </div>
           </section>

           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           </div>
         </div>
       </div>
     </div>

     <!-- end log in bg modal -->


     <!-- sign in bg model (Signup)-->

     <div class="modal fade" id="sign_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:#000" >
       <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">


             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>

           <div class="modal-body">
               <div class="loginbox">

             		<img src="avatar.png" class="avatar">
             		<!-- <h1>Sign In Here</h1> -->
     				<?php
     					// include_once('php/signupserver.php');
     				?>
             		<form  action="" method="post">


             					<p>First Name</p>
             					<input type="text" name="name" required="1" placeholder="Enter Your Firt Name"  style="color:#000"><br><br>
                                 <p>Last Name</p>
             					<input type="text" name="last-name" required="1" placeholder="Enter Your Last Name"  style="color:#000"><br><br>
             					<p>Email</p>
             					<input type="email" name="email" required="1" placeholder="Example@gmail.com"  style="color:#000">	<br><br>
             					<p>Password</p>
             					<input type="password" name="pass" required="1" placeholder="Enter Your Password"  style="color:#000"><br><br>
             					<p>Confirm Password</p>
             					<input type="password" name="conpass" required="1" placeholder="Enter Confirm Password"  style="color:#000">

             					<p>Contact Number</p>
             					<input type="text" name="contact" required="1" placeholder="Enter Your Contact Number" value=""  style="color:#000"><br><br>
                                 <p>Address</p>
             					<input type="text" name="address" required="1" placeholder="Enter Your address" value=""  style="color:#000"><br><br>

             					<p>Gender</p>
             					<div class="gender"><br>

                                 <label class="container">
             						<input type="radio" name="gender" checked=true value="Male"  style="color:#000">Male
                                 </label>
                                 <label class="container">
             						<input type="radio" name="gender"  value="Female"  style="color:#000">Female
                                 </label>
             					</div>
             					<p>Birth Date:</p>
             					<input type="date" required="1" name="date" ><br>


                                 <button type="submit" class="btn btn-warning logbtn" name="sign" style="width:100%;" value="SignUp">Sign Up</button>



                      </form>


                   </div>


           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           </div>
         </div>
       </div>
     </div>



             <!-- end sign in modal -->

<!-- ############### youtube modal############# -->
            <div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">

                <!--Content-->
                <div class="modal-content">

                  <!--Body-->
                  <div class="modal-body mb-0 p-0">

                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                        allowfullscreen></iframe>
                    </div>

                  </div>

                  <!--Footer-->
                  <div class="modal-footer justify-content-center">
                    <span class="mr-4">Spread the word!</span>
                    <a type="button" class="btn-floating btn-sm btn-fb">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <!--Twitter-->
                    <a type="button" class="btn-floating btn-sm btn-tw">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <!--Google +-->
                    <a type="button" class="btn-floating btn-sm btn-gplus">
                      <i class="fab fa-google-plus-g"></i>
                    </a>
                    <!--Linkedin-->
                    <a type="button" class="btn-floating btn-sm btn-ins">
                      <i class="fab fa-linkedin-in"></i>
                    </a>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                  </div>

                </div>
                <!--/.Content-->

              </div>
            </div>


    <!-- #########################    end  modal area  ################### -->
    <!-- Submit Video -->

    <div class="modal fade" id="subvideo_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="color:#000" >
     <div class="modal-dialog modal-lg" role="document" >
       <div class="modal-content" style="background: url(bg_4.jpg)no-repeat fixed; border:none">
         <!-- <div class="modal-header"> -->
           <h5 class="modal-title" id="exampleModalLabel"></h5>
           <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         <!-- </div> -->
         <div class="modal-body order" >
                      <div class="container">
                          <div class="row">
                              <img src="logo.png" class="avatar">
                              <div class="booking-form">
                                  <div class="form-header">
                                      <h1><br>Submit Your Video</h1>
                                  </div>

                              </div>
                          </div>
                      </div>


                      <section class="" style="background: url(image/bg_4.jpg)no-repeat fixed;">


                          <form  action="" method="post">


                                    <p style="color:white">Video Title</p>
                                    <input type="text" style="width:50%;" name="name" required="1" placeholder="Enter Video Title"  style="color:white"><br><br>
                                    <p style="color:white">Video URL</p>
                                    <input type="url" style="width:50%;" name="url" id="url" placeholder="https://example.com" pattern="https://.*" size="30" required>


                                      <p style="color:white">Video Description</p>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" required="1" name="message" id="message" rows="10" placeholder="Enter Video Description"></textarea>
                                        </div>
                                    </div>



                                      <button type="submit" class="btn btn-warning logbtn" name="subrecipe" style="width:50%;" value="subrecipe">Submit Video</button>



                           </form>


                      </section>



       </div>


      </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         </div>
       </div>
    </div>



    <!-- end Submit video  -->





	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<!-- part -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main1.js"></script>


	<script src="js/main.js"></script>

	<script src="js/custom.js"></script>
	<script src="js/myjs.js"></script>


 <script src="js/jquery-2.2.3.min.js"></script>
  <script type='text/javascript' src="js/bootstrap.min.js"></script>
  <script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript" src="js/shopcart.js"></script>





</body>

</html>
