<?php
include 'header.php';
?>
    

<div class="basliklar">
  
<center><p><h2>HİZMETLERİMİZ</h2></p></center>
<hr>


<div class="hizmetler">
<?php   while($hizmetCekhepsi=$hizmetSorhepsi->fetch(PDO::FETCH_ASSOC)){ ?>
      <div class="img">

                <a target="#" href="">
                <center><img src="http://localhost/akdogansoft/<?php echo $hizmetCekhepsi['fotoYol'] ?>" alt="hizmet" width="10px" height="10px"></center>
                </a>

                <div class="desc"><h3><?php echo $hizmetCekhepsi['hizmetBaslik'] ?></h3></div>
                <div class="desc"><h4><?php echo $hizmetCekhepsi['hizmetFiyat'] ?> TL</h4></div>
      </div>

    <?php } ?>
    </div>
  




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


<?php
include 'footer.php';
?>