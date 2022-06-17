<?php

include 'koneksi.php';

$IDUSER = $_SESSION['bajoel_shop'];
$query = "SELECT user.id_user , keranjang.id_keranjang, itemkeranjang.id_itemkeranjang, itemkeranjang.jumlah,  produk.*
FROM ((user INNER JOIN keranjang ON user.id_user = keranjang.id_user)
   INNER JOIN itemkeranjang ON  keranjang.id_keranjang = itemkeranjang.id_keranjang ) JOIN produk ON itemkeranjang.id_produk = produk.id_produk WHERE user.id_user=$IDUSER";
$sql = mysqli_query($conn, $query);

$result = mysqli_fetch_array($sql);
