
<?php 
include 'header.php';
?>


<div class="listeleme">
 
  <button class="buttonEkle" value="Güncelle"><a href="urunEkle.php">Ürün Ekle</a></button>
</div>

<div class="icerikSayfa">
<div class="satirlar">
<h3>Ürünleriniz</h3>
<table style="background-color:#61a6e2;">
<tr style="background-color:#255681;color:#ffffff;">
        <td><h4>Ürün ID</h4> </td>
          <td><h4>Ürün Resim</h4> </td>
          <td><h4>Ürün İsim</h4> </td>
          <td><h4>Ürün Fiyat</h4> </td>
          <td><h4>Ürün Açıklama</h4> </td>
          <td><h4>Sil</h4> </td>
       
        </tr>

        <?php   while($urunCek=$urunSor->fetch(PDO::FETCH_ASSOC)){
          $urunId=$urunCek["urunId"];
      
          ?>
        <tr>
        <td><?php echo $urunCek['urunId'] ?></td>
          <td><img src="http://localhost/akdogansoft/<?php echo $urunCek['fotoYol'] ?>" alt="Resim Yok" width="100px"></td>
          <td><?php echo $urunCek['UrunBaslik'] ?></td>
          <td><?php echo $urunCek['urunFiyat'] ?></td>
          <td><?php echo $urunCek['urunIcerik'] ?></td>
          <td><a href='netting/silme.php?urunId=<?php echo $urunCek['urunId'] ?>'>Sil</a></td>
     
        </tr>
        <?php } ?>
       
</table>
</div>
</div>
