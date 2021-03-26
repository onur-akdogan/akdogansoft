<?php 
include 'header.php';


?>







<div class="sayfa">
    <div class="sliderKonum">
        <div class="slider">
        <?php   while($sliderCek=$sliderSor->fetch(PDO::FETCH_ASSOC)){ ?>
            <a class="img-bir">
                <img src="http://localhost/akdogansoft/<?php echo $sliderCek['fotoYol'] ?>" alt="resim" width="32.9%" height="100%">
            </a>
      
            <?php } ?>
           
        </div>
    </div>
</div>   


<br><br>

<div class="basliklar">
  
<center><p><h2>Duyurular</h2></p></center>

</div>

<div class="duyurular">
<table style="background-color:rgb(187, 187, 187);">
<tr style="background-color:#777;color:#ffffff;">
          <td><h4>Duyuru Resim</h4> </td>
          <td><h4>Duyuru İsim</h4> </td>
          <td><h4>Duyuru Açıklama</h4> </td>
        </tr>
        <?php   while($duyuruCek=$duyuruSor->fetch(PDO::FETCH_ASSOC)){
          $duyuruId=$duyuruCek["duyuruId"];
          ?>
        <tr>
          <td><img src="http://localhost/akdogansoft/<?php echo $duyuruCek['fotoYol'] ?>" alt="Resim Yok" width="300px"></td>
          <td><?php echo $duyuruCek['duyuruBaslik'] ?></td>
          <td><?php echo $duyuruCek['duyuruIcerik'] ?></td>
        </tr>
        <?php } ?>
</table>



</div>


<div class="basliklar">
  
<center><p><h2>Bizi Tercih Eden Bazı Firmalar</h2></p></center>

</div>


<div class="referanslar">
    <?php   while($referansCek=$referansSor->fetch(PDO::FETCH_ASSOC)){ ?>
      <div class="img">

                <a target="#" href="">
                <center><img src="http://localhost/akdogansoft/<?php echo $referansCek['fotoYol'] ?>" alt="referans" width="10px" height="10px"></center>
                </a>

                <div class="desc"><h3><?php echo $referansCek['referansBaslik'] ?></h3></div>
      </div>

    <?php } ?>

</div>


<div class="basliklar">
  
<center><p><h3>Sizlere Sunduğumuz Bazı Hizmetler</h3></p></center>

</div>
<div class="hizmetler">
<?php   while($hizmetCek=$hizmetSor->fetch(PDO::FETCH_ASSOC)){ ?>
      <div class="img">

                <a target="#" href="">
                <center><img src="http://localhost/akdogansoft/<?php echo $hizmetCek['fotoYol'] ?>" alt="hizmet" width="10px" height="10px"></center>
                </a>

                <div class="desc"><h3><?php echo $hizmetCek['hizmetBaslik'] ?></h3></div>
      </div>

    <?php } ?>
    </div>
  



<?php

include 'footer.php';
?>