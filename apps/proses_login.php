<?php
session_start();
include '../koneksi/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password']; 

$sql = "SELECT username, password FROM user WHERE username ='$username' AND password ='$password'";
$query = mysqli_query($koneksi, $sql);

$cek = mysqli_num_rows($query);

//mengecek apakah data yang dikirim ada di dalam database 
if ($cek > 0) {
    $_SESSION['username']= $username;
    $_SESSION['status'] = 'login';
    header('location: tampil-data.php');
}else {
  header('Location: ../index.php?pesan=login gagal');
}