<?php

echo " <h1> Basic syntax,variable,string,constant,operators,array </h1> ";

$a = 12;
$b = "he is  $a years old";
$c = 'he is $a years old';
$d = '<h3>I cant help but wonder</h3>';
echo $a;
echo "<br/>";
echo $b;
echo "<br/>";
echo $c;
echo "<br/>";
echo $d;
echo var_dump($a);
echo "<br/>";
echo var_dump($b);
echo "<br/>";
echo var_dump($c);
echo "<br/>";
echo strlen($c);  /*string length */
echo "<br/>";
echo str_word_count($c);
echo "<br/>";
echo strrev($c);        /*string reverse*/
echo strrev(strrev($c));
echo "<br/>";
echo str_replace("love","marriage",$b);
echo "<br/>";
echo strpos($b,"love");                 /*string position*/
echo "<br/>";
define('NAME','Billie Eilish',true);    /*case in_sensitive*/
echo NAME;
echo "<br/>";
echo name;

$a = 10;
$b = 5;

$a = $a / $b;
$a *= $b;

echo "<br/>";
echo $a;
echo "<br/>";

$a=9;
$b=8;
$x=$a++;        //first returns value then increments
$y=++$b;        //first increments then returns 

echo $x;
echo "<br/>"; 
echo $y;
echo "<br/>";

$c=5;
$d='5';
var_dump($c===$d);echo "<br/>";

// var_dump($c != $d);

$e=5;
$f=8;
var_dump($e != $f);     echo "<br/>";
var_dump($e>$f);        echo "<br/>";
var_dump(true && true); echo "<br/>";       /*And gate*/
var_dump(true||false);  echo "<br/>";
var_dump(!true);        echo "<br/>";
var_dump(($e>=$f)&&($e==$f));   echo "<br/>";
$g="Hey";
$h=" there ";
$i=$g.$h;
echo $i;    echo "<br/>";
$g .=$h;
echo $i;

$name=array('karim','rahim','gorim');
echo $name[1];
echo "<br/>";

$names = array('a'=> 'Bangladesh', 'b'=> 'USA', 'c'=>'UK');  /* asssociative array*/
echo $names['b'];
echo"<br/>";
$number = array(
                    array(3, 4, 5),
                    6,
                    7
                );
/*multidimentional array*/
echo $number[0][1];
echo"<br/>";
$number = array(
                    array(
                        array(0, 4, 5)
                    ),
                    array(1, 2, 3),
                    array(8, 7, 6),
                );
/*multidimentional array*/
echo $number[0][0][1];
echo "<br/>";

$ascending=array(3,5,1,4,2);
sort($ascending);
var_dump($ascending);

echo "<br/>";
$sort=array(3,5,1,4,2);
rsort($sort);
var_dump($sort);
echo "<br/>";
echo $sort[0];
?>