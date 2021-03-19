<?php 
include 'header.php';
?>


<div class ="forms">
<form action="netting/islem.php" method="post" enctype="multipart/form-data" class="formstyle">

<span>Resim Ekle :</span>
 <input type="file" name="dosya" />
   <input type="hidden" name="dosyayol" value="kullaniciEkle">
<span>   <button class="button">Ekle</button></span>
 
   
</form>
</div>
<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Kullanici Ekle 

            <span>Gerekli Bilgileri Lüften Eksiksiz Doldurunuz.

            <?php 
$fotoisim=$_GET['durum'];
                    if ($_GET['durum']=="ok") {?>

                    <h4>     <b style="color:green;">İşlem Başarılı...</b></h4>
                        
                    <?php } elseif ($_GET['durum']=="no") {?>

                    <h4>  <b style="color:red;">İşlem Başarısız...</b></h4>

                    <?php }
            ?>
</h1>
            </span>
         
      
        <label>
            <span>Kullanıcı Adı :</span>
            <input id="kullanici_ad" type="text" name="kullanici_ad" placeholder="Kullanıcı Adı Giriniz" />
        </label>
        <input type="hidden" name="kullanici_resim" value="adminPanel/admin/dosyalar/<?php echo $fotoisim?>">
        <label>
            <span>Kullanıcı Mail</span>
            <input id="kullanici_mail" type="text" name="kullanici_mail" placeholder="Kullanıcı Mail Giriniz" />
        </label>

        <label>
            <span>Kullanıcı Şifre</span>
            <input id="kullanici_password" type="text" name="kullanici_password" placeholder="Kullanıcı Şifre Giriniz" />
        </label>
        
          <p>
        <label>
            <span> </span> 
      
            <button class="button" name="kullanicikaydet" value="Ekle">Ekle</button>
        </label>   
        </p>
          
    </form>
</div>