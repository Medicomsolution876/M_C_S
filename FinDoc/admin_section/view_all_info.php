  <?php  include '../includes/db.php' ; ?>
<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
 .modal-header, h4, .close {
     background-color: #5cb85c;
     color:white !important;
     text-align: center;
     font-size: 30px;
 }
 .modal-footer {
     background-color: #f9f9f9;
 }
 </style>

  <title>FINDOCTOR - Admin dashboard</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="vendor/dropzone.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="css/admin.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="css/admin.css" rel="stylesheet">


</head>

<body class="fixed-nav sticky-footer" id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="../loginDoc.php"><img src="img/logo.png" data-retina="true" alt="" width="163" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>




        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProfile" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">My profile</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseProfile">
            <li>
              <a href="user-profile.html">User profile</a>
            </li>
			<li>
              <a href="doctor-profile.html">Doctor profile</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add listing</li>
      </ol>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Basic info</h2>
			</div>
			      <table class="table table-bordered table-hover">
			      	<thead>
			      		<tr>
			      			<td>Id</td>
			      			<td>Name</td>
			      			<td>LastName</td>
			      			<td>Email</td>
			      			<td>Specialization</td>
			      			<td>Address</td>
			      			<td>City</td>
			      			<td>Zipcode</td>
			      			<td>Phone Number</td>
			      			<td>Country</td>
			      		</tr>
			      	</thead>

			        <tbody>
			  <?php
                     $query = "SELECT * FROM doctor_reg ";
                     $view_all_info = mysqli_query($connection,$query);
                     while($row=mysqli_fetch_assoc($view_all_info)){

                          $id = $row['id'];
                          $firstName = $row['name_register'];
                          $LastName = $row['lastname_register'];
                          $email = $row['email'];
                          $Specialization=$row['specialization'];
                          $city=$row['city_register'];
                          $Country=$row['country_register'];
                          $Address=$row['address_register'];
                          $Zipcode=$row['pin_register'];
                          $phone= $row['office_phone_register'];


                        echo "<tr>";
                          echo "<td>$id</td>";
                          echo "<td>$firstName</td>";
                          echo "<td>$LastName</td>";
                          echo "<td>$email</td>";
                          echo "<td>$Specialization</td>";
                          echo "<td>$Address</td>";
                          echo "<td>$city</td>";
                          echo "<td>$Zipcode</td>";
                          echo "<td>$phone</td>";
                          echo "<td>$Country</td>";
                          echo "<td> <div class='container'>
  
  <!-- Trigger the modal with a button -->
  <button type='button' class='btn btn-default btn-l' id='myBtn'>Login</button>

  <!-- Modal -->
  <div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>

      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 style='color:red;'><span class='glyphicon glyphicon-lock'></span> Login</h4>
        </div>
        <div class='modal-body'>
          <form role='form'>
            <div class='form-group'>
              <label for='usrname'><span class='glyphicon glyphicon-user'></span> Username</label>
              <input type='text' class='form-control' id='usrname' placeholder='Enter email'>
            </div>
            <div class='form-group'>
              <label for='psw'><span class='glyphicon glyphicon-eye-open'></span> Password</label>
              <input type='text' class='form-control' id='psw' placeholder='Enter password'>
            </div>
            <div class='checkbox'>
              <label><input type='checkbox' value='' checked>Remember me</label>
            </div>
            <button type='submit' class='btn btn-default btn-success btn-block'><span class='glyphicon glyphicon-off'></span> Login</button>
          </form>
        </div>
        <div class='modal-footer'>
          <button type='submit' class='btn btn-default btn-default pull-left' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span> Cancel</button>
          <p>Not a member? <a href='#'>Sign Up</a></p>
          <p>Forgot <a href='#'#'>Password?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('#myBtn').click(function(){
        $('#myModal').modal();
    });
});
</script>
 </td>";
                          echo "</tr>"
                          ;

                     }

                      if(isset($_GET['edit'])){
                      	$edit= $_GET['edit'];
                      	$query = "UPDATE doctor_reg WHERE id='$id' ";
                      	$result = mysqli_query($connection,$query);
                      	if(!$result){
                      		die("Failed".mysqli_error($connection));
                      	}else {
                      		echo "<h1>YESS</h1>";
                      	}

                      }

			   ?>

			   </tbody>

              </table>






			<!-- /row-->
		</div>
		<!-- /box_general-->




		<!-- /box_general-->
		<p><a href="#0" class="btn_1 medium">Save</a></p>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © MediCom 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../loginDoc.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="vendor/jquery.selectbox-0.2.js"></script>
	<script src="vendor/retina-replace.min.js"></script>
	<script src="vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
	<!-- Custom scripts for this page-->
	<script src="vendor/dropzone.min.js"></script>
 <script src="js/modal.js"></script>
</body>

<!-- Mirrored from www.ansonika.com/findoctor/admin_section/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 14:43:54 GMT -->
</html>
