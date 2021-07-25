<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

if($username == 'admin'){
    header("location:index.php");
}
else{
$query_sql = "SELECT * FROM tabel_login WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);
if(mysqli_num_rows($result) > 0){
    $_SESSION['username'] = $username;
    $my = urlencode('MCN solution');
    echo "<a href=\"index.php?name=$my\">";
    header("location:index.php");
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <title>Slick Login</title>
    <meta name="description" content="slick Login">
    <meta name="author" content="Webdesigntuts+">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
    <script type="text/javascript" src="placeholder.js"></script>
</head>
 
<body>
<form id="slick-login", method="POST">
        <label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="me@tutsplus.com">
        <label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="password">
        <input type="submit" value="Log In">
    </form>
    <form id="slick-register", action="insert.php">
        <input type="submit" value="Register">
    </form>
</body>
 
</html>