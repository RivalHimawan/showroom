<?php
include 'koneksi.php';
 $sql = 'SELECT * FROM mobil';
 $result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="id">
<head>
    <title> Data Pesanan </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <div class="head">
        <h1>
            SHOWROOM
        </h1>
    </div>
    <div class="nav">
        <ul>
        <li><a href="home.php">home</a></li>
        <li><a href="menu_mobil.php">Nama mobil,harga&jenis</a></li>
        <li><a href="gambar_mobil.php">Gambar mobil</a></li>
        <li><a href="menu_pembeli.php">Nama pembeli</a></li>
        <li><a href="transaksi.php">Transaksi</a></li>
        <li><a href="index login.php">Log out</a></li>
     </ul>
</div>

<center>
    <div class="box">
        <h2 style="text-align: center; margin-bottom: 20px;">
           Kasir Showroom mobil
    </h2>
    <a href="tambah_Showroom.php" style="text-align: center; font-size:20px; margin-top: 30px; margin-bottom 25px;">
           Tambah mobil
    </a>
    <table border="1" cellspacing="0" cellpadding="8" width="50%" style="text-align: center; font-size: 20px; margin-bottom 20px;">
        <tr>
            <th>No</th>
            <th>Nama mobil</th>
            <th>Harga mobil</th>
            <th>Jenis</th>
        </tr>
        <?php while
            ($row = mysqli_fetch_assoc($result)) {
         ?>
         <tr>
            <td><?= $row['id_mobil']?></td>
            <td><?= $row['nama_mobil']?></td>
            <td><?= $row['harga']?></td>
            <td><?= $row['jenis']?></td>
         </tr>
         <?php } ?>
         </table>
        </div>
       </center>
     </body>
    </html>
         