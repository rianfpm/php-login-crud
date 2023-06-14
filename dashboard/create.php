<?php

require_once("config.php");

if (isset($_POST['register'])) {

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $nomor_peserta = $_POST['nomor_peserta'];
    $email = $_POST['email'];

    // buat query
    $sql = "INSERT INTO peserta_training (nama, nomor_peserta, email) 
            VALUE ('$nama', '$nomor_peserta', '$email')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>

<body>
    <div class="center" style="height:fit-content;">

        <h1>Tambah Data</h1>
        <form action="" method="POST">

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" placeholder="Nama kamu" />
            </div>

            <div class="form-group">
                <label for="nomor_peserta">nomor_peserta</label>
                <input class="form-control" type="text" name="nomor_peserta" placeholder="nomor_peserta" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
            </div>


            <div class='d-flex justify-content-center' style="margin:10px">
                <button type="submit" class="btn btn-primary" name="register">Tambah</button>
            </div>

        </form>
        <div class='d-flex justify-content-center' style="margin:10px">
            <a href="index.php">
                <button class="btn btn-warning">Back</button>
            </a>
        </div>
    </div>

</body>

</html>