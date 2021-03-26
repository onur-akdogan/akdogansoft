

<?php 
include 'header.php';
?>




<div class="listeleme">
 
 
</div>







<div class="icerikSayfa">
<div class="satirlar">
<h3>Son Mesajlarınız</h3>
<table style="background-color:#DADADA;">
<tr style="background-color:#888;color:#ffffff;">
        <td><h4>ID</h4> </td>

          <td><h4> Ad</h4> </td>
          <td><h4> Mail</h4> </td>
          <td><h4>Konu</h4> </td>
          <td><h4>İcerik</h4> </td>
          <td><h4>Sil</h4> </td>
       
        </tr>

        <?php   while($mesajlariCek=$mesajlariSor->fetch(PDO::FETCH_ASSOC)){
          $kullanici_id=$mesajlariCek["musteriId"];
      
          ?>
        <tr>
        <td><?php echo $mesajlariCek['musteriId'] ?></td>
         
          <td><?php echo $mesajlariCek['musteriAdi'] ?></td>
      
          <td><?php echo $mesajlariCek['musteriMail'] ?></td>
          <td><?php echo $mesajlariCek['musteriKonu'] ?></td>
          <td><?php echo $mesajlariCek['musteriIcerik'] ?></td>
          <td><a href='netting/silme.php?musteriId=<?php echo $mesajlariCek['musteriId'] ?>'>Sil</a></td>
        
        </tr>
        <?php } ?>
       
</table>
</div></div>