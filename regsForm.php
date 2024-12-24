<?php
// Koneksi ke database
$con = new mysqli("localhost", "root", "", "keuanganku_db");
if ($con->connect_error) {
    die("Koneksi gagal:" . $con->connect_error);
}

// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $nomor_hp = $_POST['nomor_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $posisi = $_POST['posisi'];

    // Proses Upload File
    $target_dir = "uploads/";
    $cv_file = $target_dir . basename($_FILES["cv"]["name"]);
    $cv_file_type = strtolower(pathinfo($cv_file, PATHINFO_EXTENSION));

    // Validasi jenis file
    if ($cv_file_type != "pdf" && $cv_file_type != "doc" && $cv_file_type != "docx") {
        die("Hanya file PDF, DOC, atau DOCX yang diperbolehkan.");
    }

    // Upload file
    if (move_uploaded_file($_FILES["cv"]["tmp_name"], $cv_file)) {
        // Simpan data ke database
            $sql = "INSERT INTO table_inbox (nama_lengkap, tanggal_lahir, email, nomor_hp, jenis_kelamin, posisi) VALUES ('$nama_lengkap', '$tanggal_lahir', '$email', '$nomor_hp', '$jenis_kelamin', '$posisi')";
            if ($con->query($sql) === TRUE) {
                header("Location: regsForm.php"); // Redirect ke halaman utama setelah berhasil
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="styles/style_form.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Pendaftaran</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="nama_lengkap" placeholder="Masukkan nama Anda" required>

            <label for="dob">Tanggal Lahir</label>
            <input type="date" id="dob" name="tanggal_lahir" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="phone">Nomor HP</label>
            <input type="tel" id="phone" name="nomor_hp" placeholder="Masukkan nomor HP Anda" required>

            <label for="posisi">Posisi</label>
            <select id="posisi" name="posisi" required>
                <option value="">Pilih Posisi</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
                <option value="Intern">Intern</option>
                <option value="Freelance">Freelance</option>
            </select>

            <label>Jenis Kelamin</label>
            <div class="gender-group">
                <label>
                    <input type="radio" name="jenis_kelamin" value="Pria" required> Pria
                </label>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Wanita" required> Wanita
                </label>
            </div>

            <label for="cv">Upload CV</label>
            <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>

            <button type="submit">Daftar</button>
        </form>
    </div>
</body>
</html>
