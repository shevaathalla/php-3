<?php
function skor_terbesar($arr)
{
    $score = array();
    $nilaiLaravel =0;
    $nilaijs = 0;
    $nilainative = 0;
    for ($i=0; $i <count($arr) ; $i++) {
        if ($arr[$i]["kelas"] == "Laravel") {
            if ($arr[$i]["nilai"]>$nilaiLaravel) {
                $nilaiLaravel = $arr[$i]["nilai"];
                $laravel = $arr[$i];
            }
        } elseif ($arr[$i]["kelas"] == "React JS") {
            if ($arr[$i]["nilai"]>$nilaijs) {
                $nilaijs = $arr[$i]["nilai"];
                $react_js = $arr[$i];
            }
        } elseif ($arr[$i]["kelas"] == "React Native") {
            if ($arr[$i]["nilai"]>$nilainative) {
                $nilainative = $arr[$i]["nilai"];
                $react_native = $arr[$i];
            }
        }
    }
    $score["Laravel"]=$laravel;
    $score["React Native"]=$react_native;
    $score["React JS"]=$react_js;
    return $score;
}

// TEST CASES
$skor = [
    [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
    ],
    [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
    ],
    [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
    ],
    [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
    ],
    [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
    ]
];
echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";

/* OUTPUT
Array (
    [Laravel] => Array
            (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
            )
    [React Native] => Array
                (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                )
    [React JS] => Array
                (
                [nama] => Indra
                [kelas] => React JS
                [nilai] => 85
                )
)
*/
