<?php

include 'koneksi.php';

$IDUSER = $_SESSION['bajoel_shop'];
//$id_user = $_SESSION['login'];
$query = "SELECT user.id_user , pesanan.*, detailpesanan.*, produk.nama_produk
FROM ((user JOIN pesanan ON user.id_user = pesanan.id_user)
  JOIN detailpesanan ON detailpesanan.id_pesanan = pesanan.id_pesanan) JOIN produk ON detailpesanan.id_produk = produk.id_produk WHERE user.id_user =" . $IDUSER;

$sql = mysqli_query($conn, $query);
