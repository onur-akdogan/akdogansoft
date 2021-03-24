<?php 
include 'header.php';
?>


<div class="listeleme">
 
  <button class="buttonEkle" value="Güncelle"><a href="hizmetEkle.php">Hizmet Ekle</a></button>
</div>
<div class="icerikSayfa">
<div class="satirlar">
<h3>Hizmetleriniz</h3>
<table style="background-color:#61a6e2;">
<tr style="background-color:#255681;color:#ffffff;">
        <td><h4>Ürün ID</h4> </td>
          <td><h4>Hizmet Resim</h4> </td>
          <td><h4>Hizmet İsim</h4> </td>
          <td><h4>Hizmet Fiyat</h4> </td>
          <td><h4>Hizmet Açıklama</h4> </td>
          <td><h4>Sil</h4> </td>
       
        </tr>

        <?php   while($hizmetCek=$hizmetSor->fetch(PDO::FETCH_ASSOC)){
          $hizmetId=$hizmetCek["hizmetId"];
      
          ?>
        <tr>
        <td><?php echo $hizmetCek['hizmetId'] ?></td>
          <td><img src="http://localhost/akdogansoft/<?php echo $hizmetCek['fotoYol'] ?>" alt="Resim Yok" width="100px"></td>
          <td><?php echo $hizmetCek['hizmetBaslik'] ?></td>
          <td><?php echo $hizmetCek['hizmetFiyat'] ?></td>
          <td><?php echo $hizmetCek['hizmetIcerik'] ?></td>
          <td><a href='netting/silme.php?hizmetId=<?php echo $hizmetCek['hizmetId'] ?>'>Sil</a></td>
     
        </tr>
        <?php } ?>
       
</table>
</div></div>