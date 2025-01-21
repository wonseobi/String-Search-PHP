<?php
$status = 404;
$message = match ($status){
    200, 300 => 'Success',
    400, 404, 500 => 'Error',
    default => 'Unknown Status'
};
"600" == 600;
"600" !== 600;
echo $message . "\n";
?>