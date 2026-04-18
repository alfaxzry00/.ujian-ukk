<?php
echo "<h1>Selamat Datang di Web Server UKK</h1>";
echo "nama Peserta (isi namanya) <br>";
echo "kelas : XXI TKJ<br>";
echo "uji Kompetensi keahlian TP. 2025/2026,br.";

$conn = mysqli_connect("localhost", "root", "1ks2026");
if ($conn) {
        echo "status Database: Terhubung";
} else {
        echo "status Database: Gagal Terhubung";
}

?>
