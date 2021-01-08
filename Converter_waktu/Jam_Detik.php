<?php
include 'model.php';
 ?>
<!doctype html>
 <html lang="id">
 <head>
<title>Input OOP</title>
 </head>
   <body>
     <center><b>Converter Waktu Jam Ke Detik</b></center>

     <form method="post" name="kirim" enctype="multipart/form-data">
      <label>Berapa Jam</label>
      <input type="number" name='angka' placeholder="Jam Ke Detik...">
      <input type="submit" name='kirim' value="Kirim">
    </form>

    <?php
   $menit_detik = $objek_time->jam_detik();
    ?>

  </body>
 </html>
