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






?>
