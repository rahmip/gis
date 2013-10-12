<?php

require ('koneksi.php');

$sql = mysql_query("SELECT nama,lat,longitude from ibadah");

while ($row = mysql_fetch_array($sql)) 
$cabang[] = $row;

$json = json_encode($cabang);

echo $json;
?>
