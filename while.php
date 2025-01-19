<?php

// Declaring variables
$secret = "magic";
$attempts = 0;
$maxAttempts = 5;
// While loop 
while ($attempts < $maxAttempts){

    echo "Guess the password ";
    $guess = trim(fgets(STDIN));
    $attempts++;
    // If loop
    if ($guess == $secret) {
        echo "Password Accepted, Access Granted\n";
        // Break loop once password is guessed correctly
        break;
    } elseif ($attempts == $maxAttempts) {
        echo "Too many attempts, Access denied.\n";
    } else {
        echo "Password is incorrect. Attempts left: " . ($maxAttempts - $attempts) . "\n";
    }
}

?>