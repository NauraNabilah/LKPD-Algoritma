<?php
function hitungHargaTotal($jumlahBuku) {
    $hargaPerEksemplar = 5000;
    $jumlahEksemplar = $jumlahBuku * 10; 
    $totalHarga = 0;

    if ($jumlahEksemplar <= 100) {

        $totalHarga = $jumlahEksemplar * $hargaPerEksemplar;
    } elseif ($jumlahEksemplar > 100 && $jumlahEksemplar <= 200) {

        $harga100Pertama = 100 * $hargaPerEksemplar * 0.95;
        $sisaEksemplar = $jumlahEksemplar - 100;
        $hargaSisa = $sisaEksemplar * $hargaPerEksemplar * 0.85;
        $totalHarga = $harga100Pertama + $hargaSisa;
    } elseif ($jumlahEksemplar > 200) {

        $harga100Pertama = 100 * $hargaPerEksemplar * 0.93;
        $harga100Kedua = 100 * $hargaPerEksemplar * 0.83;
        $sisaEksemplar = $jumlahEksemplar - 200;
        $hargaSisa = $sisaEksemplar * $hargaPerEksemplar * 0.73;
        $totalHarga = $harga100Pertama + $harga100Kedua + $hargaSisa;
    }

    return $totalHarga;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlahBuku = $_POST['jumlah_buku'];
    $hargaTotal = hitungHargaTotal($jumlahBuku);

    echo "Jumlah buku yang dibeli: " . htmlspecialchars($jumlahBuku) . "<br>";
    echo "Total harga yang harus dibayar: Rp. " . number_format($hargaTotal, 0, ',', '.') . "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Harga Buku</title>
</head>
<body>
    <h2>Hitung Harga Total Buku</h2>
    <form method="post" action="">
        <label for="jumlah_buku">Jumlah Buku :</label>
        <input type="number" id="jumlah_buku" name="jumlah_buku" required>
        <br><br>
        <input type="submit" value="Hitung Harga">
    </form>
</body>
</html>
