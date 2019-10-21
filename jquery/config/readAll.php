<?php
require("koneksi.php");

$sql="SELECT * FROM identitas";

$result=$konek->query($sql);
$row=$result->fetch_all();

echo json_encode($row);