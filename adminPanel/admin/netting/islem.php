<?php
ob_start();
session_start();
include 'baglan.php';

if (isset($_POST['admingiris'])) {

    $kullanici_mail=$_POST['kullanici_mail'];
    $kullanici_password= $_POST['kullanici_password'];
    $kullanicisor=$db->prepare("Select * from kullanici where kullanici_mail=:kullanici_mail and kullanici_password=:kullanici_password");
    $kullanicisor->execute(array(
        'kullanici_mail'=>$kullanici_mail,
        'kullanici_password'=>$kullanici_password,

    ));
    $say=$kullanicisor->rowCount();
    if ($say==0) {
        header("Location:../../index.php?durum=no");
    }else{
        $_SESSION['kullanici_mail']=$kullanici_mail;

        header("Location:../index.php");
    }
}

if(isset($_FILES['dosya'])){
    

    $hata = $_FILES['dosya']['error'];
    if($hata != 0) {
       echo 'Yüklenirken bir hata gerçekleşmiş.';
    } else {
       $boyut = $_FILES['dosya']['size'];
       if($boyut > (1024*1024*3)){
          echo 'Dosya 3MB den büyük olamaz.';
       } else {
          $tip = $_FILES['dosya']['type'];
          $isim = $_FILES['dosya']['name'];
          $uzanti = explode('.', $isim);
          $uzanti = $uzanti[count($uzanti)-1];
          if($tip != 'image/jpeg' || $uzanti != 'jpg') {
            $dosyayol=$_POST['dosyayol'];
             echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
             header("Location:../$dosyayol.php?durum=no");
          } else {
              $dosyayol=$_POST['dosyayol'];
             $dosya = $_FILES['dosya']['tmp_name'];
             copy($dosya, '../dosyalar/' . $_FILES['dosya']['name']);
             header("Location:../$dosyayol.php?durum=$isim");

       
          }
       }
    }
 }

if (isset($_POST['ayarkaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE siteayarlar SET 
    sitebaslik=:sitebaslik,
    siteaciklama=:siteaciklama,
    anahtarkelimeler=:anahtarkelimeler,
    telno=:telno,
    mail=:mail,
    ilce=:ilce,
    il=:il,
    acikadres=:acikadres
    WHERE siteId=1");

    $update=$ayarkaydet->execute(array(
        'sitebaslik'=> $_POST['sitebaslik'],
        'siteaciklama'=>$_POST['siteaciklama'],
        'anahtarkelimeler'=>$_POST['anahtarkelimeler'],
        'telno'=>$_POST['telno'],
        'mail'=>$_POST['mail'],
        'ilce'=>$_POST['ilce'],
        'il'=>$_POST['il'],
        'acikadres'=>$_POST['acikadres']

    ));
    if ($update) {
        header("Location:../ayarlar.php?durum=ok");
    }
    else {
        header("Location:../ayarlar.php?durum=no");
        
    }
}


if (isset($_POST['hakkimzdakaydet'])) {

    $hakkimizdakaydet=$db->prepare("UPDATE hakkimizda SET 
    hakkimizda_baslik=:hakkimizda_baslik,
    hakkimizda_icerik=:hakkimizda_icerik,
    hakkimizda_vizyon=:hakkimizda_vizyon,
    hakkimizda_misyon=:hakkimizda_misyon
    
    WHERE hakkimizda_id=1");

    $update=$hakkimizdakaydet->execute(array(
        'hakkimizda_baslik'=> $_POST['hakkimizda_baslik'],
        'hakkimizda_icerik'=>$_POST['hakkimizda_icerik'],
        'hakkimizda_vizyon'=>$_POST['hakkimizda_vizyon'],
        'hakkimizda_misyon'=>$_POST['hakkimizda_misyon']
        
    ));
    if ($update) {
        header("Location:../hakkimizda.php?durum=ok");
    }
    else {
        header("Location:../hakkimizda.php?durum=no");
        
    }
}

if (isset($_POST['urunkaydet'])) {

    $urunkaydet=$db->prepare("INSERT INTO urunler set
    UrunBaslik=:UrunBaslik,
    urunIcerik=:urunIcerik,
    urunFiyat=:urunFiyat");

    $update=$urunkaydet->execute(array(
        'UrunBaslik'=> $_POST['UrunBaslik'],
        'urunIcerik'=>$_POST['urunIcerik'],
        'urunFiyat'=>$_POST['urunFiyat']
    ));
    if ($update) {
        header("Location:../urunEkle.php?durum=ok");
    }
    else {
        header("Location:../urunEkle.php?durum=no");
        
    }
}
if (isset($_POST['hizmetkaydet'])) {

    $hizmetkaydet=$db->prepare("INSERT INTO hizmetler set
    hizmetBaslik=:hizmetBaslik,
    hizmetIcerik=:hizmetIcerik,
    hizmetFiyat=:hizmetFiyat");

    $update=$hizmetkaydet->execute(array(
        'hizmetBaslik'=> $_POST['hizmetBaslik'],
        'hizmetIcerik'=>$_POST['hizmetIcerik'],
        'hizmetFiyat'=>$_POST['hizmetFiyat']
    ));
    if ($update) {
        header("Location:../hizmetEkle.php?durum=ok");
    }
    else {
        header("Location:../hizmetEkle.php?durum=no");
        
    }
}
if (isset($_POST['sliderkaydet'])) {

    $sliderkaydet=$db->prepare("INSERT INTO slider set
 
 fotoYol=:fotoYol,
 sliderBaslik=:sliderBaslik");

    $update=$sliderkaydet->execute(array(
        'fotoYol'=>$_POST['fotoYol'],
        'sliderBaslik'=>$_POST['sliderBaslik']
    ));
    if ($update) {
        header("Location:../sliderEkle.php?durum=ok");
    }
    else {
        header("Location:../sliderEkle.php?durum=no");
        
    }
}

if (isset($_POST['referanskaydet'])) {

    $sliderkaydet=$db->prepare("INSERT INTO referanslar set
 
 referansBaslik=:referansBaslik");

    $update=$sliderkaydet->execute(array(
      
        'referansBaslik'=>$_POST['referansBaslik']
    ));
    if ($update) {
        header("Location:../referansEkle.php?durum=ok");
    }
    else {
        header("Location:../referansEkle.php?durum=no");
        
    }
}

if (isset($_POST['kullanicikaydet'])) {

    $kullanicikaydet=$db->prepare("INSERT INTO kullanici set
    kullanici_ad=:kullanici_ad,
    kullanici_mail=:kullanici_mail,
    kullanici_password=:kullanici_password");

    $update=$kullanicikaydet->execute(array(
        'kullanici_ad'=> $_POST['kullanici_ad'],
        'kullanici_mail'=>$_POST['kullanici_mail'],
        'kullanici_password'=>$_POST['kullanici_password']
    ));
    if ($update) {
        header("Location:../kullaniciEkle.php?durum=ok");
    }
    else {
        header("Location:../kullaniciEkle.php?durum=no");
        
    }
}




?>
