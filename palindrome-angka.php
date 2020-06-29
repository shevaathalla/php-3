<?php

function palindrome_angka($angka)
{
    while (true) {
        $angka++;
        $str_angka = (string) $angka;
        if (strrev($str_angka)==$str_angka) {
            echo "<br>";
            return $str_angka;
        }
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
