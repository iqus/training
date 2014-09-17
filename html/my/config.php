<?php

$host ='localhost';
$user = 'root';
$pass =12345;
$db = 'new';
$con = mysql_connect($host,$user,$pass) or die('PhpMyadmin not connected');
$database = mysql_select_db($db,$con) or die('database error');
 
