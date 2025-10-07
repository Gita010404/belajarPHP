<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Formulir Mahasiswa</title>
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

    .form-container {
      background-color: white;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
      animation: fadeIn 0.8s ease-in-out;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
      font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ee63a6ff;
      border-radius: 8px;
      font-size: 14px;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: #f88db6ff;
      box-shadow: 0 0 5px rgba(241, 51, 127, 0.5);
    }

    button {
      width: 100%;
      background-color: #080808ff;
      color: white;
      border: none;
      padding: 12px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #060606ff;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <form class="form-container" action="tugas_get.php" method="GET">
    <h2>Formulir Mahasiswa</h2>

    <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
    </div>

    <div class="form-group">
      <label for="nim">NIM :</label>
      <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
    </div>

    <div class="form-group">
      <label for="tanggal_lahir">Tanggal Lahir :</label>
      <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
    </div>

    <div class="form-group">
      <label for="alamat">Alamat :</label>
      <textarea id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
    </div>

    <button type="submit">Kirim</button>
  </form>

</body>
</html>