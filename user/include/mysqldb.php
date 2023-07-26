<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "electricity";

  $db = new mysqli($host, $user, $password, $db);
  if ($db->connect_error != null) {
    echo "Error connecting to database";
    exit;
  }
?>
