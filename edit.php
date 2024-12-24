<?php
// Koneksi ke database
$con = new mysqli("localhost", "root", "", "keuanganku_db");
if ($con->connect_error) {
    die("Koneksi gagal:" . $con->connect_error);
}

$id = $_GET["id_karyawan"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama_karyawan"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $golongan = $_POST["golongan"];

    $sql = "UPDATE table_karyawan SET nama_karyawan='$nama', email='$email', alamat='$alamat', golongan='$golongan' WHERE id_karyawan='$id'";
    if ($con->query($sql) === TRUE) {
        header("Location: side1.php"); // Redirect ke halaman utama setelah berhasil
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
} else {
    $sql = "SELECT * FROM table_karyawan WHERE id_karyawan='$id'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="styles/style_edite.css">
</head>
<body>
    <div class="container">
        <h2>Edit Karyawan</h2>
        <form method="post">
            <label>Nama:</label>
            <input type="text" name="nama_karyawan" value="<?= $row["nama_karyawan"] ?>" required>
            <label>Email:</label>
            <input type="email" name="email" value="<?= $row["email"] ?>" required>
            <label>Alamat:</label>
            <input type="text" name="alamat" value="<?= $row["alamat"] ?>" required>
            <label>Golongan:</label>
            <input type="text" name="golongan" value="<?= $row["golongan"] ?>" required>
            <button class="cancel">Cancel</button>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>