
<?php
$serveradi = "localhost";
$veritabaniadi = "ogrencibilgisistemi";
$kullaniciadi = "root";
$sifre = "";

$conn = mysqli_connect($serveradi, $kullaniciadi, $sifre, $veritabaniadi);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>