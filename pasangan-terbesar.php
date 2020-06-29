<?php
function pasangan_terbesar($angka)
{
    echo "<br>";
    $str_angka = (string) $angka;
    $biggest = 0;
    for ($i=0; $i <strlen($str_angka); $i++) {
        $check = (int) substr($str_angka, $i, 2);
        if ($check > $biggest) {
            $biggest = $check;
        }
    }
    echo "Pasangan terbesar dari angka $angka adalah : ";
    return $biggest;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
