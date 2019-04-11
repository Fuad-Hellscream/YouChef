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


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
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

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/pizza.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


	<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)

                        ;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>
    <style>
      article, aside, figure, footer, header, hgroup,
      menu, nav, section { display: block; }
    </style>


</head>
<body >

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
                            <span   class="active nav-link dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" >Order</span>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="readymeal.php">Ready Meals</a></li>
                                <li class="nav-item"><a class="nav-link" href="foodrecipe.php">Recipe With Ingredients</a></li>
                                <li class="nav-item"><a class="nav-link" href="restaurant.php">Restaurent</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <span  class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</span>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="course1.php">course 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">course 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">course 3</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">course 4</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="contact.php" >Contact</a></li>

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

<!-- ready meal area -->


<section id="home-getstarted" class="text-center text-light" style="background: url(image/background/facilites_bg1.jpg)no-repeat fixed;">

	<div class="slider-item">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<h1 class="mb-3 mt-5 bread"><br><br><br>Profile</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span><span>/Profile</span></p>
				</div>

			</div>
		</div>
	</div>
</section>





<section class="ftco-menu ftco-section" style="background: url(image/bg_4.jpg)no-repeat fixed;">

	<div class="container-fluid">
		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
 <!-- ################# profile image ############## -->
                <div class="text-center">
                  <img id="blah" src="image/Profile/raihan.jpg" style="" class="rounded"  alt="..." width="304" height="236">
                </div>
                <br>
                <form action='' method="post" enctype="multipart/form-data">
                <input type='file' onchange="readURL(this);" />
                <button type="submit" class="btn btn-success " name="save"  value="Save">Save</button>
                </form>
<!-- ################# profile name ################# -->
				<h2 class="mb-4">Profile Owner Name</h2>
				<p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <h2 class="mb-4">Points</h2>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">130</div>
                </div>
                <br><br>
                <h4>25% discount available

                    <button type="submit" class="btn btn-primary ml-2 " name="redeem"  value="Redeem">Redeem</button>
                    </div>
                </h4>


        </div>
	</div>

		<div class="row d-md-flex">


			<div class="col-lg-12 ftco-animate p-md-5">
				<div class="row">
					<div class="col-lg-12 nav-link-wrap mb-5">
						<div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Profile</a>

							<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Edit Profile</a>

						</div>
					</div>
					<div class="col-lg-6 d-flex align-items-center">

						<div class="tab-content ftco-animate" id="v-pills-tabContent">

							<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">


								<p style="color:white">Name : </p>
								<br><br>
								<p style="color:white">Email : </p>
								<br><br>
								<p style="color:white">Contact Number : </p>
								<br><br>
								<p style="color:white">Address : </p>
								<br><br>
								<p style="color:white">Gender : </p>
								<br><br>
								<p style="color:white">Birth Date : </p>
								<br>


							</div>
							<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">

                                <form  action="" method="post">

                                <button type="submit" class="btn btn-primary mr-2 " name="upadate"  value="upadate">Update</button>
                                <br><br>
								<p style="color:white">First Name :

                                    <input type="text" style="width:100%;" name="name" required="1" placeholder="Update First Name"  style="color:white">

                                 </p>

								<br><br>
                                <p style="color:white">Last Name :

                                    <input type="text" style="width:100%;" name="last-name" required="1" placeholder="Update Last Name"  style="color:white">

                                 </p>

								<br><br>
								<p style="color:white">Email :

                                    <input type="email" style="width:100%;" name="email" required="1" placeholder="Update Email"  style="color:white">

                                 </p>
								<br><br>
                                <p style="color:white">Old Password :

                                    <input type="password" style="width:100%;" name="pass" required="1" placeholder="Enter Old Password"  style="color:white">

                                 </p>
								<br><br>
                                <p style="color:white">New Password :

                                    <input type="password" style="width:100%;" name="conpass" required="1" placeholder="Enter New Password"  style="color:white">

                                 </p>
								<br><br>
								<p style="color:white">Contact Number :

                                    <input type="number" style="width:100%;" name="contact" required="1" placeholder="Update Contact Number"  style="color:white">

                                </p>
								<br><br>
								<p style="color:white">Address :
                                    <!-- <input type="text" style="width:100%;" name="address" required="1"  placeholder="Update Address"  style="color:white"> -->
                                    <textarea class="form-control" required="1" name="address"  rows="2" placeholder="Enter Recipe Details"></textarea>
                                 </p>
								<br>

                                <button type="submit" class="btn btn-primary mr-2 " name="upadate"  value="upadate">Update</button>


                                </form>


							</div>
						</div>



					</div>
                    <div class="col-lg-6 d-flex align-items-center">

						<div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="col-lg-12 nav-link-wrap mb-5">
                                <div  class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <!-- <button type="button" class="btn btn-primary mr-2 " name="stat"  value="stat">Statistics</button> -->
                                    <button type="button" class="btn btn-info mr-2 " name="log"  value="log" data-toggle="modal" data-target="#orderlog_modal" >Order Log</button>
                                    <button type="button" class="btn btn-primary mr-2 " name="subrecipe"  value="subrecipe" data-toggle="modal" data-target="#subrecipe_modal">Submit Recipe</button>

                                </div>




                            </div>
                                <h2 class="mb-4" style="color:#33EEFF">Statistics</h2>

								<p style="color:white">Order Placed : </p>
								<br><br>
								<p style="color:white">Discount Activated : </p>
								<br><br>
								<p style="color:white">Courses Completed : </p>
								<br><br>
								<p style="color:white">Resgistered On : </p>
								<br><br>





						</div>



					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<!-- end ready meal area -->


<!-- ##################################################### end food area ##################################### -->



<!--================service are =================-->

<section class="ftco-section ftco-services " style="background: url(image/bg_4.jpg)no-repeat fixed;">
	<div class="overlay">

	</div>
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
					<p> <br>We deliver your favorite meals from popular restaurants that are near your delivery location</p>
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
						<h6 class="footer_title">About Youchef</h6>
						<p style="color:white">The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6" >
					<div class="single-footer-widget" >
						<h6 class="footer_title">Navigation Links</h6>
						<div class="row">
							<div class="col-6">
								<ul class="list_style" >
									<li><a href="#" >Home</a></li>
									<li><a href="#">Order</a></li>
									<li><a href="#">Ready Meal</a></li>
									<li><a href="#">Receipe</a></li>
								</ul>
							</div>
							<div class="col-6">
								<ul class="list_style" >
									<li><a href="#">Ingredients</a></li>
									<li><a href="#">Courses</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="contact.php">Contact</a></li>
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

	<!-- modal area -->

	<!-- Modal HTML -->




	<!-- orderlog_modal -->
    <div class="modal fade" id="orderlog_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="color:#000" >
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
                                      <h1><br>Order Log Details</h1>
                                  </div>

                              </div>
                          </div>
                      </div>


                      <section class="" style="background: url(image/bg_4.jpg)no-repeat fixed;">
                          <div class="form-header">
                              <h1>Order Log<br></h1>
                          </div>
                          <table style="width:100%" class="table table-hover table-dark">
                            <thead>
                              <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Ingredients Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php for($i=1;$i<=8;$i++){ ?>
                              <tr>
                                <td style="width:10%" class="text-center"><img width="100px" height="100px" src="logo.png"></td>
                                <td>Tomatoes</td>
                                <td>4 pieces</td>
                                <td>Tk.50</td>
                              </tr>

                                  <?php } ?>

                              <tr>


                            </tbody>
                          </table>


                      </section>


       </div>


      </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         </div>
       </div>
    </div>

	<!-- end orderlog_modal -->

	<!-- Submit Recipe -->

    <div class="modal fade" id="subrecipe_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="color:#000" >
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
                                      <h1><br>Submit Your Recipe</h1>
                                  </div>

                              </div>
                          </div>
                      </div>


                      <section class="" style="background: url(image/bg_4.jpg)no-repeat fixed;">


                          <form  action="" method="post">


                  					<p style="color:white">Recipe Name</p>
                  					<input type="text" style="width:50%;" name="name" required="1" placeholder="Enter Recipe Name"  style="color:white"><br><br>
                                      <p style="color:white">Recipe Details</p>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" required="1" name="message" id="message" rows="10" placeholder="Enter Recipe Details"></textarea>
        								</div>
        							</div>



                                      <button type="submit" class="btn btn-warning logbtn" name="subrecipe" style="width:50%;" value="subrecipe">Submit Recipe</button>



                           </form>


                      </section>



       </div>


      </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         </div>
       </div>
    </div>



	<!-- end Submit Recipe  -->




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
