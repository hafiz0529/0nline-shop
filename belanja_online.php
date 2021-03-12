<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <header>
        <h1 class="h1">
            Online Shop
        </h1>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <form action=" " method="POST">
                <p class="nama_pem"> Nama Pembeli</p>
                <input class="box" type="text" name="costemer">
                <p class="produk"> Pilih Produk </p>
                <ul>
                    <li class= "a"><input type="radio" name="item" value="kulkas"> Kulkas</li>
                    <li class= "a"><input type="radio" name="item" value="lemari"> Lemari </li>
                    <li class= "a"><input type="radio" name="item" value="mesin cuci"> Mesin Cuci </li>
                    <li class= "a"><input type="radio" name="item" value="tv"> TV </li>
                    <li class= "a"><input type="radio" name="item" value="kasur"> Kasur </li>
                </ul>
                <p class="jumlah"> Jumlah Baarang </p>
                <input class= "boxs" type="text" name="jumlah">
                <p class="kurir"> Kurir </p>
                <select class="pilih" name="kurir">
                    <option selected>Pilih Kurir :</option>
                    <option  value="JNE">JNE</option>
                    <option  value="Si Halu Cepat"> Si Halu Cepat</option>
                    <option  value="JNT">JNT</option>
                    <option  value="Gojek">Gojek</option>
                </select>
                <br/>
                <input class= "kirim" type="submit" name="kirim" value="kirim">
            </form>

            <?php

            error_reporting(0);

                $costemer = $_POST['costemer'];
                $item = $_POST['item'];
                $jumlah = $_POST['jumlah'];
                $kurir = $_POST['kurir'];
                $total_harga = $_POST['total_harga'];
                if($item== "kulkas") {
                    $total_harga = 6000000 * $jumlah;
                } else if($item=="lemari") {
                    $total_harga = 3500000 * $jumlah;
                } else if($item=="mesin cuci") {
                    $total_harga = 4000000 * $jumlah;
                } elseif ($item=="tv") {
                    $total_harga = 3000000 * $jumlah;
                } else {
                    $total_harga = 2500000 * $jumlah;
                }

            ?>
            <div>
                <table id="harga">
                    <thead>
                        <tr>
                            <th>Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Kulkas : Rp. 6.000.0000</th>
                        </tr>
                        <tr>
                            <th>Lemari : Rp. 3.500.000</th>
                        </tr>
                        <tr>
                            <th>Mesin Cuci : Rp. 4.000.000</th>
                        </tr>
                        <tr>
                            <th>TV Rp. 3.000.000</th>
                        </tr>
                        <tr>
                            <th>Kasur Rp. 2.500.000</th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div>
            <table id="daftar_biaya">
                    <thead>
                        <tr>
                            <th>Daftar Biaya </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Nama Pembeli :  <?= $costemer; ?></th>
                        </tr>
                        <tr>
                            <th>Pilih Produk :  <?= $item; ?></th>
                        </tr>
                        <tr>
                            <th>Jumlah Barang : <?= $jumlah; ?></th>
                        </tr>
                        <tr>
                            <th>Kurir : <?= $kurir; ?></th>
                        </tr>
                        <tr>
                            <th>Total Harga : <?= $total_harga; ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</body>
</html>