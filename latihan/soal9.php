<?php 
class motor {
    public $merek;
    public $warna;
    public $cc;

    public function __construct($merek, $warna, $cc)
    {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->cc = $cc;
    }

    public function jalan()
    {
        return $this->merek . "sedang berjalan";
    }
}

$motor1 = new motor("zonda", "putih", "150cc");
echo "merek motor : " . $motor1->merek . "<br>";
echo "warna motor : " . $motor1->warna . "<br>";
echo "jenis motor : " . $motor1->cc . "<br>";
?>