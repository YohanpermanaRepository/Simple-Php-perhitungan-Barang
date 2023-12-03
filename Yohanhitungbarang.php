<html>
<head>
    <title>Yohan Permana </title>
</head>
<link href="style.css" type="text/css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">


<body>
<?php 
    if (isset($_GET['submit'])) {
        $nama = $_GET['nama'];
        $harga = $_GET['harga'];
        $jumlah = $_GET['jumlah'];
        $harga = intval($harga);
        $Totalharga = $harga * $jumlah; 
        switch ($harga) {
            case $harga >= 500000:
                $diskon = 0.2 * $Totalharga;
                $bonus = "TV 14 Inch";
                break;
            case $harga >= 200000:
                $diskon = 0.15 * $Totalharga;
                $bonus = "MINI VACUM CLEANER";
                break;
            case $harga >= 100000:
                $diskon = 0.1 * $Totalharga;
                $bonus = "KIPAS PORTABEL";
                break;
            case $harga >= 50000:
                $diskon = 0.05 * $Totalharga;
                $bonus = "PIRING";
                break;
            case $harga < 50000:
                $diskon = 0 * $Totalharga;
                $bonus = "Tidak mendapatkan bonus";
                break;
        }
        
        $Bayartotal = $Totalharga - $diskon;
    }
    elseif (isset($_GET['reset'])) {
        $nama = "";
        $harga = "";
        $jumlah = "";
        $Totalharga = "";
        $Bayartotal = "";
        $diskon = "";
        $bonus = "";
    }

 ?>

    <div class= "judul">
    <p>PUSAT PENJUALAN</p>
    </div>

    <div class="hasil">
    <p>PILIH BARANG DAN ATUR JUMLAH</p>
    </div>


    <div class = "isi">
    <form action="" method="$_GET">      
        <table >
        <!-- =================== BAGIAN MEMILIH NAMA BARANG MENGGUNAKAN JAVASCRIPT ======================-->
        <tr>
        <td>NAMA BARANG</td>
        <td>
        <select name="nama" id="nama" onchange="price()">
        <option value="750000" <?php if($nama = 1){echo("selected");} ?>>KULKAS</option>
        <option value="400000" <?php if($nama = 2){echo("selected");} ?>>MEJIKOM</option>
        <option value="300000" <?php if($nama = 3){echo("selected");} ?>>KOMPOR</option>
        <option value="50000" <?php if($nama = 4){echo("selected");} ?>>MEJIKOM</option>
        <option value="30000" <?php if($nama = 5){echo("selected");} ?>>TEFLON</option>
        </select>
        </td>
        </tr>
        <!-- SCRIPT YANG DIGUNAKAN -->
        <script type="text/javascript">function price() {
        var x = document.getElementById("nama").value;document.getElementById("harga").value=x;}
        </script>

        <!-- ============================================================================================= -->
    
        <tr>
        <td>HARGA</td>
        <td><input type="text" name="harga" id="harga" value=" <?=$harga; ?>"readonly></td>
        </tr>
        <tr>
        <td>JUMLAH</td>
        <td><input type="number" name="jumlah" value="<?= $jumlah; ?>"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td>
        <button class="tombol1" type="submit" name="submit">BELI</button>
        <button class="tombol2" type="submit" name="reset">KOSONGKAN</button>
        </td>
        </tr>
    </table>
    </form>
    </div>
    
    <div class="hasil">
    <p>HASIL</p>
    </div>
    <!-- ============================================================================================= -->
    <!-- Output/ menampilkan hasil perhitungan -->

    <div class= "output">   
    <table>
        <tr>
        <td>HARGA TOTAL</td>
        <td><input type="text" name="total" value="<?= $Totalharga; ?>"></td>
        </tr>
        <tr>
        <td>DISKON</td>
        <td><input type="text" name="diskon" value="<?= $diskon; ?>" ></td>
        </tr>
        <tr>
        <td>TOTAL BAYAR</td>
        <td><input type="text" name="totalbayar" value="<?= $Bayartotal; ?>"></td>
        </tr>
        <tr>
        <td>BONUS</td>
        <td><input type="text" name="bonus" value="<?= $bonus; ?>" ></td>         
        </tr>
    </table>
    </div>
    <!-- ============================================================================================= -->

</body>
</html>






