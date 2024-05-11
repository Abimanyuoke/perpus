<?php
// Mulai session
session_start();

// Pastikan pengguna sudah login sebelum logout
if(isset($_SESSION['id_siswa'])) {
    // Ambil user_id dari session
    $id_siswa = $_SESSION['id_siswa'];

    // Sambungkan ke database
    include "koneksi.php"; // Sesuaikan dengan file koneksi Anda

    // Query untuk menyimpan data logout
    $query = "INSERT INTO logout_activity (id_siswa) VALUES ('$id_siswa')";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Hapus semua data session
    session_unset();

    // Hancurkan session
    session_destroy();

    // Redirect ke halaman login atau halaman lain yang sesuai
    header("Location: login.php");
    exit;
} else {
    // Jika pengguna tidak login, redirect ke halaman login
    header("Location: login.php");
    exit;
}
?>
