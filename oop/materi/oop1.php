<?php 
class kucing {
    public $warna = "merah";
    public $jumlah_kaki = 4;

    public function bersuara() {
        return "meong meong";
    }

    public function berburu() {
        return "menangkap tikus";
    }
}

$kucing1 = new kucing();
echo "Warna kucing 1:" . $kucing1->warna . "<br>";
echo "jumlah kaki kucing 1:" . $kucing1->jumlah_kaki . "<br>";
echo "suara kucing 1:" . $kucing1->bersuara() . "<br>";
?>
