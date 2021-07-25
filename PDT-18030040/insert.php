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
  <h1 >Daftar</h1>
</div>

	  <center>
        <h2>Silahkan Registras</h2>
      <center>
      <form method="POST" action="insert_process.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Username</label>
         <input type="text" name="username" required=""/>
        </div>
        <div>
          <label>Password</label>
         <input type="password" name="password" required="" />
        </div>
        <div>
         <button type="submit">Register</button>
        </div>
        </section>
      </form>
</body>
</html>