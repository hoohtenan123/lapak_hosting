<?php 
$server = "localhost";
$user = "admin123";
$pass = "lapakhosting123";
$database = "db_hosting";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
   die('Koneksi gagal');
}

function dd($value){
   return var_dump($value);die;
}
/*
 else
 {
    echo "koneksi berhasil";
 }
*/
?>