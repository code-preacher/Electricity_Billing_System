<?php
  session_start();
if (isset($_POST['lb'])) {
    include './include/mysqldb.php';
	$ct = $_POST['ct'];
	$ctn = $_POST['ctn'];
	$du=$_POST['du'];
	$dt=date("d-m-y @ g:i A");

	 $a=$_SESSION['user'];
  $q=mysqli_query($db,"select title,name,passkey,mobile,email  from user_data where email='$a'");
 $qw=mysqli_fetch_assoc($q);
 $qt=$qw['mobile'];
 
  $qx=mysqli_query($db,"select * from balance where mobile='$qt'");
 $qp=mysqli_fetch_assoc($qx);
 $xp=$qp['bal'];

  $rx=mysqli_query($db,"select * from user_no where mobile='$qt'");
 $rp=mysqli_fetch_assoc($rx);
 $rl=$rp['plan'];
  
$cs=4;
$fbal=$xp-$cs;

mysqli_query($db,"update balance set bal='$fbal' where mobile='$qt'");	 
 mysqli_query($db,"insert into sms (mobile,contact,contactno,message,charge,ibalance,cbalance,date) values ('$qt','$ct','$ctn','$du','$cs','$xp','$fbal','$dt')");

	 	  echo"<script>
	  alert('Message is sending to $ct ')
	  window.location='r2.php';
	  </script>";
           exit;
  
 }
 
else if (isset($_POST['bb'])) {
    include './include/mysqldb.php';
	$dr = $_POST['dr'];

	$dt=date("d-m-y @ g:i A");

	 $a=$_SESSION['user'];
  $q=mysqli_query($db,"select title,name,passkey,mobile,email  from user_data where email='$a'");
 $qw=mysqli_fetch_assoc($q);
 $qt=$qw['mobile'];
 
  $qx=mysqli_query($db,"select * from balance where mobile='$qt'");
 $qp=mysqli_fetch_assoc($qx);
 $xp=$qp['bal'];

  $rx=mysqli_query($db,"select * from user_no where mobile='$qt'");
 $rp=mysqli_fetch_assoc($rx);
 $rl=$rp['plan'];
  
$cs=1;
$pl=$dr*$cs;
$fbal=$xp-$pl;

mysqli_query($db,"update balance set bal='$fbal' where mobile='$qt'");	 
 mysqli_query($db,"insert into light (mobile,duration,charge,ibalance,cbalance,date) values ('$qt','$dr','$pl','$xp','$fbal','$dt')");

	 	  echo"<script>
	  alert(' You are using prepaid light ')
	  window.location='r3.php?id=$dr';
	  </script>";
           exit;
  
 }
 
 
 
 
  else {
    header("Location:./");
    exit;
}
?>