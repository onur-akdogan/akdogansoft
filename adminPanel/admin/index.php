<?php 
include 'header.php';
$urunSor=$db->prepare("SELECT * FROM urunler");

$urunSor->execute();
?>

<div class="icerikSayfa">

        <h1>Hoşgeldiniz</h1>




<div class="satirlar">
<h3>Ürünler</h3>
<table border=2  bordercolor="#0040ff">
        <tr>
        <td>Ürün ID </td>
          <td>Ürün Resim </td>
          <td>Ürün İsim </td>
          <td>Ürün Fiyat </td>
          <td>Ürün Açıklama </td>
          <td>Sil </td>
       
        </tr>

        <?php   while($urunCek=$urunSor->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
        <td><?php echo $urunCek['urunId'] ?></td>
          <td><img src="http://localhost/akdogansoft/<?php echo $urunCek['fotoYol'] ?>" alt="Resim Yok" width="200px"></td>
          <td><?php echo $urunCek['UrunBaslik'] ?></td>
          <td><?php echo $urunCek['urunFiyat'] ?></td>
          <td><?php echo $urunCek['urunIcerik'] ?></td>
          <td><a href="">SİL</a></td>
        </tr>
        <?php } ?>
       
</table>
<div class="center">
<h3>Ürünler</h3>
<div class="sayfa">
    <div class="sliderKonum">
        <div class="slider">
        <?php   while($urunCek=$urunSor->fetch(PDO::FETCH_ASSOC)){ ?>
            <a class="img-bir" href="img/700x400.png">
            <img src="http://localhost/akdogansoft/<?php echo $urunCek['fotoYol'] ?>" alt="Resim Yok" width="200px">
            </a>
            <?php } ?>
        </div>
    </div>
</div>

</div>
</div>














        


</body>
</html>