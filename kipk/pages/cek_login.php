<?php
session_start();
$query = new mysqli('localhost', 'root', '', 'kip');

$no_pendaftaran = $_POST['no_pendaftaran'];
$kode_akses = $_POST['kode_akses'];

$data = mysqli_query($query, "select *from user where no_pendaftaran = '$no_pendaftaran' and kode_akses = '$kode_akses'") or die(mysqli_num_rows($data));

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['no_pendaftaran'] = $no_pendaftaran;
    $_SESSION['status'] = "login";
    header("location:session.php");
} else {
    header("location:../index.php?pesan=gagal");
};
