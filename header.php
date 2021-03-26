
<?php

include 'adminPanel/admin/netting/baglan.php';
$sliderSor=$db->prepare("SELECT * FROM slider ORDER BY sliderId desc LIMIT 3");
$sliderSor->execute();


$referansSor=$db->prepare("SELECT * FROM referanslar ORDER BY referansId desc LIMIT 6");
$referansSor->execute();



$referansSorhepsi=$db->prepare("SELECT * FROM referanslar ORDER BY referansId desc");
$referansSorhepsi->execute();


$duyuruSor=$db->prepare("SELECT * FROM duyurular ORDER BY duyuruId desc LIMIT 3");
$duyuruSor->execute();


$hizmetSor=$db->prepare("SELECT * FROM hizmetler ORDER BY hizmetId desc LIMIT 3");
$hizmetSor->execute();


$hizmetSorhepsi=$db->prepare("SELECT * FROM hizmetler ORDER BY hizmetId desc");
$hizmetSorhepsi->execute();

$urunSorhepsi=$db->prepare("SELECT * FROM urunler ORDER BY urunId desc");
$urunSorhepsi->execute();

$ayarlarveriSorgula=$db->prepare("Select * from siteayarlar where siteId=:id");
$ayarlarveriSorgula->execute(array(
  'id'=>1
));
$ayarlarVeri=$ayarlarveriSorgula->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo $ayarlarVeri['anahtarkelimeler'];?>">
    <meta name="description" content="<?php echo $ayarlarVeri['siteaciklama'];?>" />
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $ayarlarVeri['sitebaslik'];?></title>
</head>
<body>
    <div class="topnav">
    
 <img src="adminPanel/admin/assets/title.png" alt="resim" width="70px">
        <a href="index.php">AnaSayfa</a>
        <a href="hizmetler.php">Hizmetlerimiz</a>
        <a href="urunler.php">Ürünlerimiz</a>
       
        <a href="referanslar.php">Referanslarımız</a>
        <a href="hakkimizda.php">Hakkımızda</a>
        <a href="bizeulas.php">Bize Ulaş</a>
     
      </div>
    
