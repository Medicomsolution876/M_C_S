<?php
  include '../includes/db.php' ;

  ?>
<html>
<body>
<form  action="signin_foredit.php" method="post">
EMAIL
<input type="text"/>
PASSWORD
<input type="password"/>
<input type="submit" value="submit"/>
</form>
</body>

</html>
<?php
   if(isset($_POST['login_btn'])){
     $email = $_POST['email'];
     $password = $_POST['password'];

     $query = " SELECT * FROM doctor_reg WHERE email= '$email' AND password='$password' " ;
       $result = mysqli_query($connection,$query);
       if($result->num_rows){
       echo "matched";
       header("location:admin_section/doc_Panel.php");
   }
      else{
             echo"<script>alert('username and password incorrect ');</script>" ;
  }
   }

 ?>
