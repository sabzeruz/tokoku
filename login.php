<?php
include "koneksi_inventaris.php";

session_start();

$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE username = '$username' AND password = '$password'");

if(mysqli_num_rows($sql) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:index.php");
} else {
    header("location:login_page.php");
}

?>