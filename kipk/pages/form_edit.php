<html>

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
    <?php
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:../index.php?pesan=belum_login");
    }
    $mysqli = new mysqli('localhost', 'root', '', 'coffeeshop');

    $id_barang = $_GET['id_barang'];
    $query = mysqli_query($mysqli, "SELECT * from barang where id_barang=$id_barang");
    $data = mysqli_fetch_array($query);

    ?>
    <div class="main-container main">
        <div class="container-custom">
            <h3 class="mb-3 h-custom">Edit Barang</h3>

            <form method="POST" action="update.php">
                <div class="mb-3">
                    <input type="hidden" name="id_barang" value="<?= $data['id_barang']; ?>">

                </div>
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama : </label>
                    <div class="form-custom">
                        <input type="text" name="nama_barang" value="<?= $data['nama_barang']; ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Qty" class=" form-label">Qty : </label>
                    <div class=" form-custom">
                        <input type="number" name="qty" placeholder="Qty" value="<?= $data['Qty']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>