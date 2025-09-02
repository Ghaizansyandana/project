<?php 
$siswa = [
    ["nama" => "Andi", "kelas" => "XI RPL"],
    ["nama" => "Budi", "kelas" => "X TKJ"],
    ["nama" => "Citra", "kelas" => "XI MM"],
];

foreach ($siswa as $data) {
    echo "Nama: " . $data["nama"] . " - Kelas: " . $data["kelas"] . "<br>";
}
?>