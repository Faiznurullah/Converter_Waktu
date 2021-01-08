<?php
include 'model.php';
 ?>
<!doctype html>
 <html lang="id">
 <head>
<title>Input OOP</title>
 </head>
   <body>
     <center><b>Converter Waktu Menit Ke Detik</b></center>

     <form method="post" name="kirim" enctype="multipart/form-data">
      <label>Berapa Menit</label>
      <input type="number" name='angka' placeholder="Menit Ke Detik...">
      <input type="submit" name='kirim' value="Kirim">
    </form>
    
    <?php
   $menit_detik = $objek_time->menit_detik();
    ?>

  </body>
 </html>
