<?php 
include 'header.php';
?>


<div class ="forms">
<form action="netting/islem.php" method="post" enctype="multipart/form-data" class="formstyle">

<span>Resim Ekle :</span>
 <input type="file" name="dosya" />
   <input type="hidden" name="dosyayol" value="referansEkle">
<span>   <button class="button">Ekle</button></span>
 
   
</form>
</div>

<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Referans Ekle 

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
            <span>Başlık :</span>
            <input id="referansBaslik" type="text" name="referansBaslik" placeholder="Başlık Giriniz" />
        </label>
        <input type="hidden" name="fotoYol" value="adminPanel/admin/dosyalar/<?php echo $fotoisim?>">
          <p>
        <label>
            <span> </span> 
            <button class="button" name="referanskaydet" value="Güncelle">Ekle</button>
        </label>   
        </p>
          
    </form>
</div>