<?php 
$username = "admin";
$password = "12345";

if ($username == "admin") {
    if ($password == "12345") {
        echo "Login berhasil!";
    } else {
        echo "Password salah!";
    }
} else {
    echo "Username tidak ditemukan!";
}
?>