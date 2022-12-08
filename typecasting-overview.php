<?php

// Enable the strict type (throws error if the type of value changes and not corresponds to type hinting above). Personally recommended to use both as much as can.
declare(strict_types=1);

/* Data Types & Type Casting */

# 4 Scalar Types
	# bool: true / false
	$completed = true;
	# int: 1, 2, 3, 0, -5 (no decimal)
	$score = 75;
	# float: 1.5, 0.1, 0.007, -15.8
	$price = 0.99;
	# string: 'Gio', 'Hello World!', "Al's code"
	$greeting = 'Hello, Al!';

	echo $completed . '<br />';
	echo $score . '<br />';
	echo $price . '<br />';
	echo $greeting . '<br />';

	echo gettype($completed) . '<br />';
	echo gettype($score) . '<br />';
	echo gettype($price) . '<br />';
	echo gettype($greeting) . '<br />';

//	var_dump shows everything that interpreter knows about the variable
	var_dump($completed);
	var_dump($score);
	var_dump($price);
	var_dump($greeting);
	echo '<br />';

# Compound Types
	# array (list of times, can be of many different types)
	$companies = [1, 2, 3, 0.5, -5.7, 'Apple', 'Microsoft', true];
//	echo $companies; will give an arrow, as the interpreter can't give an array as a string.
	print_r($companies);
	# object
	# callable
	# iterable

# 2 Special Types
	# resource
	# null: no value\nothing

echo '<br /><br />';

function sum($x, $y) {
		var_dump($x, $y);
		echo '<br />';
		return $x + $y;
}

$sum = sum(2, '3');
echo $sum . '<br /><br />';

//  If we specify that variables x & y are integers, then second will be coming up as integer and not as string.
//  This is called type juggling or type coercion.
function sumint(float $a, float $b) {
		$a = 7.15;
		var_dump($a, $b);
		echo '<br />';
		return $a + $b;
}

$sumint = sumint(2, 3);
echo $sumint . '<br />';

$castToInteger = (int) '5';

var_dump($castToInteger);