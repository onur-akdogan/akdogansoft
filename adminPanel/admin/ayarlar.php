<?php 
include 'header.php';
?>


<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Ayarlar 

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
            <span>Site Başlığı :</span>
            <input id="sitebaslik" type="text" name="sitebaslik" placeholder="<?php echo $ayarlarVeri['sitebaslik'];?>" />
        </label>
        <label>
            <span>Site Açıklama</span>
            <input id="siteaciklama" type="text" name="siteaciklama" placeholder="<?php echo $ayarlarVeri['siteaciklama'];?>" />
        </label>
        <label>
            <span>Anahtar Kelimeler</span>
            <input id="anahtarkelimeler" type="text" name="anahtarkelimeler" placeholder="<?php echo $ayarlarVeri['anahtarkelimeler'];?>" />
        </label>
        <label>
            <span>Telefon Numarası</span>
            <input id="telno" type="text" name="telno" placeholder="<?php echo $ayarlarVeri['telno'];?>" />
        </label>
        <label>
            <span>Mail Adresi</span>
            <input id="mail" type="text" name="mail" placeholder="<?php echo $ayarlarVeri['mail'];?>" />
        </label>
        <label>
            <span>ilce</span>
            <input id="ilce" type="text" name="ilce" placeholder="<?php echo $ayarlarVeri['ilce'];?>" />
        </label>
        <label>
            <span>İl:</span>
            <input id="il" type="text" name="il" placeholder="<?php echo $ayarlarVeri['il'];?>" />
        </label>
        <label>
            <span>Açık Adres</span>
            <input id="acikadres" type="text" name="acikadres" placeholder="<?php echo $ayarlarVeri['acikadres'];?>" />
        </label>
       
      
        
         <label>
            <span> </span> 
      
            <button class="button" name="ayarkaydet" value="Güncelle">Güncelle</button>
        </label>    
    </form>
</div>