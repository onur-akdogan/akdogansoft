<?php 
include 'header.php';
?>

<div class ="forms">
<form action="netting/islem.php" method="post" enctype="multipart/form-data" class="formstyle">
   <input type="file" name="dosya" />
   <input type="hidden" name="dosyayol" value="urunEkle">
   <input type="submit" value="Gönder" />
</form>
</div>

<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Ürün Ekle 

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
            <input id="UrunBaslik" type="text" name="UrunBaslik" placeholder="Başlık Giriniz" />
        </label>
        
        <label>
            <span>Açıklama</span>
            <input id="urunIcerik" type="text" name="urunIcerik" placeholder="Ön açıklama Giriniz" />
        </label>

        <label>
            <span>Fiyat :</span>
            <input id="urunFiyat" type="text" name="urunFiyat" placeholder="Fiyat Giriniz" />
        </label>
        
          <p>
        <label>
            <span> </span> 
      
            <button class="button" name="urunkaydet" value="Ekle">Ekle</button>
        </label>   
        </p>
          
    </form>
</div>