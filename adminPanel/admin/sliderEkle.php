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
        <h1>Slider Ekle 

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
    
        </label>
        <label>
            <input type="hidden" name="fotoYol" value="adminPanel/admin/dosyalar/<?php echo $fotoisim?>">
            <span>Başlık :</span>
            <input id="sliderBaslik" type="text" name="sliderBaslik" placeholder="Başlık Giriniz" />
        </label>
          <p>
        <label>
            <span> </span> 
            <button class="button" name="sliderkaydet" value="Güncelle">Ekle</button>
        </label>   
        </p>
          
    </form>
</div>