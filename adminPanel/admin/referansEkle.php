<?php 
include 'header.php';
?>


<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Slider Ekle 

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
            <input id="referansBaslik" type="text" name="referansBaslik" placeholder="Başlık Giriniz" />
        </label>
          <p>
        <label>
            <span> </span> 
            <button class="button" name="referanskaydet" value="Güncelle">Ekle</button>
        </label>   
        </p>
          
    </form>
</div>