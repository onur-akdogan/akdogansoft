<?php 
include 'header.php';
?>

<div class ="forms">
<form action="netting/islem.php" method="post" enctype="multipart/form-data" class="formstyle">
   <input type="file" name="dosya" />
   <input type="hidden" name="dosyayol" value="duyuruEkle">
   <input type="submit" value="Gönder" />
</form>
</div>

<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Duyuru Ekle 
            <span>Gerekli Bilgileri Lüften Eksiksiz Doldurunuz.</span>
        </h1>
        <label>
        <input type="hidden" name="fotoYol" value="adminPanel/admin/dosyalar/<?php echo $fotoisim?>">
            <span>Başlık :</span>
            <input id="duyuruBaslik" type="text" name="duyuruBaslik" placeholder="Başlık Giriniz" />
        </label>
        
        <label>
            <span>Açıklama</span>
            <input id="duyuruIcerik" type="text" name="duyuruIcerik" placeholder="Ön açıklama Giriniz" />
        </label>


        
        <label>
            <span> </span> 
      
            <button class="button" name="duyuruekle" value="Güncelle">Ekle</button>
        </label>   
        </p>
          
    </form>
</div>