
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>input nilai anda</h2>
    <form action="" method="post">
        masukan nilai: <input type="number" name="nilai" id="">
        <button type="submit">submit</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // "POST" harus huruf besar
        $nilai = isset($_POST["nilai"]) ? $_POST["nilai"] : '';

        if ($nilai ) {
            if ($nilai >= 90) {
                echo "Nilai  $nilai → Lulus dengan predikat A";
            } elseif ($nilai >= 75) {
                echo "Nilai  $nilai → Lulus dengan predikat B";
            } elseif ($nilai >= 60) {
                echo "Nilai  $nilai → Lulus dengan predikat C";
            } else {
                echo "Nilai $nilai tidak lulus";
            }
        }
    }
    ?>
</body>
</html>