<?php
require('koneksi.php');

if(isset($_POST['submit'])){
    echo "tersubmit";
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];

    $sql="INSERT INTO identitas(nama,alamat) VALUES ('$nama','$alamat')";

    if($konek->query($sql)){
        echo "berhasil";
        header('location:../index.html');
    }else{
        echo mysqli_error($konek);
    }
}else{
    echo $_POST['nama'];
}