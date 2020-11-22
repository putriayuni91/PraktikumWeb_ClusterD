<!DOCTYPE html>
<html>
<head>
    <title>Koneksi Database</title>
</head>
<body>
    <h1>Koneksi Database</h1>
    <?php
        $koneksi = mysqli_connect("localhost","root","","mahasiswa");

        if(mysqli_connect_error()){
            echo "Koneksi database gagal : ".mysql_connect_error();
        }else{
            echo "Koneksi Sukses";
        }
    ?>
</body>
</html>