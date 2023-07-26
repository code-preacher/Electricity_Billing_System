<?php
  session_start();
  include './include/mysqldb.php';
  if (isset($_SESSION['admin'])) {
    header("Location:index.php");
    exit;
  }
  if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = $db->prepare("select id from admin where name = ? and passkey = ?");
    $q->bind_param('ss', $username, $password);
    $q->execute();
    $q->store_result();
    $n = $q->num_rows;
    if ($n > 0) {
      $_SESSION['admin'] = true;
      header("Location:index.php");
      exit;
    }
    else {
      $_SESSION['msg'] = "Invalid username or Password";
      header("Location:../#admin");
    }
  }
  else {
    header("Location:../#admin");
    exit;
  }
?>
