<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while ($attempts < $maxAttempts){
    echo "Guess the password ";
    $guess = trim(fgets(STDIN));
    $attempts++;
    break;

    if ($guess == $secret) {
        echo "Password Accepted, Access Granted\n";
    } elseif ($attempts == $maxAttempts) {
        echo "Too many attempts, Access denied.\n";
    } else {
        echo "Password is incorrect. Attempts left: " . ($maxAttempts - $attempts) . "\n";
    }
}

?>