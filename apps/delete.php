<?php
include '../koneksi/koneksi.php';

$NIDN = $_GET['NIDN'];

$sql = "DELETE FROM dosen WHERE NIDN = '$NIDN'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header('Location:tampil-data.php?pesan=delete');
} else {
    echo "Data Gagal Dihapus";
}