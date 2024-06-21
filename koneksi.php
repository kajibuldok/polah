<?php
$koneksi = mysqli_connect("localhost","root","","jajalan");

if (mysqli_connect_errno()) {
    echo "KOneksi Database Gagal". mysqli_connect_errno();
}
?>