<?php
function tentukan_deret_aritmatika($arr)
{
    $temp = $arr[count($arr)-1]-$arr[count($arr)-2];
    for ($i=1; $i <count($arr) ; $i++) {
        $beda = $arr[$i]-$arr[$i-1];
        if ($beda != $temp) {
            echo "false<br>";
            return;
        }
    }
    echo "true<br>";
    return;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
