<?php
  session_start();
   function random_strings($N, $numbers){
		$s="";
		for($i=0;$i!=$N;$i++)
			$s.=$numbers[mt_rand(0, strlen($numbers)-1)];
		return $s;	
	}	
	$dt=random_strings(10,"012345678999");

if (isset($_POST['sb'])) {
    include './include/mysqldb.php';
$pn=$_POST['pn'];
$l=$dt;
    $q = $db->prepare('insert into user_no (mobile,plan) values (?, ?)');
    $q->bind_param('ss',$l,$pn);
    if ($q->execute()) {
      $q->close();
      $db->close();
	 	  echo"<script>
	  alert('Meter Number was generated successfully')
	  window.location='index.php';
	  </script>";
           exit; }}
 else if (isset($_POST['sbb'])) {
    include './include/mysqldb.php';
	  $phh = $_POST['phh'];
$pnn=$_POST['pnn'];
mysqli_query($db,"update user_no set plan='$pnn' where mobile='$phh'");
	 	  echo"<script>
	  alert('Customer Tariff Changed successfully')
	  window.location='index.php';
	  </script>";
           exit; }		   
  else {
    header("Location:./");
    exit;
}
?>