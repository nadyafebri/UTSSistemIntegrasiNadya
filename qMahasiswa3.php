<?php
    require_once 'koneksi.php';

    //string untuk isi query
    $sql = "SELECT NIM, NamaLengkap, JenisKelamin, KELAS 
            FROM tmahasiswa 
            WHERE JenisKelamin='PEREMPUAN' 
            ORDER BY NIM ASC ";

    //RUN QUERY
    $r = mysqli_query($conn, $sql);

    //array untuk simpan $row / baris hasil run query
    $result = array();

    //simpan ke array
    while($row = mysqli_fetch_array($r)){
        array_push($result, array(
            "NIM"=>$row['NIM'],
            "Nama Lengkap"=>$row['NamaLengkap'],
            "Jenis Kelamin"=>$row['JenisKelamin'],
            "Kelas"=>$row['KELAS']
        ));
    }
    //ubah ke JSON
    echo json_encode($result);
    //tutup koneksi
    mysqli_close($conn);

?>