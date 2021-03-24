<?php 
include 'header.php';



?>
<br><br>
<br>


<div class="icerikSayfa">

        <h1>Hoşgeldiniz</h1>




<div class="satirlar">
<h3>Ürünleriniz</h3>
<table style="background-color:#ee6565; border-color:yellow" border=1>
<tr style="background-color:#812525;color:#ffffff;">
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
<h3>Hizmetleriniz</h3>
<table style="background-color:#59a3e4; border-color:yellow" border=1>
<tr style="background-color:#255681;color:#ffffff;">
        <td><h4>Ürün ID</h4> </td>
          <td><h4>Ürün Resim</h4> </td>
          <td><h4>Ürün İsim</h4> </td>
          <td><h4>Ürün Fiyat</h4> </td>
          <td><h4>Ürün Açıklama</h4> </td>
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
</div>










        


</body>
</html>