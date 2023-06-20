<?php
include '../koneksi/koneksi.php';
if (!isset($_GET['NIDN'])) {
    header('location: tampildata.php');
}


$NIDN = $_GET['NIDN'];

$sql = "SELECT * FROM Dosen WHERE NIDN = '$NIDN'";
$query = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($query);
$NIDN = $baris[0];
$Nama = $baris[1];
$Status_Dosen = $baris[2];
$Jenjang = $baris[3];
$Jurusan = $baris[4];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="w3-display-topmiddle">
<h1>Form Edit Data Dosen</h1>
<form action="update.php" method="post">
    <label for="">Nidn :</label><br>
    <input type="text" name="NIDN" id="NIDN" value="<?= $baris['NIDN'] ?>">
    <br>
    <label for="">Nama :</label><br>
    <input type="text" name="Nama" id="" value="<?= $baris['Nama'] ?>">
    <br>
    <label for="">Status Dosen :</label><br>
    <input type="text" name="Status_Dosen" id="" value="<?= $baris['Status_Dosen'] ?>">
    <br>
    <label for="">Jenjang :</label><br>
    <input type="text" name="Jenjang" id="" value="<?= $baris['Jenjang'] ?>">
    <br>
    <label for="">PT :</label><br>
    <input type="text" name="PT" id="" value="<?= $baris['PT'] ?>">
    <br>
    <label for="">Jurusan :</label><br>
    <input type="text" name="Jurusan" id="" value="<?= $baris['Jurusan'] ?>">
    <br>
    <input type="submit" value="Simpan">
    <br>
</form>

</div>
</body>

</html>