<?php

/* INTEGERS */

$a = 10;
// Hexadecimal
$b = 0x2A;
// Octal numbers
$c = 055;
// Binary numbers
$d = 0b1100;

echo $a;
echo '<br />';
echo $b;
echo '<br />';
echo $c;
echo '<br />';
echo $d;

echo '<br /><br />';

$e = (integer) true;
$f = (integer) 5.79;
$g = (integer) '79';
$h = (integer) 'test';
$i = 'test';
// Use _ to add readability to numbers. But it necessarily shall be integer and not a string.
$j = 5_000_300;

echo $e;
echo '<br />';
echo $f;
echo '<br />';
echo $g;
echo '<br />';
echo $h;
echo '<br />';
var_dump(is_int($f));
echo '<br />';
var_dump(is_int($i));
echo '<br />';
var_dump($j);

echo '<br /><br />';

echo PHP_INT_MAX;
echo '<br />';
echo PHP_INT_MIN;
echo '<br />';
