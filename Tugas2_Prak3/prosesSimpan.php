<!DOCTYPE html>
<html>
<head>
    <title>Simpan Data</title>
</head>
<body>
    <h1>Simpan Data Mahasiswa</h1>
    <hr>
    <?php
        $nrp = $_POST["nrp"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jurusan = $_POST["jurusan"];

        if($jurusan=="Telekomunikasi"){
            $id_jurusan = "te";
        }else if($jurusan=="Teknik Informaatika"){
            $id_jurusan = "if";
        }else if($jurusan=="Sistem Informasi"){
            $id_jurusan = "si";
        }else if($jurusan=="Ilmu Komunikasi"){
            $id_jurusan = "il";
        }

        $conn = mysqli_connect("localhost","root","")
        or die("Koneksi gagal");
        mysqli_select_db($conn,"mahasiswa");
        echo "NRP      : $nrp <br>";
        echo "Nama     : $nama <br>";
        echo "Alamat  : $alamat <br>";
        echo "ID Jurusan : $id_jurusan <br>";

       $sqlstr="insert into mahasiswa(NRP,nama,alamat,id_jurusan) values ('$nrp','$nama','$alamat','$id_jurusan')";
        $hasil = mysqli_query($conn,$sqlstr);
        echo "Simpan data mahasiswa berhasil dilakukan";
        echo "<br>";
    ?>
     <a href="index.html">Kembali ke halaman utama</a>
</body>
</html>