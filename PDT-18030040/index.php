<?php
  include('koneksi.php');
  
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="layout.css" type="text/css">
</head>
<body>

<div class="header">
  <h1 >Pesan</h1>
</div>

	  <center>
        <h2>Silahkan Registras</h2>
      <center>
      <form method="POST" action="pesan.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Hotel</label>
         <input type="text" name="Nama_Hotel" required="" />
        </div>
        <div>
          <label>Nama Pemesan</label>
         <input type="text" name="Nama_Pemesan" required=""/>
        </div>
        <div>
          <label>Jumlah Kamar</label>
         <input type="text" name="Jumlah_Kamar" required="" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="Harga" required="" />
        </div>
        <div>
         <button type="submit">Pesan</button>
        </div>
        </section>
      </form>
      <form action="user.php">
        <input type="submit" value="Cek Data">
    </form>
</body>
</html>