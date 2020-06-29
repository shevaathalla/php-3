<?php
function hitung($str)
{
    echo "<br>";
    $opt = "";
    $a = 0;
    $c = 0;
    $b = 0;
    $total;
    for ($i=0; $i <strlen($str) ; $i++) {
        if (is_numeric($str[$i])) {
            $a.=$str[$i];
        } else {
            $opt = $str[$i];
            $c = $i;
            break;
        }
    }
    $a =+$a;
    for ($i=$c+1; $i <strlen($str) ; $i++) {
        $b.=$str[$i];
    }
    $b =+$b;
    switch ($opt) {
        case '+':
            $total = $a + $b;
            break;
        case '-':
            $total = $a - $b;
            break;
        case ':':
            $total = $a / $b;
            break;
        case '%':
            $total = $a % $b;
            break;
        case '*':
            $total = $a * $b;
            break;
    }
    
    return $total ;
}
// TEST CASE
  echo hitung("102*2"); //204
  echo hitung("2+3"); //5
  echo hitung("100:25"); //4
  echo hitung("10%2"); //0
  echo hitung("99-2"); //97
