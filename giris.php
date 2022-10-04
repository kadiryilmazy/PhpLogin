
<!DOCTYPE html>
<html>

<body>

  <?php
  session_start();
  ob_start();
  /* İNCLUDE EDİLEN DOSYALAR */
  include("fonksiyonlar.php");             //Kullandığımız tüm fonksiyonları yazdığımız php dosyamızın include edilmesi.
  include("veritabanibaglanti.php");      //Veritabanı bağlantı kodlarımızı içeren php dosyamızın include edilmesi.


  /*-------------------------------------------POST İLE GELEN DEĞER VAR İSE---------------------------------------------------*/
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FiltrelenmisKAdi = Filtrele($_POST['KullaniciAdi']);       //Gelen değeri filtrele.
    $FiltrelenmisSifre = Filtrele($_POST['KullaniciSifresi']); //Gelen değeri filtrele. 
    $sql = "SELECT * FROM kullanicilar WHERE KullaniciKAdi='$FiltrelenmisKAdi' && KullaniciSifresi='$FiltrelenmisSifre' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {    //SQL Sorgusu ile eşleşen veri var ise.
      /*---------beni hatırla bölümü seçiliyse---------------*/
      if (!empty($_POST["hatirla"])) {
        /*------------------------COOKİELERİ TARAYICIMIZA KAYDETME İŞLEMİ----------------------*/
        $cookie_adi = "CookieKullaniciAdi";
        $cookie_degeri = $FiltrelenmisKAdi;
        setcookie($cookie_adi, $cookie_degeri, time() + (86400 * 30), "/"); // 86400 = 1 day

        $cookie_adi2 = "CookieKullaniciSifresi";
        $cookie_degeri2 = $FiltrelenmisSifre;
        setcookie($cookie_adi2, $cookie_degeri2, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
      ////////////////////////////////////////////////////////////////////////////////////////////
      /*-------------SESSİON OLUŞTURMA İŞLEMİ----------------------------------------------------*/
      $_SESSION["login"] = "true";               //--> Giriş yapılmış mı kontrol aracı.
      $_SESSION["user"] = $FiltrelenmisKAdi;
      $_SESSION["pass"] = $FiltrelenmisSifre;
      header("Location:anasayfa.php");          //-->Anasayfa.php yönlendirme işlemi.
    } else {
      echo '<meta http-equiv="refresh" content="0;URL=index.php">'; // Kad , Şifre yanlışsa index.php ye yönlendirme.
    }
  }
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


  


  ?>



</body>

</html>