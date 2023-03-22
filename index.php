<?php

echo 'hello';
// $a = " imed";
// $a .= " akrouti";
// echo $a;
// $b = "imed ";
// $b .= 4;
// echo '<br>';
// echo $b;
// echo gettype($b);
// echo "<br>";
// $f = @file('imed.txt') or die("file not found");
// echo '<pre>';
// print_r($f);
//'</pre>';
echo "<br>";
@(include('imed.php')) or die("file not find");
echo "<br>";
$a = 10 || false;/*is equal to */
$a = (10 || false);
echo $a;
echo "<br>";
$a = 10 or false;/* is equal to  */
($a = 10) or False;
echo $a;
