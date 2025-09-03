<?php
    class mobil {
        public $warna = "hitam";
        public $jumlah_roda = 4;

        public function klakson() {
            return "tin tin";
        }

        public function knalpot() {
            return "wetettett";
        }
    }

    $mobil1 = new mobil();
        echo "Warna mobil ini:" . $mobil1->warna . "<br>";
        echo "jumlah roda  mobil ini:" . $mobil1->jumlah_roda . "<br>";
        echo "suara klakson mobil ini:" . $mobil1->klakson() . "<br>";
?>