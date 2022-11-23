<?php
$mysqli = new mysqli('localhost', 'root', '', 'coffeeshop');

$nama = $_POST['nama_barang'];
$qty = $_POST['qty'];
$query = mysqli_query($mysqli, "INSERT INTO barang VALUES('','$nama','$qty')") or die(mysqli_error($mysqli));
if ($query) {
    echo "Proses input berhasil, ingin lihat hasil <a href='../login.php'> disini </a>";
} else {
    echo "Proses Input gagal";
}
