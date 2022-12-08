<?php

/* FLOATS */

# Link to read more about floats: https://floating-point-gui.de/

$a = 13.5;
// Represent float numbers in exponential form
$b = 13.5e3;
$c = 13.5e-3;
$d = 13_500.3;

echo $a;
echo '<br />';
echo $b;
echo '<br />';
echo $c;
echo '<br />';
echo $d;
echo '<br /><br />';

var_dump($c);
echo '<br />';
var_dump($b);
echo '<br /><br />';

$e = floor((0.1 + 0.7) * 10);
echo $e;
echo '<br />';
$f = ceil((0.1 + 0.2) * 10);
echo $f;

echo '<br /><br />';

$g = 0.23;
$h = 1 - 0.77;

var_dump($g, $h);
echo '<br />';

// Should never compare floats directly like these:
if ($g == $h) {
		echo 'Yes';
} else {
		echo 'No';
}
echo '<br />';
echo NAN; # not a number or can't be computed
echo '<br />';
echo log(-1);
echo '<br />';
echo INF; # got out of bounds of float
echo '<br /><br />';

$h = PHP_FLOAT_MAX * 2;

var_dump(is_infinite($h));
echo '<br />';
var_dump(is_finite($h));
echo '<br />';
var_dump(is_nan($h));
echo '<br />';
var_dump(is_nan(log(-1)));
echo '<br />';
var_dump($h);

echo '<br /><br />';

/* CASTING */

$i = 5;
$j = 'Alex';
$k = '157.12Alex';

var_dump((float) $i);
echo '<br />';
var_dump((float) $j);
echo '<br />';
var_dump((float) $k);

echo '<br /><br />';

echo PHP_FLOAT_MIN;
echo PHP_FLOAT_MAX;
