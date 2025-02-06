<?php

// Variable declaration $str
$str = "Hello world. It's a beautiful day!";
// Display "H" since it's in index 0
echo $str[0];
// Display "!" since it's in the last index, a negative index moves to the rightmost character
echo $str[-1];

// Display characters from index 0 to 5
echo substr($str, 0, 5);
// Display characters starting from index 5
echo substr($str, 5);

// Display characters in UPERCASE
echo strtoupper($str);
// Display characters in LOWERCASE
echo strtolower($str);

// Display first character in UPERCASE and the rest in LOWERCASE
echo ucfirst(strtolower($str));

?>