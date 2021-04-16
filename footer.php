<?php
$ayarlarveriSorgula=$db->prepare("Select * from siteayarlar where siteId=:id");
$ayarlarveriSorgula->execute(array(
  'id'=>1
));
$ayarlarVeri=$ayarlarveriSorgula->fetch(PDO::FETCH_ASSOC);

?>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



<div class="footer">

<div class="row">
    <div class="column">
        <p><h2><?php echo $ayarlarVeri['sitebaslik'];?></h2></p>
        
        <p><h3>Telefon</h3></p>
        <p><?php echo $ayarlarVeri['telno'];?></p>
        <p><h3>E posta</h3></p>
        <p><h3><?php echo $ayarlarVeri['mail'];?></h3></p>
    </div>
    <div class="column">
    <p><h3>Adres</h3></p>
        <p><?php echo $ayarlarVeri['il'];?> / <?php echo $ayarlarVeri['ilce'];?></p>
     <br><br><br>
        <p><h3>Tüm hakları Saklıdır ve "<?php echo $ayarlarVeri['sitebaslik'];?> " a aittir.</h3></p>
        
    </div>
 
</div>

</div>

</body>
</html>