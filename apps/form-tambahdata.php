
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Form Tambah Data</title>
</head>

<body>
    <div class="w3-display-topmiddle">
        <h1>Form Tambah Data </h1>
        <form action="proses-tambahdata.php" method="post">
            <label for="">NIDN: </label>
            <input type="text" name= "NIDN" id="" required="required" >
            <br>
            <label for="">Nama dosen:</label>
            <input type="text" name= "Nama" id="Nama"required="required" >
            <br>
            <label for="">Status Dosen:</label>
            <input type="text" name= "Status_Dosen" id="Status_Dosen"required="required" >
            <br>
            <label for="">Jenjang:</label>
            <input type="text" name= "Jenjang" id="Jenjang"required="required" >
            <br>
            <label for="">PT:</label>
            <input type="text" name= "PT" id="PT"required="required">
            <br>
            <label for="">Jurusan:</label>
            <input type="text" name= "Jurusan" id="Jurusan"required="required">
            <br>
            <input type="submit" name= "submit" id="simpan">
    </div>
        </form>
</body>

</html>