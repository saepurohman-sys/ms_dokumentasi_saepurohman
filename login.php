<?php
// Mengambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Simulasi validasi sederhana
if ($email == "admin@mail.com" && $password == "123") {
    echo "Login berhasil";
} else {
    echo "Login gagal";
}
?>
