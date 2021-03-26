<?php
include 'header.php';
?>


<div class="basliklar">
  
<center><p><h2>BİZE ULAŞIN</h2></p></center>
<hr>

</div>
<div class="yanyana">
    <div class="dik">
        <h2>ADRESS</h2>
        <h4><?php echo $ayarlarVeri['acikadres'];?></h4>
        <h4><?php echo $ayarlarVeri['il'];?> / <?php echo $ayarlarVeri['ilce'];?></h4>
    </div>
    <div class="dik">
        <h2>İLETİŞİM</h2>
     
        <h4>Telefon Numaramız : <?php echo $ayarlarVeri['telno'];?></h4>
        <h4>E-mail Adresimiz : <?php echo $ayarlarVeri['mail'];?></h4>
    </div>
</div>





<div class="forms">
    <form action="adminPanel/admin/netting/islem.php" method="post" class="formstyle">
        <h1>Mesajınızı giriniz 

            <span>Gerekli Bilgileri Lüften Eksiksiz Doldurunuz.

   </h1>
            </span>
         
      
        <label>
            <span>Adınız :</span>
            <input id="musteriAdi" type="text" name="musteriAdi" placeholder="Adınızı Giriniz" />
        </label>
       
        <label>
            <span>Mail Adresiniz</span>
            <input id="musteriMail" type="text" name="musteriMail" placeholder="E Posta Adresinizi Giriniz" />
        </label>

        <label>
            <span>Konu :</span>
            <input id="musteriKonu" type="text" name="musteriKonu" placeholder="Konu Giriniz" />
        </label>
        <label>
            <span>İçerik :</span>
            <textarea id="musteriIcerik" name="musteriIcerik" placeholder="İçerik Giriniz Giriniz"></textarea>
        </label>
        
          <p>
        <label>
            <span> </span> 
      
            <button class="button" name="mesajKaydet" value="Ekle">Gönder</button>
        </label>   
        </p>
          
    </form>
    <br><br><br><br><br><br>
</div>
<?php
include 'footer.php';
?>