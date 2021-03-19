<?php 
include 'header.php';
?>

<div class ="forms">
<form action="netting/islem.php" method="post" enctype="multipart/form-data" class="formstyle">
   <input type="file" name="dosya" />
   <input type="hidden" name="dosyayol" value="sliderEkle">
   <input type="submit" value="Gönder" />
</form>
</div>

<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Hizmetler 

            <span>Gerekli Bilgileri Lüften Eksiksiz Doldurunuz.

            <?php 

                    if ($_GET['durum']=="ok") {?>

                    <h4>     <b style="color:green;">İşlem Başarılı...</b></h4>
                        
                    <?php } elseif ($_GET['durum']=="no") {?>

                    <h4>  <b style="color:red;">İşlem Başarısız...</b></h4>

                    <?php }
            ?>
</h1>
            </span>
         
        <label>
        <span>Resim Ekle :</span>
        <input type="file" id="resim" class="upload" accept="image/*" multiple/>
        </label>
        <label>
            <span>Başlık :</span>
            <input id="hizmetBaslik" type="text" name="hizmetBaslik" placeholder="Başlık Giriniz" />
        </label>
        
        <label>
            <span>Açıklama</span>
            <input id="hizmetIcerik" type="text" name="hizmetIcerik" placeholder="Ön açıklama Giriniz" />
        </label>

        <label>
            <span>Fiyat :</span>
            <input id="hizmetFiyat" type="text" name="hizmetFiyat" placeholder="Fiyat Giriniz" />
        </label>
        
          <p>
        <label>
            <span> </span> 
      
            <button class="button" name="hizmetkaydet" value="Güncelle">Ekle</button>
        </label>   
        </p>
          
    </form>
</div>