<?php
    require_once 'koneksi.php';

    //string untuk isi query
    $sql = "SELECT NIM, NamaLengkap, JenisKelamin, ProgramKelas, TahunLulusSMA
            FROM tmahasiswa 
            WHERE JenisKelamin='PEREMPUAN' AND ProgramKelas='REGULAR' AND TahunLulusSMA='2008'
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
            "Program Kelas"=>$row['ProgramKelas'],
            "Tahun Lulus SMA"=>$row['TahunLulusSMA']
        ));
    }
    //ubah ke JSON
    echo json_encode($result);
    //tutup koneksi
    mysqli_close($conn);

?>