<?php 
include 'header.php';
?>

<div class ="forms">
<form action="netting/islem.php" method="post" enctype="multipart/form-data" class="formstyle">

<span>Resim Ekle :</span>
 <input type="file" name="dosya" />
   <input type="hidden" name="dosyayol" value="duyuruEkle">
<span>   <button class="button">Ekle</button></span>
 
   
</form>
</div>

<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Duyuru Ekle 
            <span>Gerekli Bilgileri Lüften Eksiksiz Doldurunuz.</span>
        </h1>
        
        <?php 
$fotoisim=$_GET['durum'];
if ($_GET['durum']=="ok") {?>

<h4>     <b style="color:green;">İşlem Başarılı...</b></h4>
    
<?php } elseif ($_GET['durum']=="no") {?>

<h4>  <b style="color:red;">İşlem Başarısız...</b></h4>

<?php }
?>
        <label>
   

        <input type="hidden" name="fotoYol" value="adminPanel/admin/dosyalar/<?php echo $fotoisim?>">
            <span>Başlık :</span>
            <input id="duyuruBaslik" type="text" name="duyuruBaslik" placeholder="Başlık Giriniz" />
        </label>
        
        <label>
            <span>Açıklama</span>
            <input id="duyuruIcerik" type="text" name="duyuruIcerik" placeholder="Ön açıklama Giriniz" />
        </label>
        <input type="hidden" name="fotoYol" value="adminPanel/admin/dosyalar/<?php echo $fotoisim?>">

        
        <label>
            <span> </span> 
      
            <button class="button" name="duyuruekle" value="Güncelle">Ekle</button>
        </label>   
        </p>
          
    </form>
</div>