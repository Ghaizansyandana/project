<?php
class penggajian 
{
  public $nama, $no_id, $jabatan, $gp, $status_k, $status_kk;
  public function __construct($a, $b, $c, $d, $e, $f)
  {
    $this->nama = $a;
    $this->no_id = $b;
    $this->gp = $c;
    $this->jabatan = $d;
    $this->status_k = $e;
    $this->status_kk = $f;
  }

    public function tunjanganjabatan()
    {

      $jabatan = $this->jabatan;

      if ($this->jabatan == "manager") {
        return $this->gp * 0.2;
      } elseif ($this->jabatan == "supervisor") {
        return $this->gp * 0.15;
      } elseif ($this->jabatan == "staff") {
        return $this->gp * 0.15;
      } else {
        return 0;
      }
    }
    
    public function tunjangantransport()
    {

      $status = $this->status_k;
      $this->tk= 0;
      if ($this->status == "tetap") {
        return $this->tk ;
      } else  {
        return $this->tk ;
      }
      return $this->tk;
    }
    
    public function tunjanganmenikah()
    {
      $statuskk   = $this->status_kk;
      $this->tm = 0;
      if ($this->status == "menikah") {
          return $this->tm  ;
      } else {
          return $this->tm;
      }
      return $this->tm;

    }


    public function gajikotor()
    {
     $gajikotor = $this->gp + $this->tunjanganjabatan() + $this->tunjanganmenikah() + $this->tunjangantransport();
     return $gajikotor;
    }
    
    public function pajak()
    {
     $pajak = $this->gajikotor() * 0.05;
     return $pajak;
    }
    
    public function gajibersih()
    {
     $gajibersih = $this->gajikotor() - $this->pajak();
     return $gajibersih;
    }
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <label for="">Nama karyawan</label>
      <input type="text" name="nama" id="">
      <br>
      <label for="">No id</label>
      <input type="text" name="no_id" id="">
      <br>
      <label for="">Gaji karyawan</label>
      <input type="number" name="gp" id="">
      <br>
      <label for="">Status karyawan</label>
      <select name="status" id="">
        <option value="tetap">Tetap</option>
        <option value="kontrak">Kontrak</option> 
      </select>
      <br>
      <label for="">Jabatan</label>
      <select name="jabatan" id="">
        <option value="manager">Manager</option>
        <option value="supervisor">Supervisor</option>
        <option value="staff">staff</option>
        <option value="karyawan">karyawan</option> 
      </select>
    </form>
    <br>
      <label for="">Jabatan</label>
    <select name="jabatan" id="">
        <option value="manager">Menikah</option>
        <option value="supervisor">Belum menikah</option> 
      </select>
    </form>
    <br>
    <button type="submit">simpan</button>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $a = $_POST['nama'];
  $b = $_POST['no_id'];
  $c = $_POST['gp'];
  $d = $_POST['jabatan'];
  $e = $_POST['status'];
  $f = $_POST['status_kk'];

  $gaji = new penggajian($a, $b, $c, $d, $e, $f);
}
?>

<table>
  <th>Nama</th>
  <th>No_id</th>
  <th>Status karyawan</th>
  <th>Gaji pokok</th>
  <th>Jabatan</th>
  <th>Status menikah</th>
  <tr>
    <td><?php echo $gaji->nama; ?></td>
    <td><?php echo $gaji->no_id; ?></td>
    <td><?php echo $gaji->status_k; ?></td>
    <td><?php echo number_format($gaji->gp, 0, ',', '.'); ?></td>
    <td><?php echo $gaji->jabatan; ?></td>
    <td><?php echo $gaji->status_kk; ?></td>
  </tr>
  <tr>
    <th>Tunjangan jabatan</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->tunjanganjabatan(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Tunjangan transport</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->tunjangantransport(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Tunjangan menikah</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->tunjanganmenikah(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Gaji kotor</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->gajikotor(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Pajak (5%)</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->pajak(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Gaji bersih</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->gajibersih(), 0, ',', '.'); ?>    
    </td>
  </tr>
  
</table>

</body>
</html>