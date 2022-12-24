<?php
// check if port is used
$port = getenv('PORT', 80);
$fp = @fsockopen("localhost", $port, $errno, $errstr, 1);
if (!$fp) {
    echo "Port $port is free";
} else {
    echo "Port $port is used";
    fclose($fp);
}