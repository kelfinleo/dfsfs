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
  <h1 >Tabel Pemesan</h1>
</div>
	<center>
        <h2>Data Pemesan Hotel</h2>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Hotel</th>
          <th>Nama Pemesan</th>
          <th>Jumlah Kamar</th>
          <th>Harga</th>
        </tr>
      </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM data_admin ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
	   
          <td><?php echo $no; ?></td>
          <td><?php echo $row['Nama_Hotel'];?> </td>
          <td><?php echo $row['Nama_Pemesan']; ?></td>
          <td><?php echo $row['Jumlah_Kamar']; ?></td>
		  <td><?php echo $row['Harga']; ?></td>
      </tr>
      <?php
        $no++;
      }
      ?>
	  </table>
</body>
</html>