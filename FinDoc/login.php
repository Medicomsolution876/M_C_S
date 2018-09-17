
<?php
    require_once "SocialAPI/config.php";

  if (isset($_SESSION['access_token'])) {
    header('Location: index.php');
    exit();
  }

  $loginURL = $gClient->createAuthUrl();
?>
 <?php include "includes/header.php" ; ?>

     <?php 
    
          if(isset($_POST['login_btn'])){

          $email = $_POST['email'];
          $password = $_POST['password'];

          $query = "SELECT * FROM users WHERE email='$email' AND password='$password'  " ;

          $result = mysqli_query($connection,$query);

          if($result->num_rows){
          echo "matched";
          header("location:index.php");
      }
         else{
                echo"<script>alert('username and password incorrect ');</script>" ;
     }
      }



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
        <div id="login-2">
          <h1>Please login to Findoctor!</h1>
          <form action="login.php" method="post">
            <div class="box_form clearfix">
              <div class="box_login">
                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" onclick="window.location= '<?php echo $loginURL ;  ?>' "  class="social_bt google">Login with Google</a>
                <a href="#0"  class="social_bt linkedin">Login with Linkedin</a>
                 <p class="text-center link_bright">Are you a Doctor?<a href="doctorReg.php"><strong>Click here!</strong></a></p>

              </div>
              <div class="box_login last">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Your email address">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Your password">
                  <a href="ForgotPasswordSystem/forgotPassword.php" class="forgot"><small>Forgot password?</small></a>
                </div>
                <div class="form-group">
                  <input class="btn_1" type="submit" name="login_btn">

                </div>
              </div>
            </div>
          </form>
          <p class="text-center link_bright">Do not have an account yet? <a href="userReg.php"><strong>Register now!</strong></a></p>
        </div>
        <!-- /login -->
      </div>
    </div>
  </main>
  <!-- /main -->
  <?php include "includes/footer.php" ;  ?>
  <!--/footer-->
  </div>
  <!-- page -->

  <div id="toTop"></div>
  <!-- Back to top button -->

  <!-- COMMON SCRIPTS -->
  <script data-cfasync="false" src="../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/common_scripts.min.js"></script>
  <script src="js/functions.js"></script>     


</body>


</html>