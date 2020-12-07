<?php

$dbServername = "alliance.seas.upenn.edu";
$dbUsername = "am2020";
$dbPassword = "precise2020";
$dbName = "am2020";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) 
OR die('Could not connect to MySQL. Error: ' . mysqli_connect_error());