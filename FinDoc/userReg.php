
		<?php include "includes/header.php" ; ?>
<?php   
       $msg = "";


		                                          
  if(isset($_POST['submit_btn'])){
       $firstName = $_POST['firstName'];
       $lastName  = $_POST['lastName'];
       $email     = $_POST['email'];
       $password  = $_POST['password'];
       $cpassword = $_POST['cpassword'];
/*
    $firstName=  Test_User_Input($_POST['firstName']);
    $lastName =  Test_User_Input($_POST['lastName']);
    $email  =  Test_User_Input($_POST['email']);   */
    
/*if((!preg_match("/^[a-zA-Z ]*$/",$firstName))&& (!preg_match("/^[a-zA-Z ]*$/",$lastName))&&(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-z0-9._-]{3,}[.]{1}[a-zA-z0-9._-]{2,}/", $email))){


	$msg = "check inputs"; 
}  */
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)){
    	$msg =  "Only letters and white-spaces are allowed";
    } elseif (!preg_match("/^[a-zA-Z ]*$/",$lastName)&&(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^/", $email))) {
    	

    	$msg =  "Only letters and white-spaces are allowed";

    }
        
       
       

       
	else  {

		      $query = "SELECT id FROM users WHERE email='$email'" ; 
             		$result = mysqli_query($connection,$query);
             		if ($result->num_rows > 0) {
                    $msg = "Email already exists in the database!";

	          }    else
                   {
     	            $query = "INSERT INTO users  VALUES ( '' ,'$firstName' , '$lastName' , '$email' , '$password' ) ";

                      $result = mysqli_query($connection,$query);
                       


                     	}


                
	
} 




   }
  /*
                                                              function Test_User_Input($data) {
															  $data = trim($data);
															  $data = stripslashes($data);
															  $data = htmlspecialchars($data);
															  return $data;
															}
*/


                

		                                              /*   $query = "INSERT INTO users  VALUES ( '' ,'$firstName' , '$lastName' , '$email' , '$password' ) ";

		                                                 $result = mysqli_query($connection,$query);

		                                                 if(!$result){
		                                                 	die("failed".mysqli_error($connection));
		                                                 } else {
		                                                 	 exit(header("Location:login.php")) ;
		                                                 } */

		                                             


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
						<a href="index-2.html" title="Findoctor"><img src="img/medi.jpg" data-retina="true" alt="" width="163" height="36"></a>
					</div>
				</div>
				<div class="col-lg-9 col-6">
					<ul id="top_access">
						<li><a href="login.php"><i class="pe-7s-user"></i></a></li>
						<li><a href="register-doctor.html"><i class="pe-7s-add-user"></i></a></li>
					</ul>
					<nav id="menu" class="main-menu">
						
					</nav>
					<!-- /main-menu -->
				</div>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->
	
	<main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="register">
					<h1>Please register to Findoctor!</h1>
					<div class="row justify-content-center">
						<div class="col-md-5">

						<?php if($msg !="") echo $msg."<br><br>";  ?>
							<form action="userReg.php" method="post">
								<div class="box_form">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="firstName" class="form-control" placeholder="Your name" required />

                                  	</div>
									<div class="form-group">
										<label>Last name</label>
										<input type="text" name="lastName" class="form-control" placeholder="Your last name" required />
										 
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" placeholder="Your email address" required type="email" / >
										
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control" id="password1" placeholder="Your password" required / >
									</div>
									<div class="form-group">
										<label>Confirm password</label>
										<input type="password"  name="cpassword" class="form-control" id="password2" placeholder="Confirm password" required />
									</div>
									<div id="pass-info" class="clearfix"></div>
								<div class="checkbox-holder text-left">
										<div class="checkbox_2">
											<input type="checkbox" value="accept_2" id="check_2" name="submit_btn" checked> 
											<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
										</div>
									</div>
									<div class="form-group text-center add_top_30">
										<input class="btn_1" type="submit"  name="submit_btn">
									</div>

								</div>
								<p class="text-center"><small>  </small></p>
							</form>

						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /register -->
			</div>
		</div>
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
	<script src="js/pw_strenght.js"></script>
</body>


</html>





