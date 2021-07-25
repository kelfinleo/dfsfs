<?php
include 'koneksi.php';

  $username       = $_POST['username'];
  $password       = $_POST['password'];
  
   $query = "INSERT INTO tabel_login (username, password) VALUES ( '$username', '$password')";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Berhasil Registrasi.');window.location='login.php';</script>";
                  }