<?php
include '../koneksi/koneksi.php';

if (!isset($_GET['NIDN'])) {
    header('location:tampil-data.php');
}

$NIDN = $_POST['NIDN'];
$Nama = $_POST['Nama'];
$Status_Dosen= $_POST['Status_Dosen'];
$Jenjang = $_POST['Jenjang'];
$PT = $_POST['PT'];
$Jurusan = $_POST['Jurusan'];

$sql = "UPDATE dosen SET Nama= '$Nama', Status_Dosen='$Status_Dosen', Jenjang='$Jenjang', PT='$PT' ,Jurusan='$Jurusan' WHERE NIDN='$NIDN'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header('location:tampil-data.php');
} else {
    echo "Data gagal Diupdate";
}