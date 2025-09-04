<?php 
class siswa {
    public $nama;
    public $kelas;
    public $tinggi;
    public $berat;

    public function __construct($nama, $kelas, $tinggi, $berat)
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->tinggi = $tinggi;
        $this->berat = $berat;

    }

    public function belajar()
    {
        return $this->nama . " sedang belajar";
    }
}

$siswa1 = new siswa("budi", "XI RPL 3", "170", "66kg");
echo "nama siswa  :" . $siswa1->nama . "<br>";
echo "kelas :" . $siswa1->kelas . "<br>";
echo "tinggi :" . $siswa1->tinggi . "<br>";
echo "berat :" . $siswa1->berat . "<br>";
echo "<br>";

$siswa2 = new siswa("rehan", "XI RPL 3", "160", "57kg");
echo "nama siswa  :" . $siswa2->nama . "<br>";
echo "kelas :" . $siswa2->kelas . "<br>";
echo "tinggi :" . $siswa2->tinggi . "<br>";
echo "berat :" . $siswa2->berat . "<br>";
echo "<br>";

$siswa3 = new siswa("dadan", "XI RPL 3", "180", "65kg");
echo "nama siswa  :" . $siswa3->nama . "<br>";
echo "kelas :" . $siswa3->kelas . "<br>";
echo "tinggi :" . $siswa3->tinggi . "<br>";
echo "berat :" . $siswa3->berat . "<br>";
echo "<br>";

?>