<?php

$haystack = "The quick brown fox";
// Return string index position (strpos)
$pos = strpos($haystack, "quick");
var_dump($pos);

// Replace a substring with another substring (str_replace)
var_dump(str_replace("quick", "lazy", $haystack));

// Find words with {5} characters with (preg_match_all) in $haystack and then store them in $matches variable.
preg_match_all('/\w{5}/', $haystack, $matches);
var_dump($matches);

?>