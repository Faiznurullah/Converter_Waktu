<?php
include 'model.php';
 ?>
<!doctype html>
 <html lang="id">
 <head>
<title>Input OOP</title>
 </head>
   <body>
     <center><b>Converter Waktu Detik Ke Menit</b></center>

     <form method="post" name="kirim" enctype="multipart/form-data">
      <label>Berapa Detik</label>
      <input type="number" name='angka' placeholder="Detik Ke Menit...">
      <input type="submit" name='kirim' value="Kirim">
    </form>

    <?php
   $menit_detik = $objek_time->detik_menit();
    ?>

  </body>
 </html>
