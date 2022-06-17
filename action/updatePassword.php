<?php

include 'koneksi.php';

if (isset($_POST['sub-updatepass'])) {

  $curPass = $_POST['current_pass'];
  $newPass = $_POST['new_password'];
}
