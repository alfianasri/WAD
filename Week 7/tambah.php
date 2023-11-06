<?php
require 'functions.php';

if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            width: 300px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Tambah Data Mobil</h1>

    <form action="" method="post">
        <label for="jenis">Jenis :</label>
        <input type="text" name="jenis" id="jenis" required>

        <label for="deskripsi">Deskripsi :</label>
        <input type="text" name="deskripsi" id="deskripsi" required>

        <label for="harga">Harga Sewa :</label>
        <input type="text" name="harga" id="harga" required>

        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required>

        <button type="submit" name="submit">Tambahkan Data</button>
    </form>

</body>

</html>
