<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #ffc1cc, #ffe4e9);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            padding: 20px 30px;
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #ff6f61;
            font-size: 28px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
            transition: 0.3s ease;
            font-family: Arial, sans-serif;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #ff6f61;
            box-shadow: 0 0 8px rgba(255, 111, 97, 0.5);
        }

        textarea {
            resize: none;
        }

        button {
            width: 100%;
            background: linear-gradient(135deg, #fc67fa, #f96f6f);
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 20px;
            padding: 10px;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(252, 103, 250, 0.5);
        }

        button:active {
            transform: translateY(0);
            box-shadow: 0 3px 8px rgba(252, 103, 250, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>TITA'S LAST TEEN PARTY</h1>
        <form action="proses.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="calxxx@gmail.com">

            <label for="isi">Pesan:</label>
            <textarea id="isi" name="isi" rows="4" required placeholder="Tuliskan pesan Anda di sini"></textarea>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
