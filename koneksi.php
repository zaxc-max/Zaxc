<?php
$servername = "sql211.byethost32.com"; // Server dari byethost
$username = "b32_38439134"; // Username DB dari byethost
$password = "rezawahyu"; // Password DB dari byethost
$database = "b32_38439134_Zaxc"; // Nama database lo

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>