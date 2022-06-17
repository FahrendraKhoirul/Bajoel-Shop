<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "bajoel_shop";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
  die("<script>alert('Cannot connect to database.')</script>");
}
