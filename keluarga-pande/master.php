<?php 
include 'koneksi.php';

$query = mysqli_query($db , "INSERT INTO user 
        (nama, pilih , jumlahTamu , deskripsi)
        VALUES (
            '".$_POST['nama']."',
            '".$_POST['pilih']."',
            '".$_POST['jumlahTamu']."',
            '".$_POST['deskripsi']."'
        );
        ");
?>