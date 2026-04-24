<?php
print_r ($_SERVER['HTTP_USER_AGENT']);

$tz = new DateTimeZone("Asia/Jakarta");
print_r ($tz->getLocation());

$client_ip = $_SERVER['REMOTE_ADDR'];
echo "Your IP address is: " . $client_ip;
?>