<?php

$n = 7; 

for ($i = 0; $i < $n; $i++) {
    echo "T";
}
echo "\n";

$centro = (int)($n / 2);

for ($i = 1; $i < $n; $i++) {

    for ($b = 0; $b < $centro; $b++) {
        echo " ";
    }

    echo "T\n";
}

?>