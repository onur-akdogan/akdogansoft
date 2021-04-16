<?php 
include 'header.php';


?>
 
<div class="slideshow-container">
<?php   while($sliderCek=$sliderSor->fetch(PDO::FETCH_ASSOC)){ ?>
<div class="mySlides fade">
  <img src="http://localhost/akdogansoft/<?php echo $sliderCek['fotoYol'] ?>" style="width:100%; height: 412px;">
  <div class="text"><?php echo $sliderCek['sliderBaslik'] ?></div>
</div>
<?php } ?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>

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

