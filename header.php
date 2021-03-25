
<?php

include 'adminPanel/admin/netting/baglan.php';
$sliderSor=$db->prepare("SELECT * FROM slider ORDER BY sliderId desc LIMIT 3");


$sliderSor->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>AKDOĞANSOFT</title>
</head>
<body>
    <div class="topnav">
    
 <img src="adminPanel/admin/assets/title.png" alt="resim" width="70px">
        <a href="#anasayfa">AnaSayfa</a>
        <a href="#news">Hizmetlerimiz</a>
        <a href="#contact">Ürünlerimiz</a>
        <a href="#about">Hakkımızda</a>
        <a href="#about">Referanslarımız</a>
        <a href="#about">Bize Ulaş</a>
     
      </div>
