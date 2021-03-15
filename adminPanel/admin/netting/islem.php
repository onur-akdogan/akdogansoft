<?php
ob_start();
session_start();
include 'baglan.php';
if (isset($_POST['admingiris'])) {
    $kullanici_mail = $_POST['kullanici_mail'];
    $kullanici_password = md5($_POST['kullanici_password']);
    $kullanicisor = $db->prepare("Select * from kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
    $kullanicisor->execute(array(
        'mail' => $kullanici_mail,
        'password' => $kullanici_password,
        'yetki' => 5
    ));
    $say = $kullanicisor->rowCount();
    if ($say == 0) {
        header("Location:../../index.php?durum=no");
    } else {
        $_SESSION['kullanici_mail'] = $kullanici_mail;
        header("Location:../index.php");
    }
}
?>