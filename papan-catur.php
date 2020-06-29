<?php

function papan_catur($angka)
{
    echo "<p>PAPAN CATUR $angka * $angka </p>";
    for ($i=1; $i <= $angka; $i++) {
        if ($i%2==1) {
            for ($a=0; $a < $angka ; $a++) {
                echo "#&nbsp&nbsp";
            }
            echo "<br>";
        } else {
            for ($b=0; $b < $angka-1 ; $b++) {
                echo "&nbsp&nbsp#";
            }
            echo "<br>";
        }
    }
    echo "<br>";
    echo "<hr>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/*
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
# # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # #
# # # # #
*/
echo papan_catur(20);
