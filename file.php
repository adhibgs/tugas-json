<?php
$json_data=file_get_contents("file.json");
$obj = json_decode($json_data);
echo $obj->{'nim'};
echo "<br>";
echo $obj->{'nama'};
echo "<br>";
echo $obj->{'alamat'};
echo "<br>";
echo $obj->{'no_hp'};
echo "<br>";
echo $obj->{'mata_kuliah'};
?>