<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>
        <title>Data dosen</title>
    </head>
    <body>
    <?php
    include '../koneksi/koneksi.php';

    if (isset($_POST['cari'])) {
        $keyword = $_POST['keyword'];
        $sql = "SELECT * FROM dosen WHERE NIDN ='$keyword' OR Nama like '%$keyword%'";
    }else {
        $sql = "SELECT * FROM dosen";
    }
    
    $query = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_all($query, MYSQLI_BOTH);
    ?>
    <br>
    <h1 class="w3-margin-bottom">Tabel Data dosen</h1> 
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == 'tambah'){
            echo "data berhasil di tambah";
        } elseif ($pesan == 'update') {
        echo "data berhasil di update";
        }elseif ($pesan == 'delete') {
            echo "data berhasil di hapus";
        }elseif ($pesan == 'edit') {
            echo "data berhasil di edit";
        }
    }
    ?>  
<form action=""method="post">
    <label for="cari">cari</label>
    <input type="text"name="keyword" id="cari"autofokus autocomplete="off">
    <button type="submit" name="cari">cari</button>
</form>

    <br>
    <table class="w3-table-all w3-centered">
        <tr>
            <td>NIDN</td>
            <td>Nama dosen</td>
            <td>status dosen  </td>
            <td>Jenjang</td>
            <td>PT</td>
            <td>jurusan</td>
            <td>Action</td>
        </tr>
        <?php
        foreach ($row as $baris) { ?>
        <tr>
            <td><?= $baris ['NIDN'] ?></td>
            <td><?= $baris ['Nama'] ?></td>
            <td><?= $baris ['Status_Dosen'] ?></td>
            <td><?= $baris ['Jenjang'] ?></td>
            <td><?= $baris ['PT'] ?></td>
            <td><?= $baris ['Jurusan'] ?></td>
            <td>
                
                <a href="edit.php?NIDN=<?=$baris['NIDN'] ?>">
                <button class="w3-button w3-dark-gray w3-round-xlarge">Edit</button>
                </a>
                
                <a href="delete.php?NIDN=<?=$baris['NIDN'] ?>"> 
                <button class="w3-button w3-black w3-round-xlarge">Delete</button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="form-tambahdata.php">
        <button class="w3-button w3-dark-gray w3-round-xlarge">Tambah Data</button>
    </a>
    <br>
    <br>
    <a href="logout.php"><button class="w3-button w3-dark-gray w3-round-xlarge">logout</button></a> 
    <br>
    </body>
    </html>