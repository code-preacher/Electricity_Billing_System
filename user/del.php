<?php 
 include './include/mysqldb.php';
 if(isset($_POST['uest'])) {
$name= $_POST['name'];         
mysqli_query($db,"delete from student where sName='$name'");
mysqli_query($db,"delete from user where fullName='$name'");
 echo "<script>
          alert('student deleted successfully!');
          window.location.href='delete.php';
        </script>";
	
} 
else if(isset($_POST['dest'])) {
$dtt= $_POST['dep'];         
mysqli_query($db,"delete from full_data where descpt='$dtt'");
 echo "<script>
          alert('Lecture hall data deleted successfully!');
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