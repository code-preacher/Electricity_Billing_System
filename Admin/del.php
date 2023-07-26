<?php 
 include './include/mysqldb.php';
 if(isset($_POST['dest'])) {
$mob= $_POST['no'];         
mysqli_query($db,"delete from user_data where mobile='$mob'");
mysqli_query($db,"delete from user_no where mobile='$mob'");
mysqli_query($db,"delete from balance where mobile='$mob'");
mysqli_query($db,"delete from history where mobile='$mob'");
mysqli_query($db,"delete from recharge where mobile='$mob'");
 echo "<script>
          alert('Customer deleted successfully!');
          window.location.href='delete.php';
        </script>";
	
}  
else if(isset($_POST['cest'])) {
$mop= $_POST['no'];         
mysqli_query($db,"delete from card where digit='$mop'");

 echo "<script>
          alert('Recharge Card deleted successfully!');
          window.location.href='delete.php';
        </script>";
	
}

else{
 echo "<script>
          alert('Requested is not valid');
          window.location.href='delete.php';
        </script>";
	
	}
?>