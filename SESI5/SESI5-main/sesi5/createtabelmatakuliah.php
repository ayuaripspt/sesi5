<?php
    include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

   if ($cnn){
    $matkul = "tbMATKUL";
    $sql= "CREATE TABLE $matkul(
        kodemk VARCHAR(8) PRIMARY KEY,
        matakuliah VARCHAR(10),
        sks INT
        
    )";
    $hasil = mysqli_query($cnn, $sql);
    if ($hasil){
        echo "Pembuatan tabel " . $matkul . " Sukses";
    }else{
        echo "Pembuatan tabel " . $matkul . " Gagal";
    }

  }else{
     echo "Koneksi ke Mysql Gagal";

   }
   
   
    