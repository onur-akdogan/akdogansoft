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
dsfsd





 


<?php

include 'footer.php';
?>