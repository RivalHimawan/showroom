<?php
include 'koneksi.php';
$sql = 'SELECT * FROM pembeli';
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="id">
<head>
    <title> Data penyewa </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <div class="head">
        <h1>
            pembeli
        </h1>
    </div>
    <div class="nav">
        <ul>
        <li><a href="home.php">home</a></li>
        <li><a href="menu_mobil.php">Nama mobil,Harga&jenis</a></li>
        <li><a href="gambar_mobil.php">Gambar mobil</a></li>
        <li><a href="menu_pembeli.php">Nama pembeli</a></li>
        <li><a href="transaksi.php">Transaksi</a></li>
        <li><a href="index login.php">Log out</a></li>
     </ul>
</div>
</div>
<center>
    <div class="box">
        <h2 style="text-align: center; margin-bottom: 20px;">
           Showroom Mobil
    </h2>
    <a href="tambah_pembeli.php" style="text-align: center; font-size:20px; margin-top: 30px; margin-bottom 25px;">
           Tambah pembeli
    </a>
    <table border="1" cellspacing="0" cellpadding="8" width="50%" style="text-align: center; font-size: 20px; margin-bottom 20px;">
        <tr>
            <th>id pembeli</th>
            <th>Nama pembeli</th>
            <th>Alamat</th>
            <th>No telp</th>
        </tr>
        <?php while
            ($row = mysqli_fetch_assoc($result)) {
         ?>
         <tr>
            <td><?= $row['id_pembeli']?></td>
            <td><?= $row['nama_pembeli']?></td>
            <td><?= $row['alamat']?></td>
            <td><?= $row['no telp']?></td>
         </tr>
         <?php } ?>
         </table>
        </div>
       </center>
     </body>
    </html>
         