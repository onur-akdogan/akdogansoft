

<?php 
include 'header.php';
?>




<div class="listeleme">
 
  <button class="buttonEkle" value="Güncelle"><a href="referansEkle.php">Referans Ekle</a></button>
</div>




<div class="icerikSayfa">
<div class="satirlar">
<h3>Referanslar</h3>
<table style="background-color:#61a6e2;">
<tr style="background-color:#255681;color:#ffffff;">
        <td><h4>Referans ID</h4> </td>
          <td><h4>Referans Resim</h4> </td>
          <td><h4>Referans İsim</h4> </td>
          
          
          <td><h4>Sil</h4> </td>
       
        </tr>

        <?php   while($referansCek=$referansSor->fetch(PDO::FETCH_ASSOC)){
          $referansId=$referansCek["referansId"];
      
          ?>
        <tr>
        <td><?php echo $referansCek['referansId'] ?></td>
          <td><img src="http://localhost/akdogansoft/<?php echo $referansCek['fotoYol'] ?>" alt="Resim Yok" width="100px"></td>
          <td><?php echo $referansCek['referansBaslik'] ?></td>
      
          <td><a href='netting/silme.php?referansId=<?php echo $referansCek['referansId'] ?>'>Sil</a></td>
     
        </tr>
        <?php } ?>
       
</table>
</div></div>