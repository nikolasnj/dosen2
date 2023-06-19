<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$databse = 'dosen';

$koneksi = mysqli_connect($host, $username, $password, $databse);

$sql = "SELECT * FROM dosen";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_all($query, MYSQLI_BOTH);