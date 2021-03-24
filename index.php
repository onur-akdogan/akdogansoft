<?php 
include 'header.php';


?>


 




       <div class="sayfa">
    <div class="sliderKonum">
        <div class="slider">
        <?php   while($sliderCek=$sliderSor->fetch(PDO::FETCH_ASSOC)){
    
      
          ?>

            <img src="http://localhost/akdogansoft/<?php echo $sliderCek['fotoYol'] ?>" width="750px">
           
            
            
            <?php } ?>
        </div>
    </div>
</div>

        








<?php

include 'footer.php';
?>