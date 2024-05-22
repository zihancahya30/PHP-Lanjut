<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Array</title>
</head>
<?php
// Buat array dengan index nama dan umur
$data = array(
    array("nama" => "Zihan", "umur" => 19),
    array("nama" => "Triaa", "umur" => 19),
    array("nama" => "Akma", "umur" =>19),
    array("nama" => "Zahro", "umur" => 19),
    array("nama" => "Mige", "umur" => 18),
    array("nama" => "Alya", "umur" => 19),
    array("nama" => "Amin", "umur" => 19),
    array("nama" => "Irsyad", "umur" => 19),
    array("nama" => "Amrizal", "umur" => 19),
    array("nama" => "Alfin", "umur" => 19),
    array("nama" => "Vava", "umur" => 19),
    array("nama" => "Amro", "umur" => 21),
    array("nama" => "Fahrul", "umur" => 19),
    array("nama" => "Titta", "umur" => 19),
    array("nama" => "Hesti", "umur" => 19)
);

// Konversi array menjadi format JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON data
echo nl2br($json_data);
?>
</html>