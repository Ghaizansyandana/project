<?php 

// Data karyawan (contoh input)
$nama       = "Ghaizan";
$id         = "EMP001";
$jabatan    = "Manager"; // Manager / Supervisor / Staff
$gaji_pokok = 8000000;
$status     = "tetap"; // tetap / kontrak
$menikah    = true;    // true = sudah menikah, false = belum

// Hitung Tunjangan Jabatan
$tunjangan_jabatan = 0;
if ($jabatan == "Manager") {
    $tunjangan_jabatan = 0.20 * $gaji_pokok;
} elseif ($jabatan == "Supervisor") {
    $tunjangan_jabatan = 0.15 * $gaji_pokok;
} elseif ($jabatan == "Staff") {
    $tunjangan_jabatan = 0.10 * $gaji_pokok;
}

// Hitung Tunjangan Transportasi
$tunjangan_transport = 0;
if ($status == "tetap") {
    $tunjangan_transport = 500000;
} else {
    $tunjangan_transport = 0;
}

// Hitung Tunjangan Keluarga
$tunjangan_keluarga = 0;
if ($menikah == true) {
    $tunjangan_keluarga = 300000;
}

// Hitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_transport + $tunjangan_keluarga;

// Hitung pajak 5%
$pajak = 0.05 * $gaji_kotor;

// Gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

// Tampilkan hasil
echo "<h2>Slip Gaji Karyawan</h2>";
echo "Nama Karyawan : $nama <br>";
echo "ID Karyawan   : $id <br>";
echo "Jabatan       : $jabatan <br>";
echo "Status        : $status <br>";
echo "Menikah       : " . ($menikah ? "Ya" : "Tidak") . "<br><br>";

echo "Gaji Pokok              : Rp" . number_format($gaji_pokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan       : Rp" . number_format($tunjangan_jabatan, 0, ',', '.') . "<br>";
echo "Tunjangan Transportasi  : Rp" . number_format($tunjangan_transport, 0, ',', '.') . "<br>";
echo "Tunjangan Keluarga      : Rp" . number_format($tunjangan_keluarga, 0, ',', '.') . "<br>";
echo "---------------------------------<br>";
echo "Gaji Kotor              : Rp" . number_format($gaji_kotor, 0, ',', '.') . "<br>";
echo "Pajak (5%)              : Rp" . number_format($pajak, 0, ',', '.') . "<br>";
echo "---------------------------------<br>";
echo "<b>Gaji Bersih           : Rp" . number_format($gaji_bersih, 0, ',', '.') . "</b><br>";

?>