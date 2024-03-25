<?php
//Data 1
$berat_mark1 = 78;
$tinggi_mark1 = 1.69;
$bmi_mark1 = hitungBMI($berat_mark1, $tinggi_mark1);

$berat_john1 = 92;
$tinggi_john1 = 1.95;
$bmi_john1 = hitungBMI($berat_john1, $tinggi_john1);

//Data 2
$berat_mark2 = 95;
$tinggi_mark2 = 1.88;
$bmi_mark2 = hitungBMI($berat_mark2, $tinggi_mark2);

$berat_john2 = 85;
$tinggi_john2 = 1.76;
$bmi_john2 = hitungBMI($berat_john2, $tinggi_john2);

function hitungBMI($berat, $tinggi)
{
    $bmi = $berat / ($tinggi * $tinggi);
    return number_format($bmi, 2);
}

//variabel bool
$markHigherBMI1 = $bmi_mark1 > $bmi_john1;
$markHigherBMI2 = $bmi_mark2 > $bmi_john2;

//data 1
echo "<h2>Data 1</h2>";
echo "<h3>Mark: </h3>";
echo "tinggi: " . $tinggi_mark1 . " m<br>";
echo "berat: " . $berat_mark1 . " kg";
echo "<h3>John: </h3>";
echo "tinggi: " . $tinggi_john1 . " m<br>";
echo "berat: " . $berat_john1 . " kg";
echo "<h3>Hasil BMI </h3>";
echo "mark: " . $bmi_mark1 . "<br>";
echo "john: " . $bmi_john1 . "<br>";
echo "<h4>Mark memiliki BMI lebih tinggi dari John: " . ($markHigherBMI1 ? 'true' : 'false') . "<br> </h4>";

echo "<p>====================================================</p>";

//data 2
echo "<h2>Data 1</h2>";
echo "<h3>Mark: </h3>";
echo "tinggi: " . $tinggi_mark2 . " m<br>";
echo "berat: " . $berat_mark2 . " kg";
echo "<h3>John: </h3>";
echo "tinggi: " . $tinggi_john2 . " m<br>";
echo "berat: " . $berat_john2 . " kg";
echo "<h3>Hasil BMI </h3>";
echo "mark: " . $bmi_mark2 . "<br>";
echo "john: " . $bmi_john2 . "<br>";
echo "<h4>Mark memiliki BMI lebih tinggi dari John: " . ($markHigherBMI2 ? 'true' : 'false') . "<br> </h4>";
