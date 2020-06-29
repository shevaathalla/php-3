<?php
function ubah_huruf($string)
{
    $str_arr = str_split($string);
    $number = 0;
    $newtext ="";
    for ($i=0; $i <count($str_arr) ; $i++) {
        $number = ord($str_arr[$i])+1;
        $newtext .=chr($number);
    }
    echo "<br>";
    return $newtext;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
