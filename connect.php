<?php
$db = new mysqli("localhost", "root", "", "electricity");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
