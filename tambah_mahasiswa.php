<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>NIM:</label>
        <input type="text" name="nim" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Nomor:</label>
        <input type="text" name="nomor" required><br>

        <label>Jurusan_id:</label>
        <!-- <input type="text" name="jurusan_id" required><br> -->

        <select name ="jurusan_id">
            <option value="1">KDG</option>
            <option value="2">ADM</option>
            <option value="3">ITK</option>
        </select>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>