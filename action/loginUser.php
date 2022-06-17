<?php

include 'koneksi.php';
session_start();
if (isset($_POST['btn-login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['bajoel_shop'] = $row['id_user'];
    header("Location: ../view/home.php");
    echo "lolos";
  } else {
    echo "<script>alert('Email or password invalid. Please try again!')</script>";
  }
}
