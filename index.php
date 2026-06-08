<?php

$input = readline("Please enter a number to form a 'T': "); 

$n = (int)$input;

if ($n % 2 == 0) {
    $centro = (int)($n / 2);

    for ($i = 0; $i < $centro; $i++) {
    echo "T";
    }
    echo " ";

    for ($i = 0; $i < ($n - $centro); $i++) {
        echo "T";
    }

    echo "\n";

} else{
    for ($i = 0; $i < $n; $i++) {
    echo "T";
    }
echo "\n";

}

$centro = (int)($n / 2);

for ($i = 1; $i < $n; $i++) {

    for ($b = 0; $b < $centro; $b++) {
        echo " ";
    }

    echo "T\n";
}

?>