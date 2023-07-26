<?php session_start(); ?>
<?php 
  include 'connect.php';
  if(isset($_POST['sb'])){
	$n=$_POST['nm'];
	$p=$_POST['ps'];  
	
$rp=mysqli_query($db,"select * from admin where email='$n' and passkey='$p'");
	$rpp=mysqli_num_rows($rp);
if($rpp>0){
$_SESSION['admin'] = true;
header('location:Admin/index.php');
exit();	
}
	$r=mysqli_query($db,"select * from user_data where email='$n' and passkey='$p'");
	$rr=mysqli_num_rows($r);
if($rr>0){
$_SESSION['admin'] = true;
$_SESSION['user']=$n;
header('location:user/index.php');
exit();	
}
else{
	
	echo"
	<script>
	alert('INVALID DETAILS')
	window.location='index.html';
	</script>
	";
	
}
	
	
  }
  
  
  
  
  
  ?>