<?php

function countDown(int $start): Generator
{
    for ($i = $start; $i > 0; $i--) {
        echo "Generating a random number ... \n";
        yield random_int(1, 100);
    }
}

foreach (countDown(5) as $number) {
    echo "Displaying number: \n";
    echo "$number\n";
}

?>