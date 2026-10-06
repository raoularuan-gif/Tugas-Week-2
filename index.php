<?php
$output = ""; // Variabel untuk menampung hasil

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menyimpan data ke dalam array 
    $data = [
        'Nama'          => htmlspecialchars($_POST['nama']),
        'Email'         => htmlspecialchars($_POST['email']),
        'Jenis Kelamin' => htmlspecialchars($_POST['jenis_kelamin']),
        'Alamat'        => htmlspecialchars($_POST['alamat']),
        'Nomor Telepon' => htmlspecialchars($_POST['no_telp'])
    ];

    $output = "<div class='hasil'><h3> Data Berhasil Dikirim</h3>";
    foreach ($data as $label => $value) {
        $output .= "<p><b>$label:</b> $value</p>";
    }
    $output .= "</div>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Pengguna</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #e9ecef; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; padding: 20px; }
        .card { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        h2 { text-align: center; color: #343a40; margin: 0 0 25px; }
        
        label { display: block; margin-bottom: 6px; font-weight: 600; color: #495057; font-size: 14px; }
        input[type="text"], input[type="email"], input[type="tel"], textarea {
            width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px;
            box-sizing: border-box; margin-bottom: 15px; font-family: inherit; transition: 0.3s;
        }
        input:focus, textarea:focus { border-color: #0d6efd; outline: none; }
        
        .radio-group { display: flex; gap: 15px; align-items: center; margin-bottom: 15px; }
        .radio-group label { margin-bottom: 0; font-weight: normal; }
        
        button { width: 100%; padding: 12px; background: #0d6efd; color: #fff; border: none; border-radius: 6px; font-size: 16px; font-weight: bold; cursor: pointer; transition: 0.3s; }
        button:hover { background: #0b5ed7; }
        
        .hasil { background: #d1e7dd; color: #0f5132; border: 1px solid #badbcc; padding: 20px; border-radius: 8px; margin-bottom: 25px; }
        .hasil h3 { margin: 0 0 15px; font-size: 18px; border-bottom: 1px solid #badbcc; padding-bottom: 10px; }
        .hasil p { margin: 8px 0; font-size: 15px; }
    </style>
</head>
<body>

    <div class="card">
        <?= $output; ?>

        <h2>Form Data Pengguna</h2>
        <form action="" method="POST">
            
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama Anda" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="contoh@email.com" required>

            <label>Jenis Kelamin</label>
            <div class="radio-group">
                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                <label for="laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                <label for="perempuan">Perempuan</label>
            </div>

            <label>Alamat</label>
            <textarea name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>

            <label>Nomor Telepon</label>
            <input type="tel" name="no_telp" placeholder="08123456789" required>

            <button type="submit" name="submit">Submit Data</button>

        </form>
    </div>

</body>
</html>