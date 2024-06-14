<?php
    require_once 'koneksi.php';

    //string untuk isi query
    $sql = "SELECT NIM, NamaLengkap, KELAS, TglLahir
            FROM tmahasiswa 
            WHERE TglLahir>'1989-01-22' 
            ORDER BY TglLahir ASC ";

    //RUN QUERY
    $r = mysqli_query($conn, $sql);

    //array untuk simpan $row / baris hasil run query
    $result = array();

    //simpan ke array
    while($row = mysqli_fetch_array($r)){
        array_push($result, array(
            "NIM"=>$row['NIM'],
            "Nama Lengkap"=>$row['NamaLengkap'],
            "Kelas"=>$row['KELAS'],
            "Tanggal Lahir"=>$row['TglLahir']
        ));
    }
    //ubah ke JSON
    echo json_encode($result);
    //tutup koneksi
    mysqli_close($conn);

?>