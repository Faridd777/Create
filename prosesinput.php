<!-- get data dari form -->
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $absen = $_POST['absen'];
    $alamat = $_POST['alamat'];
    $hobby = $_POST['hobby'];

    // insert data ke database
    $sql = "INSERT INTO tbsiswa (nama, kelas, absen, alamat, hobby) VALUES ('$nama', '$kelas', '$absen', '$alamat', '$hobby')";
    $result = mysqli_query($koneksi, $sql);

    // Tutup koneksi
    mysqli_close($koneksi);

    // Redirect ke halaman index.php
    header("Location: index.php");
    exit();
}
?>