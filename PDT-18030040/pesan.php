<?php
include 'koneksi.php';

  $Nama_Hotel       = $_POST['Nama_Hotel'];
  $Nama_Pemesan       = $_POST['Nama_Pemesan'];
  $Jumlah_Kamar       = $_POST['Jumlah_Kamar'];
  $Harga       = $_POST['Harga'];
  
   $query = "INSERT INTO data_admin (Nama_Hotel, Nama_Pemesan, Jumlah_Kamar, Harga) VALUES ( '$Nama_Hotel', '$Nama_Pemesan', '$Jumlah_Kamar', '$Harga')";
   $query1 = "INSERT INTO data_user (Nama_Hotel, Nama_Pemesan, Jumlah_Kamar, Harga) VALUES ( '$Nama_Hotel', '$Nama_Pemesan', '$Jumlah_Kamar', '$Harga')";
                  $result = mysqli_query($koneksi, $query);
                  $result = mysqli_query($koneksi, $query1);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Pemesanan Berhasil.');window.location='login.php';</script>";
                  }