<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Giriş Ekranına Hoşgeldiniz...</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
    include ("giris.php"); 
    
    /* EĞER TARAYICIMIZDA COOKİE VARSA OTOMATİK OLARAK BİLGİLERİN POST EDİLMESİ */
    if(isset($_COOKIE["CookieKullaniciAdi"])) {                          //Cookie varsa
        $_POST["KullaniciAdi"]=$_COOKIE["CookieKullaniciAdi"];          //Cookie değerini POST[KullaniciAdi] olarak gönder.
        $_POST["KullaniciSifresi"]=$_COOKIE["CookieKullaniciSifresi"]; //Cookie değerini POST[KullaniciSifresi] olarak gönder.
         header("Location:anasayfa.php");                             //Anasayfaya yönlendir.
    }
?>
<!-----------------------------------HTML FORM KISMI---------------------------------------------------------------------->
    <div class="arkaplan">
        <div class="giriskutusu">
            <img src="https://erbakan.edu.tr/assets/main/img/logo_v2.png" id="profilresmi">
            <h2>KULLANICI GİRİŞİ</h2>
            <form action="giris.php" method="POST">
                <input type="text" name="KullaniciAdi" class="inputbox" placeholder="Kullanıcı Adı" value="<?php if(isset($_COOKIE["CookieKullaniciAdi"])) { echo $_COOKIE["CookieKullaniciAdi"]; }?>">
                <br>
                <input type="Password" name="KullaniciSifresi" class="inputbox" placeholder="Şifre" value="<?php if(isset($_COOKIE["CookieKullaniciSifresi"])) { echo $_COOKIE["CookieKullaniciSifresi"]; }?>">
                <br>
                <p><input class="hatirla" type="checkbox" name="hatirla" /> Beni Hatırla </p>
                <button type="submit"> GİRİŞ YAP </button>

            </form>
        </div>
    </div>
    
</body>

</html>