<?php


$hostname = "localhost";
$username = "root";
$password = "";
$db = "pos_warung_averroes";

$conn = mysqli_connect($hostname, $username, $password, $db);

if ($conn) {
    // echo "Koneksi Berhasil";
} else {
    echo "Koneksi Gagal";
}
