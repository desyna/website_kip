<?php
session_start();
if (empty($_SESSION['no_pendaftaran'])) {
    header("location:../login.php?pesan=belum_login");
}

$query = new mysqli('localhost', 'root', '', 'kip');
$result = mysqli_query($query, "SELECT * FROM user");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Indonesia Pintar Kuliah</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://kip-kuliah.kemdikbud.go.id/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</head>

<body>
    <nav class="navbar nav-brand">
        <div class="container-fluid p-2 px-3">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <span class="ms-3 navbar-brand mb-0 h1 nav-brand-text">
                    COFFEE
                    <span class="text-block-custom">
                        Shop
                    </span>
                </span>
            </a>
            <a class="nav-link nav-text nav-custom" href="logout.php">
                <iconify-icon icon="heroicons-solid:logout" width="18"></iconify-icon> Logout
            </a>

        </div>
    </nav>
    <div class="main">
        <div class="container bg-light p-5">
            <h2>Daftar Barang</h2>
            <table>

                <tr>
                    <th>No.</th>
                    <th></th>
                    <th></th>
                    <th>Id Barang</th>
                    <th>Nama</th>
                    <th>Qty</th>
                </tr>

                <?php $i = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="form_edit.php?id barang= <?= $row['id_barang']; ?>">
                                <iconify-icon icon="eva:edit-fill" width="24"></iconify-icon>
                            </a>
                        </td>
                        <td>
                            <a href="hapus.php?id barang= <?= $row['id_barang']; ?>">
                                <iconify-icon icon="fluent:delete-16-filled" width="24"></iconify-icon>
                            </a>
                        </td>
                        <td><?= $row["id_barang"]; ?></td>
                        <td><?= $row["nama_barang"]; ?></td>
                        <td><?= $row["Qty"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>

            </table>
            <br>
            <a style="display: flex; gap: 0.5rem;" href="form.php">
                <iconify-icon icon="fluent:add-12-filled" width="24"></iconify-icon> Tambah data baru
            </a>
        </div>
    </div>

</body>

</html>