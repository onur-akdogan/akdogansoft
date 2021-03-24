
<?php 
include 'header.php';
?>

<div class="listeleme">
 
  <button class="buttonEkle" value="Güncelle"><a href="duyuruEkle.php">Duyuru Ekle</a></button>
</div> 

<div class="icerikSayfa">
<div class="satirlar">
<h3>Duyurular</h3>
<table style="background-color:#61a6e2;">
<tr style="background-color:#255681;color:#ffffff;">
        <td><h4>Duyuru ID</h4> </td>
          <td><h4>Duyuru Resim</h4> </td>
          <td><h4>Duyuru İsim</h4> </td>
          
          <td><h4>Duyuru Açıklama</h4> </td>
          <td><h4>Sil</h4> </td>
       
        </tr>

        <?php   while($duyuruCek=$duyuruSor->fetch(PDO::FETCH_ASSOC)){
          $duyuruId=$duyuruCek["duyuruId"];
      
          ?>
        <tr>
        <td><?php echo $duyuruCek['duyuruId'] ?></td>
          <td><img src="http://localhost/akdogansoft/<?php echo $duyuruCek['fotoYol'] ?>" alt="Resim Yok" width="100px"></td>
          <td><?php echo $duyuruCek['duyuruBaslik'] ?></td>
      
          <td><?php echo $duyuruCek['duyuruIcerik'] ?></td>
          <td><a href='netting/silme.php?duyuruId=<?php echo $duyuruCek['duyuruId'] ?>'>Sil</a></td>
     
        </tr>
        <?php } ?>
       
</table>
</div></div>