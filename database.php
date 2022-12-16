<?php
    $host="localhost";
    $user="admin123";
    $password="lapakhosting123";
    $db="db_hosting";
    
    $conn = mysqli_connect($host,$user,$password,$db);
    if (!$conn){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>