<?php
include 'model.php';
 ?>
<!doctype html>
 <html lang="id">
 <head>
<title>Input OOP</title>
 </head>
   <body>
     <center><b>Converter Waktu Detik ke Jam</b></center>

     <form method="post" name="kirim" enctype="multipart/form-data">
      <label>Berapa Detik</label>
      <input type="number" name='angka' placeholder="Detik ke Jam...">
      <input type="submit" name='kirim' value="Kirim">
    </form>

    <?php
   $menit_detik = $objek_time->detik_jam();
    ?>

  </body>
 </html>
