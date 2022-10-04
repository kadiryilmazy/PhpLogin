<!DOCTYPE html> 
<html>
<head>
 <link rel="stylesheet" type="text/css" href="styleanasayfa.css">
 <meta charset="UTF-8">
</head>
<body>
   <?php
   include("giris.php");
if(!isset($_SESSION["login"])){
       header("Location:index.php");
   }

   $sorgu2 = $conn->prepare("SELECT * FROM kullanicilar WHERE KullaniciKAdi='$_SESSION[user]'");
                $sorgu2->execute();
                $sonuc3 = $sorgu2->get_result();
               $vtverileri = mysqli_fetch_assoc($sonuc3);
  ?> 

  <body>
     <div style="font-size:150%;" class='headerkullanici'>
       Hoşgeldiniz Sayın <?php echo $vtverileri['KullaniciKAdi']; ?>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <a class="headerkullaniciislem" href=profil.php >Profil</a> &nbsp&nbsp
       <a class="headerkullaniciislem" href=cikis.php >Çıkış Yap</a> &nbsp&nbsp

    </div>


 </body>
 </html>
