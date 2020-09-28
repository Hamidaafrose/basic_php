
<!-- FOR LOOP:
 for(initial counter,test counter,increment counter){
      code to be executed;
       }

DO WHILE LOOP:
  do{
     code to be executed;
 }while(condition is true);

 WHILE LOOP:
 while(condition is true){
     code to be executed;
 }

 FOREACH LOOP:
 foreach($array as $value){
     code to be executed; } -->

<?php

echo "while loop <br>";
$i=1;
while($i<=10){
    echo "I = $i <br>";
    $i++;
}

echo "<br>for loop <br>";
for($i=10; $i>0; $i--){
    echo 'I is ' .$i. '<br>';
}

echo "<br>do-while loop <br>";
$a = 20;
do{
    echo "a = $a <br>";
    $a--;
} while($a > 15);

echo "<br>for-each loop <br>";
$arr = array(10, 12, 59, 3, 8, 34,99);
// $i = 0;
// for($i=0; $i<sizeof($arr); $i++)
// {
//     echo $arr[$i] ."<br>";
// }
foreach($arr as $key=> $a){
    echo $key .'='. $a.'<br>';
}

echo "<br> function <br>";
function subtract(){
    $a = 50;
    $b = 25;
    $c = $a-$b;
    echo "Answer : $c <br>";
}
subtract();

// FUNCTION ARGUMENTS:
// function functionName(arg1, arg2, arg3){
//     code to be executed;

echo "<br> function arguments <br>";
function sum($a,$b){
    $c = $a + $b;
    echo "sum = $c <br>";
}
sum(15,10);
sum(3,7);

echo "<br> default argument value <br>";
function multiply($a = 2, $b = 3){
    $c = $a * $b;
    echo "multiply = $c <br>";
}
multiply(5,5);
multiply();
multiply(15);

echo "<br> return value <br>";
function add($a, $b){
    $c= $a + $b;
    return $c;
}
function mushrooming($a, $b){
    $c= $a * $b;
    return $c;
}
$a= add(2,3);
$m= mushrooming(2,5);
echo $m -$a. "<br/>";
echo mushrooming(2,5) - add(2,3);

?>
