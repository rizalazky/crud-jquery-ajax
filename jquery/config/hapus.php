<?php
require('koneksi.php');

$id=$_POST['id'];
echo "ID =".$id;
$hapus=$konek->query("DELETE FROM identitas WHERE id='$id'");

if($hapus){
    echo "Berhasil";
}else{
    echo mysqli_error($hapus);
}