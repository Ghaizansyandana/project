<?php

class Bioskop
{
    public $jumlah, $hari, $kursi;
    public $hargaDasar   = 50000;
    public $biayaWeekend = 10000;
    public $biayaVIP     = 20000;

    public function __construct($jumlah, $hari, $kursi)
    {
        $this->jumlah = $jumlah;
        $this->hari   = $hari;
        $this->kursi  = $kursi;
    }

    public function hargaPerTiket()
    {
        $harga = $this->hargaDasar;
        if ($this->hari == "Sabtu" || $this->hari == "Minggu") {
            $harga += $this->biayaWeekend;
        }
        if ($this->kursi == "VIP") {
            $harga += $this->biayaVIP;
        }
        return $harga;
    }

    public function totalHarga()
    {
        return $this->hargaPerTiket() * $this->jumlah;
    }

    public function pajak()
    {
        return $this->totalHarga() * 0.05;
    }

    public function totalBayar()
    {
        return $this->totalHarga() + $this->pajak();
    }
}

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <div class="card col-5 justify-content-center mx-auto mt-5 p-5">
        <div class="card-body">
                <label for="jumlah" class="form-label">Jumlah tiket</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah">
                <br>
                <label for="hari" class="form-label">Hari</label>
                <input type="text" class="form-control" id="hari" name="hari" placeholder="Contoh: Sabtu, Minggu, Senin">
                <br>
                <label for="kursi" class="form-label">Jenis kursi</label>
                <select class="form-select" aria-label="Default select example" name="kursi" id="kursi">
                    <option selected disabled>Pilih jenis kursi</option>
                    <option value="Reguler">Reguler</option>
                    <option value="VIP">VIP</option>
                </select>
                <br>
                <button type="submit" class="btn btn-primary col-12">Submit</button> 
        
    </form>  
    <?php
        $tiket = null;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $jumlah = isset($_POST['jumlah']) ? (int) $_POST['jumlah'] : 0;
        $tiket = null;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $jumlah = isset($_POST['jumlah']) ? (int) $_POST['jumlah'] : 0;
            $hari   = isset($_POST['hari']) ? $_POST['hari'] : "";
            $kursi  = isset($_POST['kursi']) ? $_POST['kursi'] : "";

            $tiket = new Bioskop($jumlah, $hari, $kursi);
        }
    ?>
    <table border="1" class="table table-bordered col-10 justify-content-center mx-auto mt-5">
            <thead>
                <tr>
                    <th>Jumlah Tiket</th>
                    <th>Hari</th>
                    <th>Jenis Kursi</th>
                    <th>Harga per Tiket</th>
                    <th>Total Harga</th>
                    <th>Pajak (5%)</th>
                    <th>Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $tiket->jumlah?></td>
                    <td><?php echo $tiket->hari?></td>
                    <td><?php echo $tiket->kursi?></td>
                    <td>Rp <?php echo number_format($tiket->hargaPerTiket(), 0, ',', '.')?></td>
                    <td>Rp <?php echo number_format($tiket->totalHarga(), 0, ',', '.')?></td>
                    <td>Rp <?php echo number_format($tiket->pajak(), 0, ',', '.')?></td>
                    <td>Rp <?php echo number_format($tiket->totalBayar(), 0, ',', '.')?></td>
                </tr>
            </tbody>
        </table>
    <?php } ?>
</div>
</body>
</html>