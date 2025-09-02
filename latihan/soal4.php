<?php 
$daftar = [
    "Daftar Siswa"  => ["Andi", "Budi", "Siti"],

];

foreach ($daftar as $nama => $siswa) {
    echo " $nama:<br>";
    foreach ($siswa as $nama_siswa) {
        echo "- $nama_siswa <br>";
    }
    echo "<br>";
}
?>