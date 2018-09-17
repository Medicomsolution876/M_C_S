   <?php  include 'includes/db.php' ; ?>

  <table width="600" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <th>Symptoms</th>
      <th>Medicine</th>


    </tr>
 
 <?php
 if(isset($_POST['submit_btn'])){
$checkbox1 = $_POST['sysm'] ;                   
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= "'" . $chk1."', ";
      //This is important as it is not the number it is a word so it should have a single quote if in query we are using double quote or vice versa.
   }
$check_e = rtrim($chk,", ");
//Although i havn't checked in real time if mysql query will take last comma or not but it is a good practice to remove the last comma by rtrim.

if(isset($_POST['sysm']) != "") {
$query = "SELECT * FROM MediName WHERE symptoms IN($check_e)";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($result)) {
$symptoms = $row['symptoms'];
$medicineName = $row['mediName'];

    echo 'Your Symptoms ' . $symptoms . ' medicne name'.$medicineName.'is';
    echo '<br>';

}
}
}
?>
     </table>

 