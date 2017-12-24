<?php 



//$host='localhost';
//$user='root';
//$pass='ondevilla';
//$dbnameservice = "service";



//$dbnamehalcyon = "hal";

//$table1='tblservice';

//$table3='log';



//$conn = mysqli_connect($host, $user, $pass, $dbnameservice ) or die (mysqli_error());

//$connlog = mysqli_connect($host, $user, $pass, $dbnamehalcyon ) or die("Connection failed: " . mysqli_connect_error());

//$connhalcyon = mysqli_connect($host, $user, $pass, $dbnamehalcyon ) or die (mysqli_error());



//$host='192.168.10.235';
//$user='elearning_user';
//$pass='3Le@rn!ng_61';

$host='localhost';
$user='root';
$pass='ondevilla';


$dbnamehalcyon = "hmhs_elearning";



$table3='log';





$connlog = mysqli_connect($host, $user, $pass, $dbnamehalcyon ) or die("Connection failed: " . mysqli_connect_error());

$connhalcyon = mysqli_connect($host, $user, $pass, $dbnamehalcyon ) or die (mysqli_error());



$h1='localhost';
$u1='root';
$p1='ondevilla';
//$d1='hmhs_hrd';
$d1="hmhs_usermanagement";
$c11 = mysqli_connect($h1, $u1, $p1, $d1) or die (mysqli_error());

global $c11;
global $connlog;
global $connhalcyon;

?>