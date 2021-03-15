<?php 
include 'header.php';
?>


<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Duyuru Ekle 
            <span>Gerekli Bilgileri Lüften Eksiksiz Doldurunuz.</span>
        </h1>
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
        
         <label>
            <span> </span> 
            <input type="button" class="button" value="Ekle" /> 
        </label>    
    </form>
</div>