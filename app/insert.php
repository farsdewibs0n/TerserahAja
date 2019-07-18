<?php
session_start();
$conn = mysqli_connect('localhost','root','','bunda');

if(isset($_POST['klik'])) {
    $query = "INSERT INTO curhatan (isi_curhat, judul_curhat) VALUES ('".$_POST["curhat"]."','".$_POST["judul"]."');";

    $dat = mysqli_query($conn, $query);
    $data = $dat;

    if($data) {
        header('location:index.php');
    
    } else {
        echo("error");
    }
    
}

