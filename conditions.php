<?php

echo "<h3>if condition</h3>";
$a = 10;
if ($a < 15) {
    $a += 10;
}
echo "the value of a is $a";

echo "<h3>if-else condition</h3>";
$a=10;
if ($a < 9) {
    echo "Welcome";
}else{
    echo "Sorry";
}

echo "<h3>Nested if-else condition</h3>";
$a=10;
if ($a==9) {
    echo "nine";
}elseif($a==8){
    echo "eight";
}elseif($a==7){
    echo "seven";
}elseif($a==6){
    echo "six";
}else{
    echo "nothing matched at all!";
}

echo "<h3> Switch </h3>";
$a = 5;
switch($a){
    case 5:
        echo "it is number five";
    break;
    case 4:
        echo "it is number four";
    break;
    default:
    echo "nothing matched at all!";
    break;
}



?>