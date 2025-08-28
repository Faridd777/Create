<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XI RPL 2</title>

</head>

<body>
    <?php
    // Koneksi ke database
    include 'config.php';
    ?>
    <!-- form inputan -->
    <form action="prosesinput.php" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <br>
        <label>Kelas</label>
        <input type="text" name="kelas">
        <br>
        <label>Absen</label>
        <input type="text" name="absen">
        <br>
        <label>Alamat</label>
        <input type="text" name="alamat">
        <br>
        <label>hobby</label>
        <input type="text" name="hobby">
        <input type="submit" value="Kirim">
    </form>

    <!-- tampilkan data dari database -->

    <?php
    // query untuk mendapatkan data dari database
    $sql = "SELECT * FROM tbsiswa";
    $result = mysqli_query($koneksi, $sql);
    ?>




    
</body>

</html>