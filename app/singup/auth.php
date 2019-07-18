<?php
session_start();
$conn = mysqli_connect('localhost','root','','bunda');

if(isset($_POST['klik'])) {
    $query = "INSERT INTO login(nama,username,password) VALUES('". $_POST['name'] ."','". $_POST['username'] ."','". md5($_POST['pass']) ."')";

    $dat = mysqli_query($conn, $query);

    if($dat) {
        $_SESSION['nama'] = $dat['nama'];
        $_SESSION['username'] = $dat['username'];
        $_SESSION['id'] = $dat['id'];
        header('location:../login/login.php');
    } else {
        header('location:singup.php');
    }
}
   