<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menghitung Gaji</title>
</head>
<body>
<?php
    //Mendefinisikan variabel  gaji pokok, bonus, dan pajak
    $gaji_pokok = "5000000";
    $bonus= "1000000";
    $pajak = "0.1";

    //Menghitung gaji kotor
    $gaji_kotor = $gaji_pokok + $bonus;

    //Menghitung Pajak
    $total_pajak = $gaji_kotor * $pajak;

    //Menghitung gaji bersih
    $gaji_bersih = $gaji_kotor - $total_pajak;

    echo "Gaji Pokok: Rp" . $gaji_pokok . "<br>";
    echo "Bonus: Rp" . $bonus . "<br>";
    echo "Total Pajak (10%): Rp". $total_pajak ."<br>";
    echo "<br>Gaji Bersih Per Bulan: Rp" .$gaji_bersih;
?>


</body>
</html>