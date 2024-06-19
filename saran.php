<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .message {
            font-size: 20px;
            color: green;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['message'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $number = htmlspecialchars($_POST['number']);
            $message = htmlspecialchars($_POST['message']);

            // Membuka file saran.txt dan menambahkan data baru
            $file = fopen("saran.txt", "a") or die("Tidak bisa membuka file!");
            $data = "Nama: " . $name . "\nEmail: " . $email . "\nNomor Telepon: " . $number . "\nPesan: " . $message . "\n\n";
            fwrite($file, $data);
            fclose($file);

            echo "<div class='message'>Terima kasih sudah menginput!</div>";
        } else {
            echo "<div class='message' style='color: red;'>Ada data yang tidak lengkap.</div>";
        }
    } else {
        echo "<div class='message' style='color: red;'>No data submitted.</div>";
    }

    echo "<a href='index.php'>Kembali ke halaman awal</a>";
    ?>
</body>
</html>
