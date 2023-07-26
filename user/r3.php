<?php session_start(); ?>
<?php 
  include './include/mysqldb.php';
  ?>
<html>
<body>
<center>Light is currently in use: <span style="color:red;font-size:20px;" id="countdown" class="timer"></span></center>
<script> 
var seconds = <?=$_GET['id']?>; 
function secondPassed() 
{ 
    var minutes = Math.round((seconds - 30)/60); 
var remainingSeconds = seconds % 60; 
if (remainingSeconds < 10) 
{ 
    remainingSeconds = "0" + remainingSeconds; 
}
document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds; 
if (seconds == 0) { 
    clearInterval(countdownTimer);
window.location = "index.php"; 
}
 else 
 { 
     seconds--;
}
} 
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
	<center><img src="images/s3.gif" width="95%"></center>
	
	</body>
</html>