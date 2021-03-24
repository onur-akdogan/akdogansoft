
<?php 
include 'header.php';
?>





<div class="listeleme">
 
  <button class="buttonEkle" value="Güncelle"><a href="sliderEkle.php">Slider Ekle</a></button>
</div>


<div class="icerikSayfa">
<div class="satirlar">
<h3>Sliderlariniz</h3>
<table style="background-color:#61a6e2;">
<tr style="background-color:#255681;color:#ffffff;">
        <td><h4>Slider ID</h4> </td>
            <td><h4>Slider Resim</h4> </td>
      
          <td><h4>Slider İsim</h4> </td>
     
          <td><h4>Sil</h4> </td>
       
        </tr>

        <?php   while($sliderCek=$sliderSor->fetch(PDO::FETCH_ASSOC)){
          $sliderId=$sliderCek["sliderId"];
      
          ?>
        <tr>
        <td><?php echo $sliderCek['sliderId'] ?></td>
          <td><img src="http://localhost/akdogansoft/<?php echo $sliderCek['fotoYol'] ?>" alt="Resim Yok" width="100px"></td>
          <td><?php echo $sliderCek['sliderBaslik'] ?></td>
   
      
          <td><a href='netting/silme.php?sliderId=<?php echo $sliderCek['sliderId'] ?>'>Sil</a></td>
     
        </tr>
        <?php } ?>
       
</table>
</div>
</div>
