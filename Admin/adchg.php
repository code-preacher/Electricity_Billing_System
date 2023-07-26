<?php
  session_start();
    include './include/mysqldb.php';
 
 if (isset($_POST['fb'])) {
    include './include/mysqldb.php';
	  $cem = $_POST['cem'];
	  $nem = $_POST['nem'];
$ps=$_POST['ps'];

 $t=mysqli_query($db,"select * from admin where email='$cem'");
 $x=mysqli_fetch_assoc($t);
 $jp=$x['email'];
 
 if($cem==$jp){
mysqli_query($db,"update admin set email='$nem',passkey='$ps' where email='$jp'");
	 	  echo"<script>
	  alert('Admin Password Changed successfully')
	  window.location='index.php';
	  </script>";
 exit; }
else{	
	 echo"<script>
	  alert('Current Password is Wrong try again')
	  window.location='cpass.php';
	  </script>";
           exit; 
}	
}	   	   
?>