<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: slide-up 0.5s ease;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .message {
            margin-top: 20px;
            padding: 15px;
            background-color: #d4edda;
            border-left: 5px solid #28a745;
            color: #155724;
            font-weight: bold;
            animation: fade-in 1s ease;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
        }

        @keyframes slide-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Proses Data</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = htmlspecialchars($_POST['username']);
            $zoneID = htmlspecialchars($_POST['zoneID']);
            $paymentMethod = htmlspecialchars($_POST['paymentMethod']);
            $total = htmlspecialchars($_POST['total']);
            $game = htmlspecialchars($_POST['game']);
            $item = htmlspecialchars($_POST['ItemName']);

            // Menyimpan data ke dalam file konfirmasiorder.txt
            $file = fopen("konfirmasiorder.txt", "a") or die("Tidak bisa membuka file!");
            $data = "Nama game: " . $game . "\nNama Item: " . $item . "\nUID: " . $username . "\nServer: " . $zoneID . "\nMetode Pembayaran: " . $paymentMethod . "\nTotal Pembayaran: " . $total . "\n\n";
            fwrite($file, $data);
            fclose($file);

            echo "<div class='message'>Data berhasil disimpan! Terima kasih atas pesanan Anda.</div>";
        } else {
            echo "<div class='message'>Tidak ada data yang dikirim.</div>";
        }
        ?>

        <a href="index.php">Kembali ke halaman awal</a>
    </div>
</body>
</html>
