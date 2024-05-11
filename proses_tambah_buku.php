<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nama_buku']) && isset($_POST['deskripsi']) && isset($_POST['foto'])) {
        $nama_buku = $_POST['nama_buku'] ?? '';
        $deskripsi = $_POST['deskripsi'] ?? '';
        $foto = $_POST['foto'] ?? '';

        if (empty($nama_buku)) {
            echo "<script>alert('Nama buku tidak boleh kosong');location.href='tambah_buku.php'</script>";
        } else if (empty($foto)) {
            echo "<script>alert('Foto tidak boleh kosong');location.href='tambah_buku.php'</script>";
        } else {
            include "koneksi.php";
            $stmt = $conn->prepare("INSERT INTO buku (nama_buku, foto, deskripsi) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nama_buku, $foto, $deskripsi);
            if ($stmt->execute()) {
                echo "<script>alert('Sukses menambahkan Buku');window.location.href='tambah_buku.php'</script>";
            } else {
                echo "<script>alert('Gagal menambahkan Buku');window.location.href='tambah_buku.php'</script>";
            }
        }
    } else {
        echo "<script>alert('Data tidak lengkap');window.location.href='tambah_buku.php'</script>";
    }
}
?>
