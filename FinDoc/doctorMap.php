<?php include "includes/header.php";   ?>
	
    <style>
        html,
        body {
            height: 100%;
        }
    </style>

</head>

<body>

	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->
	
	<div id="page">		
	<header class="header_map Fixed">	
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<!-- /btn_mobile-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo">
						<a href="index.php" title="Findoctor"><img src="img/logo.png" data-retina="true" alt="" width="163" height="36"></a>
					</div>
				</div>
				<div class="col-lg-9 col-6">
				
					<nav id="menu" class="main-menu">
						<ul>
							<li>
								<span><a href="index.php">Home</a></span>
								
							</li>
							
							<li>
								<span><a href="#0">Extra Elements</a></span>
								
							</li>
							<li><span><a href="menu_2/index.html">Menu V2</a></span></li>
							<li><span><a href="admin_section/index.html" target="_blank">Admin</a></span></li>
							
						</ul>
					</nav>
					<!-- /main-menu -->
				</div>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-5 content-left">
				<form>
					<div class="search_bar_wrapper">
						<div class="search_bar_list">
							<input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
							<input type="submit" value="Search">
						</div>
					</div>
					<div class="filters_listing map_listing">
						<ul class="clearfix">
							<li>
								<h6>Type</h6>
								<div class="switch-field">
									<input type="radio" id="all" name="type_patient" value="all" checked>
									<label for="all">All</label>
									<input type="radio" id="doctors" name="type_patient" value="doctors">
									<label for="doctors">Doctors</label>
									<input type="radio" id="clinics" name="type_patient" value="clinics">
									<label for="clinics">Clinics</label>
								</div>
							</li>
						<!--	<li>
								<h6>Layout</h6>
								<div class="layout_view">
									<a href="grid-list.html"><i class="icon-th"></i></a>
									<a href="list.html"><i class="icon-th-list"></i></a>
									<a href="#0" class="active"><i class="icon-map-1"></i></a>
								</div>
							</li> -->
							<li>
								<h6>Sort by</h6>
								<select name="orderby" class="selectbox">
								<option value="Closest">Closest</option>
								
								<option value="Men">Men</option>
								<option value="Women">Women</option>
								</select>
							</li>
						</ul>
					</div>
					<!-- /filters -->
				</form>

				<div class="strip_list">
					<a href="#0" class="wish_bt"></a>
					<figure>
						<a href="detail-page.html"><img src="img/doc.png" alt=""></a>
					</figure>
					<small>Orthopedic Surgeon</small>
					<h3>Dr. Deepak Dalmia</h3>
					<p>Dr. Deepak Dalmia Clinic is an Orthopedics Clinic in Jawahar Nagar, Kanpur. The clinic is visited by doctors like Dr. Deepak Dalmia . The timings of Dr. Deepak Dalmia Clinic are: Mon-Sat: 12:00-14:00, 18:00-20:00 and Sun: 12:00-14:00. Some of the services provided by the Clinic are: Pain Management Counseling,Spinal Therapy,Tennis Elbow,Physiotherapy for Sports Injury Rehabilitation and Oesto arthritis etc. Click on map to find directions to reach Dr. Deepak Dalmia Clinic</p>
					<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
					<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
					<ul>
						<li><a href="https://goo.gl/maps/8QKbvJGBKE62" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
						<li><a href="https://www.google.com/maps/dir/26.4645684,80.3162619/Dr.+Deepak+Dalmia,+No.+110%2F19,+80+Feet+Rd,+Near+Niranjan+Guest+House,+Nehru+Nagar,+Nehru+Nagar,+Jawahar+Nagar,+Kanpur,+Uttar+Pradesh+208001/@26.4680968,80.3130912,16z/data=!3m1!4b1!4m16!1m6!3m5!1s0x399c387e2451d32f:0x64007c5773c5932d!2sDr.+Deepak+Dalmia!8m2!3d26.4714851!4d80.32083!4m8!1m1!4e1!1m5!1m1!1s0x399c387e2451d32f:0x64007c5773c5932d!2m2!1d80.32083!2d26.4714851" target="_blank"> Directions</a></li>

					<!--	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14287.28784499768!2d80.3069847671576!3d26.46146728584867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c387e2451d32f%3A0x64007c5773c5932d!2sDr.+Deepak+Dalmia!5e0!3m2!1sen!2sin!4v1534935979486" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

-->
						<li><a href="detail-page.html">Book now</a></li>
					</ul>
				</div>
				<!-- /strip_list -->

				<div class="strip_list">
					<a href="#0" class="wish_bt"></a>
					<figure>
						<a href="detail-page.html"><img src="img/doctor_listing_2.jpg" alt=""></a>
					</figure>
					<small>Pediatrician</small>
					<h3>Dr. Valentine</h3>
					<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
					<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
					<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_2.svg" width="15" height="15" alt=""></a>
					<ul>
						<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">View on Map</a></li>
						<li><a href="https://www.google.com/maps/dir//Assistance+–+Hôpitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+–+Hôpitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
						<li><a href="detail-page.html">Book now</a></li>
					</ul>
				</div>
				<!-- /strip_list -->

				<div class="strip_list">
					<a href="#0" class="wish_bt"></a>
					<figure>
						<a href="detail-page.html"><img src="img/doctor_listing_3.jpg" alt=""></a>
					</figure>
					<small>Pediatrician</small>
					<h3>Dr. Bonebrake</h3>
					<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
					<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
					<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_3.svg" width="15" height="15" alt=""></a>
					<ul>
						<li><a href="#0" onclick="onHtmlClick('Doctors', 2)" class="btn_listing">View on Map</a></li>
						<li><a href="https://www.google.com/maps/dir//Assistance+–+Hôpitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+–+Hôpitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
						<li><a href="detail-page.html">Book now</a></li>
					</ul>
				</div>
				<!-- /strip_list -->

				<div class="strip_list">
					<a href="#0" class="wish_bt"></a>
					<figure>
						<a href="detail-page.html"><img src="img/doctor_listing_4.jpg" alt=""></a>
					</figure>
					<small>Psicologist</small>
					<h3>Dr. Everhart</h3>
					<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
					<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
					<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_4.svg" width="15" height="15" alt=""></a>
					<ul>
						<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">View on Map</a></li>
						<li><a href="https://www.google.com/maps/dir//Assistance+–+Hôpitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+–+Hôpitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
						<li><a href="detail-page.html">Book now</a></li>
					</ul>
				</div>
				<!-- /strip_list_map -->
				
				<p class="text-center add_top_30"><a href="#0"><strong>Load more</strong></a></p>
			</div>
			<!-- /content-left-->

			<div class="col-lg-7 map-right Fixed">
				<div id="map_listing"></div>
				<!-- map-->
			</div>
			<!-- /map-right-->
			
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->
	</div>
	<!-- page -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="assets/validate.js"></script>
	<script src="js/functions.js"></script>
    
    <!-- SPECIFIC SCRIPTS -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCoz993id_Qq7AcfaoVzviC6swgvQRixuQ"></script>
    <script src="js/map_listing.js"></script>
    <script src="js/infobox.js"></script> 
    <script src="js/jquery.selectbox-0.2.js"></script>
	<script>
		$(".selectbox").selectbox();
	</script>


</body>

</html>


