<?php
include 'koneksi.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$role = $_SESSION['role'];

$sql = "SELECT * FROM mahasiswa INNER JOIN jurusan ON mahasiswa.jurusan_id = jurusan.jurusan_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <?php if ($role === 'admin') : ?>
        <a href="tambah_mahasiswa.php">Tambah Data</a>
    <?php endif; ?>

    <a href="logout.php">Logout</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Nomor</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

<?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['nomor']; ?></td>
            <td><?php echo $row['nama_jurusan']; ?></td>
            <td>
                <?php if ($role === 'admin') : ?>
                    <a href="edit_mahasiswa.php?id=<?php echo $row['id']; ?>">Edit</a> |
                    <a href="hapus_mahasiswa.php?id=<?php echo $row['id']; ?>">Hapus</a>
                <?php endif; ?>

            </td>
        </tr>
<?php } ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>