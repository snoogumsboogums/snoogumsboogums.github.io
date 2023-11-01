<?php
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Anda perlu memverifikasi kredensial di sini
// Misalnya, jika kredensial benar, atur $kredensial_benar menjadi true
$kredensial_benar = true;

if ($kredensial_benar) {
    // Kredensial benar, arahkan ke halaman read.php
    header("Location: read.php");
    exit(); // Pastikan untuk keluar agar kode berhenti di sini
} else {
    echo "Kredensial salah, tampilkan pesan kesalahan atau tindakan lain yang sesuai.";
}
?>