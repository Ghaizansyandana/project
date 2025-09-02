<?php
    $nilai = [
        "Andi"  => ["Matematika" => 80, "IPA" => 90, "Bahasa" => 85],
        "Budi"  => ["Matematika" => 75, "IPA" => 88, "Bahasa" => 79],
        "Citra" => ["Matematika" => 92, "IPA" => 81, "Bahasa" => 87],
    ];

    foreach ($nilai as $nama => $mapel) {
        echo "Nilai $nama:<br>";
        foreach ($mapel as $pelajaran => $angka) {
            echo "- $pelajaran: $angka <br>";
        }
        echo "<br>";
}
