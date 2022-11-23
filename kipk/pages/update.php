<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:../index.php?pesan=belum_login");
}
$mysqli = new mysqli('localhost', 'root', '', 'coffeeshop');

$id_barang = $_POST['id_barang'];
$nama = $_POST['nama_barang'];
$qty = $_POST['qty'];

$query = mysqli_query($mysqli, "UPDATE barang SET nama_barang='$nama', Qty='$qty' where id_barang='$id_barang'")
    or die(mysqli_error($mysqli));
if ($query) {
    echo "Proses update berhasil, ingin lihat hasil
<a href='session.php'> disini </a>";
} else {
    echo "Proses Input gagal";
}
