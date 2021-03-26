<?php
include 'header.php';
?>


<div class="basliklar">
  
<center><p><h2>REFERANSLAR</h2></p></center>
<hr>

<div class="hizmetler">
<?php   while($referansCekhepsi=$referansSorhepsi->fetch(PDO::FETCH_ASSOC)){ ?>
      <div class="img">

                <a target="#" href="">
                <center><img src="http://localhost/akdogansoft/<?php echo $referansCekhepsi['fotoYol'] ?>" alt="referans" width="10px" height="10px"></center>
                </a>

                <div class="desc"><h3><?php echo $referansCekhepsi['referansBaslik'] ?></h3></div>

      </div>

    <?php } ?>
    </div>
  





</div>




<?php
include 'footer.php';
?>