<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $zoneID = htmlspecialchars($_POST['zoneID']);
    $paymentMethod = htmlspecialchars($_POST['paymentMethod']);
    $total = htmlspecialchars($_POST['total']);
    $game=htmlspecialchars($_POST['game']);
    $item=htmlspecialchars($_POST['ItemName']);

    // Menyimpan data ke dalam file konfirmasiorder.txt
    $file = fopen("konfirmasiorder.txt", "a") or die("Tidak bisa membuka file!");
    $data = "Nama game: " . $game . "\nNama Item: " . $item . "\nUID: " . $username . "\nServer: " . $zoneID . "\nMetode Pembayaran: " . $paymentMethod . "\nTotal Pembayaran: " . $total . "\n\n";
    fwrite($file, $data);
    fclose($file);

    echo "Data berhasil disimpan! Terima kasih atas pesanan Anda.";
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
