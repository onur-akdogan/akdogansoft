<?php 
include 'header.php';
?>


<div class="forms">
    <form action="netting/islem.php" method="post" class="formstyle">
        <h1>Ayarlar 

            <span>Gerekli Bilgileri Lüften Eksiksiz Doldurunuz.
            <?php echo $hakkimizdaVeri['hakkimzda_baslik'];?>
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
            <span>Başlık :</span>
            <input id="hakkimizda_baslik" type="text" name="hakkimizda_baslik" placeholder="<?php echo $hakkimizdaVeri['hakkimizda_baslik'];?>" />
        </label>
        <label>
            <span>Açıklama</span>
            <input id="hakkimizda_icerik" type="text" name="hakkimizda_icerik" placeholder="<?php echo $hakkimizdaVeri['hakkimizda_icerik'];?>" />
        </label>
        <label>
            <span>Vizyonumuz :</span>
            <input id="hakkimizda_vizyon" type="text" name="hakkimizda_vizyon" placeholder="<?php echo $hakkimizdaVeri['hakkimizda_vizyon'];?>" />
        </label> 
        <label>
            <span>Misyonumuz :</span>
            <input id="hakkimizda_misyon" type="text" name="hakkimizda_misyon" placeholder="<?php echo $hakkimizdaVeri['hakkimizda_misyon'];?>" />
        
        </label> 

          
        <label>
            <span> </span> 
      
            <button class="button" name="hakkimzdakaydet" value="Güncelle">Güncelle</button>
        </label>   
        
    </form>
</div>

