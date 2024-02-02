<?php
session_start();

include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$data=mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
if(mysqli_num_rows($data)> 0){
    $_SESSION['username'] = $username;
    header("location:index.php");
}else{
    header("location:login.php");
}

?>