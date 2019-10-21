<?php
require('koneksi.php');

$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

$edit="UPDATE identitas SET nama='$nama',alamat='$alamat' WHERE id='$id'";

if($konek->query($edit)){
    echo "behasil";
}