

<?php 
include 'header.php';
?>




<div class="listeleme">
 
  <button class="buttonEkle" value="Güncelle"><a href="kullaniciEkle.php">Kullanıcı Ekle</a></button>
</div>







<div class="icerikSayfa">
<div class="satirlar">
<h3>Kullanıcılar</h3>
<table style="background-color:#61a6e2;">
<tr style="background-color:#255681;color:#ffffff;">
        <td><h4>Kullanıcı ID</h4> </td>
          <td><h4>Kullanıcı Resim</h4> </td>
          <td><h4>Kullanıcı Ad</h4> </td>
          <td><h4>Kullanıcı Mail</h4> </td>
          <td><h4>Kullanıcı Şifresi</h4> </td>
          <td><h4>Sil</h4> </td>
       
        </tr>

        <?php   while($kullanicilariCek=$kullanicilariSor->fetch(PDO::FETCH_ASSOC)){
          $kullanici_id=$kullanicilariCek["kullanici_id"];
      
          ?>
        <tr>
        <td><?php echo $kullanicilariCek['kullanici_id'] ?></td>
          <td><img src="http://localhost/akdogansoft/<?php echo $kullanicilariCek['kullanici_resim'] ?>" alt="Resim Yok" width="100px"></td>
          <td><?php echo $kullanicilariCek['kullanici_ad'] ?></td>
      
          <td><?php echo $kullanicilariCek['kullanici_mail'] ?></td>
          <td><?php echo $kullanicilariCek['kullanici_password'] ?></td>

          <td><a href='netting/silme.php?kullanici_id=<?php echo $kullanicilariCek['kullanici_id'] ?>'>Sil</a></td>
        
        </tr>
        <?php } ?>
       
</table>
</div></div>