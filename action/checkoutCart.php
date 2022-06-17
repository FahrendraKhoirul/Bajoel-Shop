<?php

include 'koneksi.php';

$IDUSER = $_SESSION['bajoel_shop'];
if (isset($_POST['btn-checkout'])) {
  $alamat = $_POST['alamat'];
  $pembayaran = $_POST['pembayaran'];
  echo $alamat;
  echo $pembayaran;

  //membuat pesanan
  $query = "INSERT INTO pesanan(id_user, alamat_pesanan, tanggal_pesanan, metode_pembayaran) VALUES (" . $IDUSER . ",'" . $alamat . "', NOW(), '" . $pembayaran . "')";
  mysqli_query($conn, $query);

  // $query = "SELECT MAX(id_pesanan) AS max FROM pesanan";
  // $sql = mysqli_query($conn, $query);
  // $resultMax = mysqli_fetch_array($sql);
  // $id_pesanan  = $resultMax['max'];

  // //get id_keranjang
  // $queryKeranjang = "SELECT * FROM keranjang WHERE id_user = " . $iduser;
  // $sql = mysqli_query($conn, $queryKeranjang);
  // $r = mysqli_fetch_array($sql);
  // $IDKERANJANG = $r['id_keranjang'];


  // //membuat detailpesanan
  // $query = "SELECT * FROM itemkeranjang WHERE id_keranjang=" . $IDKERANJANG . " AND id_produk='CHO'";
  // $sql = mysqli_query($conn, $query);
  // $result = mysqli_fetch_array($sql);
  // if ($result['jumlah'] > 0) {
  //   $query = "INSERT INTO detailpesanan(id_pesanan,id_produk,jumlah) VALUES (" . $id_pesanan . ", 'CHO', " . $result['jumlah'] . ")";
  //   mysqli_query($conn, $query);
  // }


  // $query = "SELECT * FROM itemkeranjang WHERE id_keranjang=" . $IDKERANJANG . " AND id_produk='PIS'";
  // $sql = mysqli_query($conn, $query);
  // $result = mysqli_fetch_array($sql);
  // if ($result['jumlah'] > 0) {
  //   $query = "INSERT INTO detailpesanan(id_pesanan,id_produk,jumlah) VALUES (" . $id_pesanan . ", 'PIS', " . $result['jumlah'] . ")";
  //   mysqli_query($conn, $query);
  // }

  // $query = "SELECT * FROM itemkeranjang WHERE id_keranjang=" . $IDKERANJANG . " AND id_produk='BAS01'";
  // $sql = mysqli_query($conn, $query);
  // $result = mysqli_fetch_array($sql);
  // if ($result['jumlah'] > 0) {
  //   $query = "INSERT INTO detailpesanan(id_pesanan,id_produk,jumlah) VALUES (" . $id_pesanan . ", 'BAS01', " . $result['jumlah'] . ")";
  //   mysqli_query($conn, $query);
  // }

  // $query = "SELECT * FROM itemkeranjang WHERE id_keranjang=" . $IDKERANJANG . " AND id_produk='BAS02'";
  // $sql = mysqli_query($conn, $query);
  // $result = mysqli_fetch_array($sql);
  // if ($result['jumlah'] > 0) {
  //   $query = "INSERT INTO detailpesanan(id_pesanan,id_produk,jumlah) VALUES (" . $id_pesanan . ", 'BAS02', " . $result['jumlah'] . ")";
  //   mysqli_query($conn, $query);
  // }

  // $query = "SELECT * FROM itemkeranjang WHERE id_keranjang=" . $IDKERANJANG . " AND id_produk='KRI01'";
  // $sql = mysqli_query($conn, $query);
  // $result = mysqli_fetch_array($sql);
  // if ($result['jumlah'] > 0) {
  //   $query = "INSERT INTO detailpesanan(id_pesanan,id_produk,jumlah) VALUES (" . $id_pesanan . ", 'KRI01', " . $result['jumlah'] . ")";
  //   mysqli_query($conn, $query);
  // }


  // $query = "SELECT * FROM itemkeranjang WHERE id_keranjang=" . $IDKERANJANG . " AND id_produk='KRI02'";
  // $sql = mysqli_query($conn, $query);
  // $result = mysqli_fetch_array($sql);
  // if ($result['jumlah'] > 0) {
  //   $query = "INSERT INTO detailpesanan(id_pesanan,id_produk,jumlah) VALUES (" . $id_pesanan . ", 'KRI02', " . $result['jumlah'] . ")";
  //   mysqli_query($conn, $query);
  // }

  // $query = "SELECT * FROM itemkeranjang WHERE id_keranjang=" . $IDKERANJANG . " AND id_produk='MAK01'";
  // $sql = mysqli_query($conn, $query);
  // $result = mysqli_fetch_array($sql);
  // if ($result['jumlah'] > 0) {
  //   $query = "INSERT INTO detailpesanan(id_pesanan,id_produk,jumlah) VALUES (" . $id_pesanan . ", 'MAK01', " . $result['jumlah'] . ")";
  //   mysqli_query($conn, $query);
  // }

  // $query = "SELECT * FROM itemkeranjang WHERE id_keranjang=" . $IDKERANJANG . " AND id_produk='MAK02'";
  // $sql = mysqli_query($conn, $query);
  // $result = mysqli_fetch_array($sql);
  // if ($result['jumlah'] > 0) {
  //   $query = "INSERT INTO detailpesanan(id_pesanan,id_produk,jumlah) VALUES (" . $id_pesanan . ", 'MAK02', " . $result['jumlah'] . ")";
  //   mysqli_query($conn, $query);
  // }
}
