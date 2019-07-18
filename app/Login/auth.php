<?php
session_start();
$conn = mysqli_connect('localhost','root','','bunda');

if(isset($_POST['login'])) {
    $query = "SELECT * FROM login WHERE username='". $_POST['username'] . "' AND password='" . md5($_POST['pass']) ."'";
    $data = mysqli_fetch_assoc(mysqli_query($conn,$query));
    

    if($data) {
        header('location:../index.php');
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['id'] = $data['id'];
    } else {
        header('location:login.php');
    }
}

else if(isset($_GET['action']) == 'logout' ) {
    $_SESSION['nama'] = '';
    $_SESSION['username'] = '';
    $_SESSION['id'] = '';
    header('location:../index.php');
}