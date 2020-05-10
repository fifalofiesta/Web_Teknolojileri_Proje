<?php
echo 'Merhaba '. $_POST["adi"]. ' '. $_POST["soyadi"];
echo '<br/> Mesajınız alınmıştır. Kısa süre içerisinde dönüş yapacağız.';
echo '<br/> Adınız : ' . $_POST["adi"];
echo '<br/> Soyadınız : ' . $_POST["soyadi"];
echo '<br/> Cinsiyetiniz : ' . $_POST["cinsiyet"];
echo '<br/> E-mailiniz : ' . $_POST["email"];
echo '<br/> Uyruğunuz : ' . $_POST["uyruk"];
echo '<br/> Telefon Numaranız : ' . $_POST["telefonnumarasi"];
echo '<br/> Eğitim Durumunuz : ' . $_POST["egitim"];
echo '<br/> Kan grubunuz : ' . $_POST["kangrubu"];
echo '<br/> Açıklamanız : ' . $_POST["aciklama"];
echo '<br/> Yukarıdaki bilgiler doğru değilse bizimle iletişime geçiniz. Mail-yasin.unan@ogr.sakarya.edu.tr';
?>