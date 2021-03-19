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
        <h1>Duyuru Ekle 
            <span>Gerekli Bilgileri Lüften Eksiksiz Doldurunuz.</span>
        </h1>
  
        <label>
        <span>Resim Ekle :</span>
        <input type="file" id="resim" class="upload" accept="image/*" multiple/>
        </label>
        <label>
            <span>Başlık :</span>
            <input id="baslik" type="text" name="baslik" placeholder="Başlık Giriniz" />
        </label>
        
        <label>
            <span>Açıklama</span>
            <input id="aciklama" type="text" name="aciklama" placeholder="Ön açıklama Giriniz" />
        </label>

        <label>
            <span>Detay :</span>
            <textarea id="detay" name="detay" placeholder="Detay Giriniz"></textarea>
        </label> 

          <p>
        <label>
            <span> </span> 
      
            <button class="button" name="ayarkaydet" value="Güncelle">Güncelle</button>
        </label>   
        </p>
          
    </form>
</div>