<?php
session_start();
ob_start();

if(!isset($_SESSION["login"])){
    header("Location:index.php");
}

unset($_COOKIE['CookieKullaniciAdi']); 
setcookie('CookieKullaniciAdi', null, -1, '/'); 
unset($_COOKIE['CookieKullaniciSifresi']); 
setcookie('CookieKullaniciSifresi', null, -1, '/'); 

session_destroy();
ob_end_flush();



echo "<center>Çıkış yaptınız. Anasayfaya yönlendiriliyorsunuz.</center>";
header("Refresh: 3; url=index.php");

?>