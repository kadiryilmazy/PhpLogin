

<?php


/*--------------------Kullanıcıdan alınan verilerin filtrelenmesi-----------*/
function Filtrele($Deger){
    $IslemBir = trim($Deger);                                //başındaki ve sonundaki boşlukları kaldırır.
    $IslemIki = strip_tags($IslemBir);                      //html karakterlerini temizler.
    $IslemUc = htmlspecialchars($IslemIki, ENT_QUOTES);    //html kodlarını zararsız hale getirir.Metin gibi gösterir.
    $Sonuc = $IslemUc;
    return $Sonuc;
  }
   

?>