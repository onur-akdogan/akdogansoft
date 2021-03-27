<?php
include 'header.php';
?>


<div class="basliklar">
  
<center><p><h2>HAKKIMIZDA</h2></p></center>
<hr>

</div>




<div class="yanyana">
<div class="dikdik">
<H2><?php echo $hakkimizdaVeri['hakkimizda_baslik'];?></H2>
<P><?php echo $hakkimizdaVeri['hakkimizda_icerik'];?></P>
</div>
</div>



<br><br><br><br>
<div class="yanyana">
<div class="dik">
    <h2>VİZYONUMUZ</h2>
<?php echo $hakkimizdaVeri['hakkimizda_vizyon'];?>
</div>
<div class="dik">
<h2>MİSYONUMUZ</h2>
<?php echo $hakkimizdaVeri['hakkimizda_misyon'];?>
</div>
</div>

<br><br><br><br><br><br><br><br>





<?php
include 'footer.php';
?>