
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Bilangan 1</label>
        <input type="number" name="bilangan1" required>
        <br>
        <br>

        <label for="">Bilangan 2</label>
        <input type="number" name="bilangan2" required>
        <br>
        <br>

    <label for=""></label>
    <input type="submit" value="submit" >
    </form>
    <?php
    class hitung {
        public $bilangan1;
        public $bilangan2;
        public function __construct($b1, $b2)
        {
            $this->bilangan1 = $b1;
            $this->bilangan2 = $b2;
        }
        public function tambah()
        {
            return $this->bilangan1 + $this->bilangan2;
        }
        public function kurang()
        {
            return $this->bilangan1 - $this-> bilangan2;
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $a = $_POST['bilangan1'];
        $b = $_POST['bilangan2'];

        $hitung1 = new hitung($a, $b);
        echo "Hasil penjumlahan : " . $hitung1->tambah() . "<br>";
        echo "<br>";
        echo "Hasil pengurangan :" . $hitung1->kurang() . "<br>";

    }
    ?>
</body>
</html>