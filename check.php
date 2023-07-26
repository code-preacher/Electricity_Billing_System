<?php session_start(); ?>
<?php 
  include 'connect.php';
  if(isset($_POST['sb'])){
	$rg=$_POST['rg'];
	$no=$_POST['no'];  
	
$q=mysqli_query($db,"select mobile from user_no where mobile='$no'");
$v=mysqli_query($db,"select digit from card where digit='$rg'");
$vx=mysqli_query($db,"select digit from card where digit='$rg' and status='used'");
$u=mysqli_query($db,"select digit,amount from card where digit='$rg' and status='not used'");
$z=mysqli_query($db,"select bal from balance where mobile='$no'");


if(mysqli_num_rows($q)==0){
	echo"<script>
	  alert('Invalid Number, Please Obtain a Valid Number from the nearest Store')
	  window.location='index.html';
	  </script>";
           exit;	
}
else if(mysqli_num_rows($v)==0){
	echo"<script>
	  alert('Invalid Recharge Card')
	  window.location='index.html';
	  </script>";   exit;	
}
else if(mysqli_num_rows($vx)>0){
	echo"<script>
	  alert(' Recharge Card has already been Used')
	  window.location='index.html';
	  </script>";   exit;	
}
else if(mysqli_num_rows($u)>0){	 
$ux=mysqli_fetch_assoc($u);
$ua=$ux['amount'];
$zx=mysqli_fetch_assoc($z);
$za=$zx['bal'];
$bal=$ua+$za;
 $dat=date("d-m-y @ g:i A");
  
mysqli_query($db,"update balance set bal='$bal' where mobile='$no'");
mysqli_query($db,"update card set status='used' where digit='$rg'");		
    $q = $db->prepare('insert into recharge (mobile,card, amount,balance,date) values (?, ?, ?, ?, ?)');
    $q->bind_param('sssss',$no,$rg,$ua,$bal,$dat);
	    if ($q->execute()) {
      $q->close();
      $db->close();
	 	  echo"<script>
	  alert('Recharge Card Successfully loaded')
	  window.location='index.html';
	  </script>";
           exit;
}}
  else {
    header("Location:./");
    exit;
}}
  ?>