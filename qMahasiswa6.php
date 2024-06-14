<?php
    require_once 'koneksi.php';

    //string untuk isi query
    $sql = "SELECT * FROM tmahasiswa 
            WHERE KotaAsal='MALANG' 
            AND JenisKelamin='LAKI-LAKI'
            ORDER BY NIM ASC";

    //RUN QUERY
    $r = mysqli_query($conn, $sql);

    //array untuk simpan $row / baris hasil run query
    $result = array();

    //simpan ke array
    while($row = mysqli_fetch_array($r)){
        array_push($result, array(
            "NIM"=>$row['NIM'],
            "Nama Lengkap"=>$row['NamaLengkap'],
            "Kota Asal"=>$row['KotaAsal'],
            "Jenis Kelamin"=>$row['JenisKelamin']
        ));
    }
    //ubah ke JSON
    echo json_encode($result);
    //tutup koneksi
    mysqli_close($conn);

?>