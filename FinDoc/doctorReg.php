<?php include "includes/header.php" ; ?>

                        <?php 

                        $msg = "";
                                     

                                     if(isset($_POST['submit_btn'])){

                                        $name=  $_POST['name_register'];
                                     	$lastname_register=$_POST['lastname_register'];
                                     	$specialization=$_POST['specialization'];
                                     	$city_register=$_POST['city_register'];
                                     	$country_register=$_POST['country_register'];
                                     	$address_register=$_POST['address_register'];
                                     	$pin_register=$_POST['pin_register'];
                                     	$office_phone_register=$_POST['office_phone_register'];
                                     	$email_register=$_POST['email_register'];



          if (!preg_match("/^[a-zA-Z ]*$/",$name) ) {
    	$msg =  "Only letters and white-spaces are allowed";

    } if(!preg_match("/^[a-zA-Z ]*$/",$lastname_register))
    {
    	$msg =  "Only letters and white-spaces are allowed";
    }

     if(!preg_match("/^[a-zA-Z0-9._-]{3,}@[a-zA-z0-9._-]{3,}[.]{1}[a-zA-z0-9._-]{2,}^/", $email_register)){
     	$msg = "only valid email";
     }

		      $query =  "SELECT id FROM doctor_reg WHERE email_register ='$email_register' " ;  
             		$result = mysqli_query($connection,$query);
             		if ($result->num_rows > 0) {
                    $msg = "Email already exists in the database!";

	          }    else
                   {
     	            $query = "INSERT INTO doctor_reg VALUES ('', '$name','$lastname_register','$specialization','$city_register','$country_register','$address_register','$pin_register','$office_phone_register','$email_register') " ;

                                      $result = mysqli_query($connection,$query);

                                       if(!$result){
                                       	die("connection failed".mysqli_error($connection));
                                       }
                                       else {
                                       	   
                                       	     header("Location:login.php");
                                       }

	                                      } 
                       
} 

                                       /*
                                       	 $query = "SELECT id FROM doctor_reg WHERE email_register='$email_register' " ; 
             		                     $result = mysqli_query($connection,$query);
             		                     if ($result->num_rows > 0) {
                                         $msg = "Email already exists in the database!";
                                       }
                                   
                                     }
                                         else {

                                      	$query = "INSERT INTO doctor_reg VALUES ('', '$name','$lastname_register','$specialization','$city_register','$country_register','$address_register','$pin_register','$office_phone_register','$email_register') ";

                                      $result = mysqli_query($connection,$query);

                                       if(!$result){
                                       	die("connection failed".mysqli_error($connection));
                                       }
                                       else {
                                       	   
                                       	     header("Location:login.php");
                                       }

	                                      }   */

                        ?> 

	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->
	
	<div id="page">		
	<header class="header_sticky">	
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<!-- /btn_mobile-->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo">
						<a href="index.php" title="Findoctor"><img src="img/medi.jpg" data-retina="true" alt="" width="163" height="36"></a>
					</div>
				</div>
				<div class="col-lg-9 col-6">
					<ul id="top_access">
						<li><a href="login.php"><i class="pe-7s-user"></i></a></li>
						<li><a href="register-doctor.html"><i class="pe-7s-add-user"></i></a></li>
					</ul>
					<nav id="menu" class="main-menu">
						S
					</nav>
					<!-- /main-menu -->
				</div>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->
	
	<main>
		<div id="hero_register">
			<div class="container margin_120_95">			
				<div class="row">
					<div class="col-lg-6">
						<h1>It's time to find you!</h1>
						<p class="lead">We allow you to register with us!Just put in a few necessary details and get started. Let the patients find you and book their appointments.</p>
						<div class="box_feat_2">
							<i class="pe-7s-map-2"></i>
							<h3>Let patients to Find you!</h3>
							<p>We allow the patients to locate you on the <strong>Google Maps </strong>  to book the appointment.</p>
						</div>
						
						
					</div>
					<!-- /col -->
					<div class="col-lg-5 ml-auto">
						<div class="box_form">
							<div id="message-register"></div>
							<?php if($msg !="") echo $msg."<br><br>";  ?>
							<form method="post" action=" ">
								<div class="row">
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name" name="name_register" required />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Last Name" name="lastname_register" required />
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Specialization" name="specialization" required />
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="City" name="city_register" required / >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control" name="country_register" >
												<option value="">Country</option>
												<option value="Europe">Europe</option>
												<option value="India">India</option>
												<option value="Unated States">Unated States</option>
											</select>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Address" name="address_register" required />
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Pincode" name="pin_register" required />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="tel" class="form-control" placeholder="Office Phone" name="office_phone_register" required />
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Address" name="email_register" >
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" id="verify_register" class="form-control" placeholder="Human verify: 3 + 1 =?" required />
										</div>
									</div>
								</div>
								<!-- /row -->
								<div><input type="submit" class="btn_1" value="Submit"  name="submit_btn"></div>
							</form>
                         




						</div>
						<!-- /box_form -->
					</div>
					<!-- /col -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /hero_register -->
	</main>
	<!-- /main -->
	 <?php  include "includes/footer.php" ;  ?>
	<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="assets/validate.js"></script>

</body>
</html>