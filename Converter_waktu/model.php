<?php

 class waktu{

//method antara menit dan detik
   public function menit_detik(){

     if(isset($_POST['kirim'])){
       $angka = htmlspecialchars($_POST['angka']);
       $detik = 60 * $angka;

       echo $detik." Detik";
     }

   }

   public function detik_menit(){

     if(isset($_POST['kirim'])){
       $angka = htmlspecialchars($_POST['angka']);
       $detik = 1/60 * $angka;
       echo $detik." Menit";

     }

   }


//method antara jam dan menit
   public function jam_menit(){

     if(isset($_POST['kirim'])){
       $angka = htmlspecialchars($_POST['angka']);
       $jam = 60 * $angka;
       echo $jam." Menit";

     }


   }

   public function menit_jam(){
     if(isset($_POST['kirim'])){
       $angka = htmlspecialchars($_POST['angka']);
       $jam = 1/60 * $angka;
       echo $jam." Jam";

     }
   }

//method Detik dan jam
  public function jam_detik(){
    if(isset($_POST['kirim'])){
      $angka = htmlspecialchars($_POST['angka']);
      $jam = 3600 * $angka;
      echo $jam." Detik";

    }

  }

public function detik_jam(){
  if(isset($_POST['kirim'])){
    $angka = htmlspecialchars($_POST['angka']);
    $jam = 1/3600 * $angka;
    echo $jam." Jam";

  }

}


 }

$objek_time = new waktu;

?>
