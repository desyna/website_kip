<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:../index.php?pesan=belum_login");
}
$mysqli = new mysqli('localhost', 'root', '', 'coffeeshop');

$id_barang = $_GET['id_barang'];
$query = mysqli_query($mysqli, "DELETE FROM barang where
id_barang = $id_barang");
if ($query) {
    echo "Proses hapus berhasil, lihat data
<a href='session.php'> disini </a>";
} else {
    echo "Proses hapus gagal";
}
