<!DOCTYPE html>
<html>
<head>
    <title>Tugas No.2</title>
</head>
<body>
    <h3>Hasil warna dan harga</h3>
    <?php
        function ubahWarna($warna, $nama, $harga){
            echo '<font color="'.$warna.'">'.$nama.'</font><br>';
            echo '<font color="'.$warna.'">Dengan harga '.$harga.'</font><br>';
        }

        $nama = $_POST["nama"];
        $warna = $_POST["warna"];

        $jumlahkarakter = strlen($nama);
        if($jumlahkarakter <= 10){
            $harga = 300 * $jumlahkarakter;
        }else if($jumlahkarakter <= 20){
            $harga = 500 * $jumlahkarakter;
        }else{
            $harga = 700 * $jumlahkarakter;
        }
        if($warna!=NULL){
            ubahWarna($warna, $nama, $harga);
        }else{
            $warna='red';
            ubahWarna($warna, $nama, $harga);
        }
    ?>
</body>
</html>