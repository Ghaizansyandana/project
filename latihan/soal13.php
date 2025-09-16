<?php
    class Form
    {
        public $nama, $tanggal_lahir, $jenis_kelamin, $tb, $bb;
        public function __construct($nama = "", $tanggal_lahir = "", $jenis_kelamin = "", $tb = 0, $bb = 0)
        {
            $this->nama          = $nama;
            $this->tanggal_lahir = $tanggal_lahir;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->tb            = $tb;
            $this->bb            = $bb;
        }

        public function hitungBmi()
        {
            if ($this->tb > 0) {
                $tinggi = $this->tb / 100;
                $bmi    = $this->bb / ($tinggi * $tinggi);
                return round($bmi, 2);
            }
            return 0;
        }

        public function statusBmi()
        {
            $bmi = $this->hitungBmi();
            if ($bmi == 0) {
                return "-";
            } elseif ($bmi < 18.5) {
                return "Kekurangan berat badan";
            } elseif ($bmi >= 18.5 && $bmi < 24.5) {
                return "Normal";
            } elseif ($bmi >= 24.5 && $bmi < 29.9) {
                return "Kelebihan berat badan";
            } else {
                return "Obesitas";
            }
        }

        public function tampil()
        {
            if (isset($_POST['submit'])) {
                $this->nama          = $_POST['nama'];
                $this->tanggal_lahir = $_POST['tanggal_lahir'];
                $this->jenis_kelamin = $_POST['jenis_kelamin'] == "1" ? "Pria" : "Wanita";
                $this->tb            = $_POST['tb'];
                $this->bb            = $_POST['bb'];
                echo $this->dis();
            }
        }

        public function umur()
        {
            if ($this->tanggal_lahir) {
                $lahir = new DateTime($this->tanggal_lahir);
                $today = new DateTime();
                $umur  = $today->diff($lahir);
                return $umur->y . " tahun, " . $umur->m . " bulan, " . $umur->d . " hari";
            }
            return "-";
        }

        public function umurTahun()
        {
            if ($this->tanggal_lahir) {
                $lahir = new DateTime($this->tanggal_lahir);
                $today = new DateTime();
                $umur  = $today->diff($lahir);
                return $umur->y;
            }
            return "-";
        }

        public function dis()
        {
            return "Nama : " . htmlspecialchars($this->nama) . "<br>"
            . "Tanggal lahir : " . htmlspecialchars($this->tanggal_lahir) . "<br>"
            . "Umur : " . $this->umur() . "<br>"
            . "Total umur (tahun): " . $this->umurTahun() . " tahun<br>"
            . "Jenis kelamin : " . htmlspecialchars($this->jenis_kelamin) . "<br>"
            . "Tinggi badan : " . htmlspecialchars($this->tb) . " cm<br>"
            . "Berat badan : " . htmlspecialchars($this->bb) . " kg<br>"
            . "BMI : " . $this->hitungBmi() . "<br>"
            . "Status BMI : " . $this->statusBmi() . "<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form BMI</title>
</head>
<body>
    <form action="" method="post">
        Nama lengkap : <input type="text" name="nama" required><br>
        Tanggal lahir : <input type="date" name="tanggal_lahir" required><br>
        Jenis kelamin :
        <select name="jenis_kelamin" required>
            <option value="1">Pria</option>
            <option value="2">Wanita</option>
        </select> <br>
        Tinggi badan : <input type="number" name="tb" min="1" required><br>
        Berat badan : <input type="number" name="bb" min="1" required><br>
        <input type="submit" value="Submit" name="submit"><br>
    </form>
    <?php
        $form = new Form();
        $form->tampil();
    ?>
</body>
</html>