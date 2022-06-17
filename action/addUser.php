<?php

include 'koneksi.php';

if (isset($_POST['btn-addUser'])) {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $foto = $_POST['foto'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];

  //mencari max id_user
  $query = "SELECT MAX(id_user) AS max FROM user";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_fetch_array($sql);
  $max  = $result['max'] + 1;

  //input ke profil
  $query = "INSERT INTO profil VALUES (" . $max . ", '" . $foto . "', '" . $jeniskelamin . "','" . $alamat . "','" . $telepon . "')";
  mysqli_query($conn, $query);
  //input ke user
  $query = "INSERT INTO user (email, password, fullname, id_profil) VALUES ('" . $email . "','" . $password . "','" . $fullname . "'," . $max . ")";
  mysqli_query($conn, $query);

  $query = "SELECT MAX(id_user) AS max FROM user";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_fetch_array($sql);
  $id_user  = $result['max'];

  //membuat keranjang
  $query = "INSERT INTO keranjang(id_user) VALUES (" . $id_user . ")";
  mysqli_query($conn, $query);

  $query = "SELECT MAX(id_keranjang) AS max FROM keranjang";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_fetch_array($sql);
  $id_keranjang  = $result['max'];

  //membuat itemkeranjang

  $query = "INSERT INTO itemkeranjang(id_keranjang,id_produk,jumlah) VALUES (" . $id_keranjang . ", 'CHO', 0)";
  mysqli_query($conn, $query);

  $query = "INSERT INTO itemkeranjang(id_keranjang,id_produk,jumlah) VALUES (" . $id_keranjang . ", 'PIS', 0)";
  mysqli_query($conn, $query);

  $query = "INSERT INTO itemkeranjang(id_keranjang,id_produk,jumlah) VALUES (" . $id_keranjang . ", 'BAS01', 0)";
  mysqli_query($conn, $query);

  $query = "INSERT INTO itemkeranjang(id_keranjang,id_produk,jumlah) VALUES (" . $id_keranjang . ", 'BAS02', 0)";
  mysqli_query($conn, $query);

  $query = "INSERT INTO itemkeranjang(id_keranjang,id_produk,jumlah) VALUES (" . $id_keranjang . ", 'KRI01', 0)";
  mysqli_query($conn, $query);

  $query = "INSERT INTO itemkeranjang(id_keranjang,id_produk,jumlah) VALUES (" . $id_keranjang . ", 'KRI02', 0)";
  mysqli_query($conn, $query);

  $query = "INSERT INTO itemkeranjang(id_keranjang,id_produk,jumlah) VALUES (" . $id_keranjang . ", 'MAK01', 0)";
  mysqli_query($conn, $query);

  $query = "INSERT INTO itemkeranjang(id_keranjang,id_produk,jumlah) VALUES (" . $id_keranjang . ", 'MAK02', 0)";
  mysqli_query($conn, $query);


  header("Location: ../view/login.php");
}
