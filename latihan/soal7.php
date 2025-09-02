<?php
$siswa = [
    "gojin" => 80,
    "fadlan" => 75,
    "jahran" => 90,
    "bimo "=> 60,
    "dimas" => 50,
    "prabowo" => 66,
];
echo"HASIL KELULUSAN SISWA";
foreach ($siswa as $nama => $nilai) {
    if ($nilai >= 75) {
        echo "<br>$nama: $nilai (lulus)"; 
    } else {
        echo "<br>$nama: $nilai (tidak lulus";
    }
}
