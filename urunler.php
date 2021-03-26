<?php
include 'header.php';
?>


<div class="basliklar">
  
<center><p><h2>ÜRÜNLERİMİZ</h2></p></center>
<hr>




<div class="hizmetler">
<?php   while($urunCekhepsi=$urunSorhepsi->fetch(PDO::FETCH_ASSOC)){ ?>
      <div class="img">

                <a target="#" href="">
                <center><img src="http://localhost/akdogansoft/<?php echo $urunCekhepsi['fotoYol'] ?>" alt="urun" width="10px" height="10px"></center>
                </a>

                <div class="desc"><h3><?php echo $urunCekhepsi['UrunBaslik'] ?></h3></div>
                <div class="desc"><h4><?php echo $urunCekhepsi['urunIcerik'] ?></h4></div>
                <div class="desc"><h4><?php echo $urunCekhepsi['urunFiyat'] ?> TL</h4></div>
      </div>

    <?php } ?>
    </div>
  





</div>




<?php
include 'footer.php';
?>