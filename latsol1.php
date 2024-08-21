<?php
for ($year = 1600; $year <= 2024; $year++) {
    if ($year % 400 == 0) {
        echo "$year adalah tahun kabisat <br>"; 
    }
    else if ($year % 100 == 0) {
        echo "$year <b>bukan</b> tahun kabisat <br>";
    }
    else if ($year % 4 == 0) { 
        echo "$year adalah tahun kabisat <br>";
    }
    elseif ($year == 1700 && $year == 1800) {
        echo "$year <b>bukan</b> tahun kabisat <br>";
    }
}
?>
