<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <legend>
        biodata siswa
    
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" id="">
        <br>
        <label for="">Kelas</label>
        <input type="text" name="kelas" id="">
        <br>
        <label for="">Jenis Kelamin</label>
        <select name="jenis_kelamin">
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option> 
        </select>
        <br>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="">
        <br>
        <label for="">Agama</label>
        <select name="agama">
            <option value="islam">islam</option>
            <option value="kristen">kristen</option> 
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
</legend>
    <?php
    class biodata 
    {
        public $nama,
        $kelas,
        $jenis_kelamin,
        $tanggal_lahir,
        $agama;

        public function __construct($nama, $kelas, $jenis_kelamin, $tanggal_lahir, $agama)
        {
            $this->nama = $nama;
            $this->kelas = $kelas;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->tanggal_lahir = $tanggal_lahir;
            $this->agama = $agama;
        }

        public function tampilkanBiodata()
        {
            return "Nama: " . $this->nama . "<br>" .
                   "Kelas:" . $this->kelas . "<br>" .
                   "Jenis kelamin:" . $this->jenis_kelamin . "<br>" .
                   "tanggal lahir:" . $this->tanggal_lahir . "<br>" .
                   "agama:" . $this->agama . "<br>";

        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $a = $_POST['nama'];
        $b = $_POST['kelas'];
        $c = $_POST['jenis_kelamin'];
        $d = $_POST['tanggal_lahir'];
        $e = $_POST['agama'];
        $biodata1 = new biodata($a, $b, $c, $d, $e);
        echo $biodata1->tampilkanBiodata();
    }
