 <?php include 'includes/header.php' ;  ?>
	
	<!-- SPECIFIC CSS -->
	<link href="css/tables.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
<!--	<link href="css/custom.css" rel="stylesheet"> -->
	
	<!-- Modernizr -->
	<script src="js/modernizr_tables.js"></script>
	


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
						<a href="index-2.html" title="Findoctor"><img src="img/logo.png" data-retina="true" alt="" width="163" height="36"></a>
					</div>
				</div>
				<div class="col-lg-9 col-6">
					<ul id="top_access">
						<li><a href="login.html"><i class="pe-7s-user"></i></a></li>
						<li><a href="register-doctor.html"><i class="pe-7s-add-user"></i></a></li>
					</ul>
					<nav id="menu" class="main-menu">
						<ul>
							<li>
								<span><a href="#0">Home</a></span>
								<ul>
									<li><a href="index-2.html">Home Default</a></li>
									<li><a href="index-3.html">Home Version 2</a></li>
									<li><a href="index-4.html">Home Version 3</a></li>
									<li><a href="index-5.html">Home Version 4</a></li>
                                    <li><a href="index-6.html">Revolution Slider</a></li>
									<li><a href="index-7.html">With Cookie Bar (EU law)</a></li>
								</ul>
							</li>
							<li>
								<span><a href="#0">Pages</a></span>
								<ul>
									<li><a href="list.html">List page</a></li>
									<li><a href="grid-list.html">List grid page</a></li>
									<li><a href="list-map.html">List map page</a></li>
									<li><a href="detail-page.html">Detail page</a></li>
									<li><a href="detail-page-2.html">Detail page 2</a></li>
                                    <li><a href="detail-page-3.html">Detail page 3</a></li>
									<li><a href="blog-1.html">Blog</a></li>
									<li><a href="badges.html">Badges</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="login-2.html">Login 2</a></li>
									<li><a href="register-doctor.html">Register Doctor</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="contacts.html">Contacts</a></li>
								</ul>
							</li>
							<li>
								<span><a href="#0">Extra Elements</a></span>
								<ul>
                                	<li><a href="detail-page-working-booking.html">Detail working booking</a></li>
                                    <li><a href="booking-page.html">Booking page</a></li>
                                    <li><a href="confirm.html">Confirm page</a></li>
                                	<li><a href="faq.html">Faq page</a></li>
                                    <li><a href="coming_soon/index.html">Coming soon</a></li>
                                     <li><a href="pricing-tables.html">Responsive pricing tables</a></li>
                                     <li><a href="pricing-tables-2.html">Responsive pricing tables 2</a></li>
                                     <li><a href="register-doctor-working.html">Working doctor register</a></li>
									<li><a href="icon-pack-1.html">Icon pack 1</a></li>
									<li><a href="icon-pack-2.html">Icon pack 2</a></li>
									<li><a href="icon-pack-3.html">Icon pack 3</a></li>
									<li><a href="404.html">404 page</a></li>
								</ul>
							</li>
							<li><span><a href="menu_2/index.html">Menu V2</a></span></li>
							<li><span><a href="admin_section/index.html" target="_blank">Admin</a></span></li>
							<li><span><a href="https://themeforest.net/item/findoctor-doctors-directory-and-book-online-template/20876478?ref=ansonika">Buy this template</a></span></li>
						</ul>
					</nav>
					<!-- /main-menu -->
				</div>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->
	
    <main>
	<div id="breadcrumb">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Category</a></li>
				<li>Page active</li>
			</ul>
		</div>
	</div>
	<!-- /breadcrumb -->
	<div class="margin_60_35">
		<div class="container">
			<div class="main_title">
				<h1>Log</h1>
				<p>Choose According To Your Need</p>
			</div>
		</div>
		
		<div class="pricing-container cd-has-margins">
		<div class="pricing-switcher">
			<p class="fieldset">
				<input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
				<label for="monthly-2">Doctor</label>
				<input type="radio" name="duration-2" value="yearly" id="yearly-2" > 
				<label for="yearly-2" >Medicine</label>
				<span class="switch" ></span>


			</p>

		
	
		<!-- /pricing-list -->
	</div>
	<!-- /pricing-container -->	
	</div>
	<!-- /margin_60_35 -->
	<div class="pricing-container cd-has-margins">
    <div class="pricing-switcher">
      <p class="fieldset">
        <form action="sys.php" method="post">
            <button type="submit" class="btn btn-dark btn-sm " name="d_btn" >D</button>   
          
              <button type="submit" class="btn btn-dark btn-sm " name="m_btn" >M</button>
        </form>
             
      </p>
  
      </div>
   </div>
  
	
	 <?php
		       /*   if(isset($_POST['m_btn'])){
             	$symptoms = $_POST['symptoms'];
             	$mediname = $_POST['mediName'];

             	$query = " SELECT * FROM MediName"; 

             	/* $result = mysqli_query($connection,$query);

                      while($row=mysqli_fetch_assoc($result)){
                       $symptoms= $row['symptoms'];
                       $mediname= $row['mediName'];

                         echo "<tr>";
                       echo "<td>$symptoms</td> " ;
                       echo "<td>$mediname </td> ";

 
 }  

 }    */
   ?>





   
	<!-- /container -->
    </main>
    <!-- /main -->
	

   <?php include 'includes/footer.php' ;   ?>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/tables_func.js"></script>
