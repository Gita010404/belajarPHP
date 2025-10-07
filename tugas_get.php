<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nama = htmlspecialchars($_GET['nama']);
    $nim = htmlspecialchars($_GET['nim']);
    $tanggal_lahir = htmlspecialchars($_GET['tanggal_lahir']);
    $alamat = htmlspecialchars($_GET['alamat']);
} else {
    echo "Akses tidak valid!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #eb7badff, #0b0b0bff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .data-container {
      background-color: white;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
      animation: fadeIn 0.8s ease-in-out;
    }

    .data-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    p {
      line-height: 1.6;
      margin-bottom: 10px;
      color: #444;
    }

    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      background-color: #080808ff;
      color: white;
      padding: 10px;
      border-radius: 8px;
      transition: background 0.3s ease;
    }

    a:hover {
      background-color: #060606ff;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="data-container">
    <h2>Data Mahasiswa</h2>
    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>NIM:</strong> <?= $nim ?></p>
    <p><strong>Tanggal Lahir:</strong> <?= $tanggal_lahir ?></p>
    <p><strong>Alamat:</strong> <?= nl2br($alamat) ?></p>

    <a href="index.html">Kembali ke Form</a>
  </div>
</body>
</html>
