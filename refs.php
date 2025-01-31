<?php

$person = "Won";
$client = &$person;

var_dump($person, $client);

$client = "Not Won";

var_dump($person, $client);

$person = "Not at all Won";

var_dump($person, $client);