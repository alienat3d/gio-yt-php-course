<?php

// NULL

# null constant

$a = null;

echo $a;
echo '<br />';
var_dump($a);
echo '<br />';
var_dump(is_null($a));
echo '<br />';
var_dump($a === null);
echo '<br />';

# null when variable not exist yet has value null
//var_dump($x);

# the variable gets the value null if we will explicitly unset it
$b = 5;
var_dump($b);
unset($b);
var_dump($b);
echo '<br />';
var_dump((string) $a);
echo '<br />';
var_dump((int) $a);
echo '<br />';
var_dump((bool) $a);
echo '<br />';
var_dump((array) $a);

// Cases of use:
	# If you don't now the value of variable yet, you could assign a default of null and then later within a control structure you could assign the actual value to it.
	# There are uses in classes and functions as return and argument types.