<?php 
    $host = 'localhost';
    $userdb = 'root';
    $pwd='';
    $db='dbmahasiswa';
    //koneksikan
    $conn = mysqli_connect($host,$userdb,$pwd,$db);
    //cek koneksi
    if(!$conn){
        die("Koneksi Gagal : ".mysqli_connect_error());
    } else {
        //echo('Koneksi Sukses');
    }

?>