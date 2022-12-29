<html>
    <head>
        <title> Hitung Transaksi </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="topnav"> 
            <p id="top-header"><i>Nadhila Catering</i></p>      
            <a href="upload.html" action="upload.html">Add Photo</a>
            <a class="active" href= "#transaction">Transaction</a>
            <a href="main.html" action="main.html">Home</a> 
    </div>
    <div class="fixed">
            <footer>
                 Based in Blitar &copy; Nadhila Catering
            </footer>
    </div>
    </body>
</html>
<?php
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $menu = $_POST['menu'];
    $jumlah = $_POST['jumlah'];
    
    if($status == "Member"){
        if($menu == "Paket 1"){
            $harga = 20000;
            if($jumlah == 1){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.05)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah == 2 || $jumlah == 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.07)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah > 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.10)*$jumlah;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 2"){
            $harga = 30000;
            if($jumlah == 1){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.05)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah == 2 || $jumlah == 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.07)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah > 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.10)*$jumlah;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 3"){
            $harga = 50000;
            if($jumlah == 1){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.05)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah == 2 || $jumlah == 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.07)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah > 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.10)*$jumlah;
                $bayar = $total - $diskon;
            }
        }
    }else if($status == "Non-Member"){
        if($menu == "Paket 1"){
            $harga = 20000;
            if($jumlah >=1 && $jumlah <=5){
                $total = $harga * $jumlah;
                $diskon = 0;
                $bayar = $total - $diskon;
            }else if($jumlah >=6 || $jumlah <=10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.05;
                $bayar = $total - $diskon;
            }else if($jumlah > 10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.07;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 2"){
            $harga = 30000;
            if($jumlah >=1 && $jumlah <=5){
                $total = $harga * $jumlah;
                $diskon = 0;
                $bayar = $total - $diskon;
            }else if($jumlah >=6 || $jumlah <=10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.05;
                $bayar = $total - $diskon;
            }else if($jumlah > 10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.07;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 3"){
            $harga = 50000;
            if($jumlah >=1 && $jumlah <=5){
                $total = $harga * $jumlah;
                $diskon = 0;
                $bayar = $total - $diskon;
            }else if($jumlah >=6 || $jumlah <=10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.05;
                $bayar = $total - $diskon;
            }else if($jumlah > 10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.07;
                $bayar = $total - $diskon;
            }
        }
    }
    
    echo "<h3> Total Transaksi </h3>";
    echo "Nama Pembeli     : $nama <br>";
    echo "Status Pembeli   : $status <br>";
    echo "Total Harga      : $total <br>";
    echo "Total Diskon     : $diskon <br>";
    echo "============================= <br>";
    echo "Harga Bayar      : $bayar <br>";
    
?>