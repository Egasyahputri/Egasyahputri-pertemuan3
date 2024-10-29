<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
</head>
<body>

    <p>------------------------------------</p>
    <p>Sistem Pencatatan Data Penjualan</p>
    <p>----------------------------------</p>
    <p>[Form Input Data Penjualan]</p>
    <p><strong>Laporan Penjualan:</strong></p>

    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Harga Per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
        </tr>

        <?php
        $penjualan = [
            ["nama" => "Produk A", "harga" => 10000, "jumlah" => 5],
            ["nama" => "Produk B", "harga" => 7500, "jumlah" => 10],
            ["nama" => "Produk C", "harga" => 12000, "jumlah" => 8]
        ];

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
        ?>

        <tr>
            <td colspan="2">Total Penjualan</td>
            <td><?php echo $totalJumlahTerjual; ?></td>
            <td><?php echo $totalKeseluruhan; ?></td>
        </tr>
    </table>

</body>
</html>