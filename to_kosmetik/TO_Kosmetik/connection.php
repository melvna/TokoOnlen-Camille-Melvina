<?php 
/* Menghubungkan ke database */
$conn = mysqli_connect('localhost', 'root', '','to_camille');

/* Cek Error  */
if(mysqli_connect_errno()){
    /* mengembalikan kode kesalahan dari kesalahan koneksi terakhir, jika ada. */
    printf("Connect failed: %n", mysqli_connect_error());
}  

?>
