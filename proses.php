<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas 2 Pemrogaman web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="input-box" action="proses.php" method="get">
    <center><table class="table-box"border="1">
        <tr>
            <td colspan="3"><center>Input Produk</center></td
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><?= $_GET["nama"];  ?></td>
        <tr>
            <td>Jumlah Barang</td>
            <td>:</td>
            <td><?= $_GET["jumlah"];  ?></td>
        </tr>
        <tr>
            </form>
        </tr>
    </table></center>
</body>
</html>