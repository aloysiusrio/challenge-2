<?php

//data skor lomba tim senam
$data1_lumba = [96, 108, 89];
$data1_koala = [88, 91, 110];

$bonus1_lumba = [97, 112, 101];
$bonus1_koala = [109, 95, 123];

$bonus2_lumba = [97, 112, 101];
$bonus2_koala = [109, 95, 106];

//hitung rata-rata skor
function skor_rata_rata($scores)
{
    $total = array_sum($scores);
    $average = $total / count($scores);
    return number_format($average, 2);
}

//skor minimal untuk menang
function skorMinimum($scores)
{
    return skor_rata_rata($scores) >= 100;
}

//menentukan pemenang trofi
function hasilAkhir($lumba, $koala)
{
    $rata_lumba = skor_rata_rata($lumba);
    $rata_koala = skor_rata_rata($koala);

    if ($rata_lumba > $rata_koala && skorMinimum($lumba)) {
        return "Tim Lumba-Lumba Memenangkan Trofi!";
    } elseif ($rata_koala > $rata_lumba && skorMinimum($koala)) {
        return "Tim Koala Memenangkan Trofi!";
    } elseif ($rata_koala == $rata_lumba && skorMinimum($koala) && skorMinimum($lumba)) {
        return "Tim Seri";
    } else {
        return "Tidak ada Tim yang Memenangkan Trofi!";
    }
}

//tampilan hasil
function Hasil($nama_tim, $scores)
{
    $rata_rata = skor_rata_rata($scores);
    $output = "";
    $output .= "Nilai $nama_tim: " . implode(", ", $scores) . "<br>";
    $output .= "Rata-rata $nama_tim: " . number_format($rata_rata, 2) . "<br>";
    return $output;
}

echo "<h2>Hasil Data 1:</h2>";
echo Hasil("Tim Lumba-Lumba", $data1_lumba);
echo Hasil("Tim Koala", $data1_koala);
echo "Hasil : " . hasilAkhir($data1_lumba, $data1_koala) . "<br>";

echo "<p>====================================================</p>";

echo "<h2>Hasil Data Bonus 1:</h2>";
echo Hasil("Tim Lumba-Lumba", $bonus1_lumba);
echo Hasil("Tim Koala", $bonus1_koala);
echo "Hasil : " . hasilAkhir($bonus1_lumba, $bonus1_koala) . "<br>";

echo "<p>====================================================</p>";

echo "<h2>Hasil Data Bonus 2:</h2>";
echo Hasil("Tim Lumba-Lumba", $bonus2_lumba);
echo Hasil("Tim Koala", $bonus2_koala);
echo "Hasil : " . hasilAkhir($bonus2_lumba, $bonus2_koala) . "<br>";
