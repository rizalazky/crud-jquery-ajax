<?php
$konek=new mysqli("localhost","phpmyadmin","12345678","test");

if(!$konek){
    die("koneksi Gagal");
}