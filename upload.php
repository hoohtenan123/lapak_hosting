<?php
// Load file koneksi.php
include "connect.php";
// Ambil Data yang Dikirim dari Form
var_dump($_FILES);
//die;
$nama_file = $_FILES['buktibayar']['name'];
$ukuran_file = $_FILES['buktibayar']['size'];
$tipe_file = $_FILES['buktibayar']['type'];
$tmp_file = $_FILES['buktibayar']['tmp_name'];

echo $nama_file."<br>";
echo $ukuran_file."<br>";
echo $tipe_file."<br>";
echo $tmp_file."<br>";
/*
// Set path folder tempat menyimpan gambarnya
$path = "images/".$nama_file;
if($tipe_file == "image/jpg" || $tipe_file == "image/png" || $tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 300000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 300kb
    // Jika ukuran file kurang dari sama dengan 300kb, maka lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $query = "INSERT INTO gambar(nama,ukuran,tipe) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."')";
      $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: pembayaran.php"); // Redirectke halaman pembayaran.php
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba mengrimkan data ke database.";
        echo "<br><a href='pembayaran.php'>Kembali Ke pembayaran</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='pembayaran.php'>Kembali Ke pembayaran</a>";
    }
  }else{
    // Jika ukuran file lebih dari 300kb, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 300kb";
    echo "<br><a href='pembayaran.php'>Kembali Ke pembayaran</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='pembayaran.php'>Kembali Ke pembayaran</a>";
}

*/
?>
