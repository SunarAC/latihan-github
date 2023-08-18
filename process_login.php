<?php
// Koneksi ke database
$servername = "localhost";
$username = "nama_pengguna_mysql";
$password = "password_mysql";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Cek keberadaan pengguna di database
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "Login berhasil!";
    // Lanjutkan dengan sesi atau akses halaman berikutnya
} else {
    echo "Login gagal. Silakan cek kembali username dan password.";
}

$conn->close();
?>
