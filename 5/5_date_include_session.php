<?php
session_start();

if($_SESSION['login']==true) {
    echo "Welcome you are logged in!";
}else{
    echo "please log in...";
}



echo "<h3>Date-time/Debugging</h3>";

date_default_timezone_set("Asia/dhaka");
echo date("Y-m-d:h-i-sa")."<br>";
// exit(); //wont show the codes beneath
echo date("d-M-Y")."<br>"."<br>";

$var = date("D-m-y");
var_dump($var);
echo "<br>";

echo"<pre>";
$arr = [4,5,9];
var_dump($arr);
echo"</pre>";

echo "<h3> Include/Require </h3>";

echo "<h5> form (required)</h5>";
require 'inc/form.php';               //if something wrong in require() then codes beneath will stop.

echo "<h5> conditions (included)</h5>";
// include '2_conditions.php';         //this style works too: include ('4_form.php');
include 'inc/welcome.php';