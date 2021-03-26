<?php


include 'baglan.php';

/*ÜRÜN SİLME */
$urunId= $_GET["urunId"];
try {
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlquery = "DELETE FROM urunler WHERE urunId=$urunId";
    $db->exec($sqlquery);
    header("Location:../urunler.php?durum=ok");
    exit;
}
catch(PDOException $e) {
    header("Location:../urunler.php?durum=no");
}

/*Hizmet SİLME */
$hizmetId= $_GET["hizmetId"];
try {
  

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlquery = "DELETE FROM hizmetler WHERE hizmetId=$hizmetId";
    $db->exec($sqlquery);
    header("Location:../hizmetler.php?durum=ok");
    exit;
}
catch(PDOException $e) {
    header("Location:../hizmetler.php?durum=no");
 
}


$sliderId= $_GET["sliderId"];
try {
  
   
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlquery = "DELETE FROM slider WHERE sliderId=$sliderId";
    $db->exec($sqlquery);
    header("Location:../sliderlar.php?durum=ok");
    exit;
}
catch(PDOException $e) {
    header("Location:../sliderlar.php?durum=no");
   
}



$duyuruId= $_GET["duyuruId"];
try {
  
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sqlquery = "DELETE FROM duyurular WHERE duyuruId=$duyuruId";
    $db->exec($sqlquery);
    header("Location:../duyurular.php?durum=ok");
exit;
}
catch(PDOException $e) {
    header("Location:../duyurular.php?durum=no");

}



$referansId= $_GET["referansId"];
try {
  

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlquery = "DELETE FROM referanslar WHERE referansId=$referansId";
    $db->exec($sqlquery);
    header("Location:../referanslar.php?durum=ok");
    exit;
}
catch(PDOException $e) {
    header("Location:../referanslar.php?durum=no");
   
}








$kullanici_id= $_GET["kullanici_id"];

try {
  

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $sqlquery = "DELETE FROM kullanici WHERE kullanici_id=$kullanici_id";
  
    $db->exec($sqlquery);
    header("Location:../kullanicilar.php?durum=ok");
    exit;

}
catch(PDOException $e) {
    
    header("Location:../kullanicilar.php?durum=no");
 
    
}

$musteriId= $_GET["musteriId"];
try {
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlquery = "DELETE FROM mesaj WHERE musteriId=$musteriId";
    $db->exec($sqlquery);
    header("Location:../gelenMesajlar.php?durum=ok");
    exit;
}
catch(PDOException $e) {
    header("Location:../gelenMesajlar.php?durum=no");
}


?>
