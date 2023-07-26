<?php
  session_start();
   include './include/mysqldb.php';
  function random_strings($N, $numbers){
		$s="";
		for($i=0;$i!=$N;$i++)
			$s.=$numbers[mt_rand(0, strlen($numbers)-1)];
		return $s;	
	}	
	$dt=random_strings(12,"0123456789");

  if(isset($_POST['sb'])) {
	  $ag=$_POST['rg'];
$st='not used';
  $q = $db->prepare('insert into card (digit, amount,status) values (?, ?, ?)');
    $q->bind_param('sss',$dt,$ag,$st);
    if ($q->execute()) {
      $q->close();
      $db->close();
	 	  echo"<script>
	  alert('Recharge Card added successfuly')
	  window.location='index.php';
	  </script>";
           exit;
   }}
  
  else {
    header("Location:./");
    exit;
}
?>