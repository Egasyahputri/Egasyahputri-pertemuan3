<?php
// Data penjualan menggunakan array asosiatif
$penjualan = [
    ["nama" => "Produk A", "harga" => 10000, "jumlah" => 5],
    ["nama" => "Produk B", "harga" => 7500, "jumlah" => 10],
    ["nama" => "Produk C", "harga" => 12000, "jumlah" => 8]
];

// Fungsi untuk menghitung total penjualan per produk
function hitungTotalPenjualan($penjualan) {
    $total = 0;
    foreach ($penjualan as $produk) {
        $total += $produk["harga"] * $produk["jumlah"];
    }
    return $total;
}

// Tampilkan laporan penjualan dalam bentuk tabel HTML
echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Harga Per Produk</th><th>Jumlah Terjual</th><th>Total</th></tr>";

$totalKeseluruhan = 0;
$totalJumlahTerjual = 0;

foreach ($penjualan as $produk) {
    $total = $produk["harga"] * $produk["jumlah"];
    $totalJumlahTerjual += $produk["jumlah"];
    $totalKeseluruhan += $total;

    echo "<tr>";
    echo "<td>{$produk['nama']}</td>";
    echo "<td>{$produk['harga']}</td>";
    echo "<td>{$produk['jumlah']}</td>";
    echo "<td>{$total}</td>";
    echo "</tr>";
}

echo "<tr><td colspan='2'>Total Penjualan</td><td>{$totalJumlahTerjual}</td><td>{$totalKeseluruhan}</td></tr>";
echo "</table>";
?>