<?php

echo " <br> LOOPING PERTAMA : <br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo "            $i - I Love PHP <br>";
}

echo "<br> LOOPING KEDUA <br> ";
for ($i = 20; $i >= 2; $i -= 2) {
    echo "            $i - I Love PHP <br>";
}



function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
     } 
    elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } 
    elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

echo tentukan_nilai(98) . '<br>' ; 
echo tentukan_nilai(76) . '<br>' ; 
echo tentukan_nilai(67) . '<br>' ; 
echo tentukan_nilai(43) . '<br>' ; 

?>

