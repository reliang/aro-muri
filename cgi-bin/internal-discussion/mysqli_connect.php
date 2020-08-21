<?php

DEFINE ('DB_USER', 'am2020');
DEFINE ('DB_PASSWORD', 'precise2020');
DEFINE ('DB_HOST', 'alliance.seas.upenn.edu');
DEFINE ('DB_NAME', 'am2020');

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)OR die('Could not connect to MySQL: ' . mysqli_connect_error());
?>