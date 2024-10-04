<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = htmlspecialchars($_POST['npm']);
    $nama = strtoupper(htmlspecialchars($_POST['nama']));
    $alamat = strtoupper(htmlspecialchars($_POST['alamat']));
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $hobi = htmlspecialchars($_POST['hobi']);

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Hasil Input</title>";
    echo "<style>";
    echo "body { font-family: 'Arial', sans-serif; background-color: #f0f8ff; padding: 20px; }";
    echo ".result { background-color: #e7f3e7; padding: 20px; border-radius: 5px; margin-top: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 600px; margin: auto; }";
    echo ".result h2 { color: #333; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='result'>";
    echo "<h2>Hasil Input:</h2>";
    echo "NPM: $npm<br>";
    echo "Nama: $nama<br>";
    echo "Alamat: $alamat<br>";
    echo "Tempat Lahir: $tempat_lahir<br>";
    echo "Tanggal Lahir: $tanggal_lahir<br>";
    echo "Jenis Kelamin: $jenis_kelamin<br>";
    echo "Hobi: $hobi<br>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "Form tidak di-submit dengan benar.";
}
?>
