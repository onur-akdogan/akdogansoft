<?php
ob_start();
session_start();include 'netting/baglan.php';
$kullanicisor=$db->prepare("Select * from kullanici where kullanici_mail=:kullanici_mail");
$kullanicisor->execute(array(
  'kullanici_mail'=>$_SESSION['kullanici_mail']
));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
if ($say==0) {
  Header("Location:../index.php");
exit;
}

//Hakkımızda verilerini çekmek için veriyi seçme
$hakkimizdaveriSorgula=$db->prepare("Select * from hakkimizda where hakkimizda_id=:id");
$hakkimizdaveriSorgula->execute(array(
  'id'=>1
));
$hakkimizdaVeri=$hakkimizdaveriSorgula->fetch(PDO::FETCH_ASSOC);
//Ayarlar verilerini çekmek için veriyi seçme
$ayarlarveriSorgula=$db->prepare("Select * from siteayarlar where siteId=:id");
$ayarlarveriSorgula->execute(array(
  'id'=>1
));
$ayarlarVeri=$ayarlarveriSorgula->fetch(PDO::FETCH_ASSOC);






$urunSor=$db->prepare("SELECT * FROM urunler");
$urunSor->execute();

$hizmetSor=$db->prepare("SELECT * FROM hizmetler");

$hizmetSor->execute();


$sliderSor=$db->prepare("SELECT * FROM slider");

$sliderSor->execute();

$duyuruSor=$db->prepare("SELECT * FROM duyurular");

$duyuruSor->execute();

$referansSor=$db->prepare("SELECT * FROM referanslar");

$referansSor->execute();


$kullanicilariSor=$db->prepare("SELECT * FROM kullanici");

$kullanicilariSor->execute();


$mesajlariSor=$db->prepare("SELECT * FROM mesaj");

$mesajlariSor->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Admin Paneli</title>
</head>
<body>

 <div class="TamSayfa">
 <div class="appBar">
        <div class="row">
        <ul>

        <li><img src="http://localhost/akdogansoft/<?php echo $kullanicicek['kullanici_resim'];?>" alt="pp">
         </li>
      
            <li><a href="#"><?php echo $kullanicicek['kullanici_ad'];?></a></li>
         
            <li><a href="">Hoşgeldin</a></li>
            </ul>
            </div>

       
            
    <div class="menu">
        <div class="logo"><a href="index.php"><img src="assets/title.png" alt="logo"></a></div>
        <div class="SiraliMenu">
            <div class="menuContainer"><h3><a href="index.php">Ana Sayfa</a></h3></div>
            <div class="menuContainer"><h3><a href="gelenMesajlar.php">Gelen Mesajlar</a></h3></div>
            <div class="menuContainer"><h3><a href="duyurular.php">Duyurular</a></h3></div>
            <div class="menuContainer"><h3><a href="urunler.php">Ürünler</a></h3></div>
            <div class="menuContainer"><h3><a href="hizmetler.php">Hizmetler</a></h3></div>
            <div class="menuContainer"><h3><a href="sliderlar.php">Slider İşlemleri</a></h3></div>
            <div class="menuContainer"><h3><a href="referanslar.php">Referanslar</a></h3></div>
            <div class="menuContainer"><h3><a href="hakkimizda.php">Hakkımızda</a></h3></div>
            <div class="menuContainer"><h3><a href="kullanicilar.php">Kullanıcı İşlemleri</a></h3></div>
            <div class="menuContainer"><h3><a href="ayarlar.php">Ayarlar</a></h3></div>
        </div>
    </div>