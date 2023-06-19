<?php 
    include '../koneksi/koneksi.php';

    error_reporting(1);
    $NIDN = $_POST['NIDN'];
    $Nama = $_POST['Nama'];
    $Status_Dosen = $_POST['Status_Dosen'];
    $Jenjang = $_POST['Jenjang'];
    $PT= $_POST['PT']; 
    $Jurusan= $_POST['Jurusan']; 

    $sql_insert = "INSERT INTO dosen VALUES('$NIDN', '$Nama','$Status_Dosen', '$Jenjang', '$PT','$Jurusan')";
    $query_insert = mysqli_query($koneksi, $sql_insert);

    if ($query) {
        header('Location:tampil-data.php?pesan=tambah');
    } else {
        echo "Data Gagal Disimpan";
    }
