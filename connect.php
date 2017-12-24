<?php 
session_start();

$host='localhost';
$user='root';
$pass='ondevilla';



//$host='192.168.10.235';
//$user='elearning_user';
//$pass='3Le@rn!ng_61';




$dbnamehalcyon = "hmhs_elearning";



$table3='log';





$connlog = mysqli_connect($host, $user, $pass, $dbnamehalcyon ) or die("Connection failed: " . mysqli_connect_error());

$connhalcyon = mysqli_connect($host, $user, $pass, $dbnamehalcyon ) or die (mysqli_error());






$h1='localhost';
$u1='root';
$p1='ondevilla';
$d1="hmhs_usermanagement";
$c1 =mysqli_connect($h1, $u1, $p1, $d1) or die (mysqli_error());
$c2= mysqli_connect($h1, $u1, $p1, $d1) or die (mysqli_error());
$c3= mysqli_connect($h1, $u1, $p1, $d1) or die (mysqli_error());
$c4= mysqli_connect($h1, $u1, $p1, $d1) or die (mysqli_error());
$c5= mysqli_connect($h1, $u1, $p1, $d1) or die (mysqli_error());
$c6= mysqli_connect($h1, $u1, $p1, $d1) or die (mysqli_error());


global $connlog;
global $connhalcyon;
global $c1;
global $c2;
global $c3;
global $c4;
global $c5;
global $c6;
?>