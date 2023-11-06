<?php   
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "rentalmobil");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;

     //ambil data dari tiap elemen dalam form
     $jenis = htmlspecialchars($data["jenis"]);
     $deskripsi = htmlspecialchars($data["deskripsi"]);
     $harga = htmlspecialchars($data["harga"]);
     $gambar = htmlspecialchars($data["gambar"]);

         //query insert data
    $query = "INSERT INTO mobil
    VALUES
    ('', '$jenis', '$deskripsi','$harga', '$gambar')"
    ;
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mobil WHERE id = $id");

    return mysqli_affected_rows($conn);
}



function ubah($data) {
    global $conn;

    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $jenis = htmlspecialchars($data["jenis"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

        //query insert data
   $query = "UPDATE mobil SET
               jenis = '$jenis',
               deskripsi = '$deskripsi',
               harga = '$harga',
               gambar = '$gambar' 
            WHERE id = $id
            ";
   mysqli_query($conn, $query);
   return mysqli_affected_rows($conn);
}

?>


