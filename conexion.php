<?php
/*

DATOS DE LA BD EN HEROKU

$host="us-cdbr-east-02.cleardb.com";
$user="bb58de1f288001";
$pass='d7e56db0';
$database='heroku_b270f84ba5aa023';

*/
$host="localhost";
$user="root";
$pass='';
$database='newPapeleria';

$db= mysqli_connect($host,$user,$pass,$database);

mysqli_query($db, "SET NAMES 'utf8'");

session_start();

?> 