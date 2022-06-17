<?php

include 'koneksi.php';

$IDUSER = $_SESSION['bajoel_shop'];
$query = "SELECT * FROM user INNER JOIN profil ON user.id_profil = profil.id_profil WHERE id_user=" . $IDUSER;
$sql = mysqli_query($conn, $query);

$result = mysqli_fetch_array($sql);


$email = $result['email'];
$password = $result['password'];
$fullname = $result['fullname'];
$foto = $result['foto'];
$jeniskelamin = $result['jeniskelamin'];
$alamat = $result['alamat'];
$telepon = $result['telepon'];
