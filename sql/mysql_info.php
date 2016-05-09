<?php

$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'sample_db';

$conn = mysqli_connect($db_host , $db_user , $db_pass);
$sdb = mysqli_select_db($conn , $db_name);
$mozibake = mysqli_query($conn , 'SET NAMES utf8');







?>