<?php   
require 'functions.php';
$mobil = query("SELECT * FROM mobil");
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS-->
    <link rel="stylesheet" href="style.css" />

    <title>Rental Mobil</title>

    <style>
        h1 {
            text-align : center;
        }

        /* Ganti warna tulisan "ASRI - RENT" dan "Siap menemani perjalanan anda dengan harga minimal tapi kualitas maksimal" menjadi putih */
        .jumbotron h1, .jumbotron p {
            color: white;
        }
    </style>
</head>
<body>
     <!--Jumbotron-->
     <section class="jumbotron text-center">
      <img src="Image/logorentalmobil.png" alt="Alfian" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">DJIROB RENT CARS</h1>
      <p class="lead">"Siap menemani perjalanan anda dengan harga minimal tapi kualitas maksimal"</p>
    </section>
    <!--Akhir Jumbotron-->
    
    <br>
    <h1>Daftar Mobil Tersedia</h1>
    
    <br>
    <div class="d-flex justify-content-center">
        <a href="tambah.php" class="btn btn-primary">Tambah Data Mobil</a>
    </div>
    <br></br>

    <table class="table" border="10" cellpadding="10" cellspacing="0">

        <tr>
            <th class="table-dark text-center">No.</th>
            <th class="table-dark text-center">Aksi</th>
            <th class="table-dark text-center">Gambar</th>
            <th class="table-dark text-center">Jenis</th>
            <th class="table-dark text-center">Deskripsi</th>
            <th class="table-dark text-center">Harga Sewa Per Hari (Rp)</th>
        </tr>

        <?php $n = 1; ?>
        <?php foreach( $mobil as $row) : ?>
        <tr>
            <td class="table-light" style="border-right: 1px solid #dee2e6;"> <?= $n; ?></td> 
            <td class="table-light" style="border-right: 1px solid #dee2e6;">
                <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-success">Ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus data ini ?');">Hapus</a>
            </td>
            <td class="table-light" style="border-right: 1px solid #dee2e6;"><img src="Image/<?= $row["gambar"]; ?>" width="200" alt=""></td>
            <td class="table-light" style="border-right: 1px solid #dee2e6;"><?= $row["jenis"]; ?></td>
            <td class="table-light" style="border-right: 1px solid #dee2e6;"><?= $row["deskripsi"]; ?></td>
            <td class="table-light" style="border-right: 1px solid #dee2e6;"><?= $row["harga"]; ?></td>
        </tr>
        <?php $n++; ?>
        <?php endforeach; ?>
    </table>
    

</body>
</html>
