<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku (Khusus Admin)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<main class="col-8 mx-auto mt-5">
    <h3>Tambah Buku</h3>
    <form action="proses_tambah_buku.php" method="POST" enctype="multipart/form-data">
        <p class="fw-medium mt-3">
            nama buku:
            </p>
                <input type="text" name="nama_buku" value="" class="form-control border border-info">
            <p class="fw-medium mt-3">
            Foto:
            </p>
                <input type="text" name="foto" value="" class="form-control border border-info">
            <p class="fw-medium mt-3">
            Deskripsi:
            </p>
                <input type="text" name="deskripsi" value="" class="form-control border border-info"> 
                <input type="submit" name="simpan" value="Tambah Buku" class="btn btn-primary mt-3">
        </form>
</main>
    </body>
</html>


