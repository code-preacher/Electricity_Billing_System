<?php session_start(); ?>
<?php 
$id=$_GET['id'];
  include './include/mysqldb.php'; 
$ret=mysqli_query($db,"SELECT * FROM user where id='$id'");
$row=mysqli_fetch_assoc($ret);

 $id=$row[id];
mysqli_query($db,"delete FROM user where id='$id'");

 header("location:view-user.php");

?>