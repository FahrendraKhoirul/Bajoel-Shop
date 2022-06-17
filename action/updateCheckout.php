<?php
session_start();
$IDUSER = $_SESSION['bajoel_shop'];
include 'koneksi.php';
include 'getUserdata.php';
if (isset($_POST['btn-updateKeranjang'])) {
  $qtyBas01 = $_POST['BAS01'];
  $qtyBas02 = $_POST['BAS02'];
  $qtyKri01 = $_POST['KRI01'];
  $qtyKri02 = $_POST['KRI02'];
  $qtyMak01 = $_POST['MAK01'];
  $qtyMak02 = $_POST['MAK02'];
  $qtyPis = $_POST['PIS'];
  //$qtyCho = $_POST['CHO'];

  $iduser = $IDUSER;

  $queryKeranjang = "SELECT * FROM keranjang WHERE id_user = " . $iduser;
  $sql = mysqli_query($conn, $queryKeranjang);
  $r = mysqli_fetch_array($sql);
  $IDKERANJANG = $r['id_keranjang'];



  //$queryCho = "UPDATE itemkeranjang SET jumlah=" . $qtyCho . " WHERE id_itemkeranjang=" . $iduser . " AND id_produk='CHO' AND id_keranjang=" . $iduser;
  $queryBas01 =  "UPDATE itemkeranjang SET jumlah=" . $qtyBas01 . " WHERE id_produk='BAS01' AND id_keranjang=" . $IDKERANJANG;
  $queryBas02 =  "UPDATE itemkeranjang SET jumlah=" . $qtyBas02 . " WHERE id_produk='BAS02' AND id_keranjang=" . $IDKERANJANG;
  $queryKri01 =  "UPDATE itemkeranjang SET jumlah=" . $qtyKri01 . " WHERE id_produk='KRI01' AND id_keranjang=" . $IDKERANJANG;
  $queryKri02 =  "UPDATE itemkeranjang SET jumlah=" . $qtyKri02 . " WHERE id_produk='KRI02' AND id_keranjang=" . $IDKERANJANG;
  $queryMak01 =  "UPDATE itemkeranjang SET jumlah=" . $qtyMak01 . " WHERE id_produk='MAK01' AND id_keranjang=" . $IDKERANJANG;
  $queryMak02 =  "UPDATE itemkeranjang SET jumlah=" . $qtyMak02 . " WHERE id_produk='MAK02' AND id_keranjang=" . $IDKERANJANG;
  $queryPis =  "UPDATE itemkeranjang SET jumlah=" . $qtyPis . " WHERE id_produk='PIS' AND id_keranjang=" . $IDKERANJANG;

  // $sql = mysqli_query($conn, $queryCho);
  $sql = mysqli_query($conn, $queryBas01);
  $sql = mysqli_query($conn, $queryBas02);
  $sql = mysqli_query($conn, $queryKri01);
  $sql = mysqli_query($conn, $queryKri02);
  $sql = mysqli_query($conn, $queryMak01);
  $sql = mysqli_query($conn, $queryMak02);
  $sql = mysqli_query($conn, $queryPis);

  header("Location: ../view/checkout.php");
}
