<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "Nim : ";echo $obj->Nim;
echo "<br>";
echo "Nama : ";echo $obj->Nama;
echo "<br>";
echo "Progdi : ";echo $obj->Progdi;
echo "<br>";
echo "Mata Kuliah : ";echo $obj->MatKul[0];
echo "<br>";
echo $obj->MatKul[1];
echo "<br>";
echo $obj->MatKul[2];
?>