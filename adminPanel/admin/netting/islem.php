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
?>