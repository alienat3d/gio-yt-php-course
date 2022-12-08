<?php

/* BOOLEANS */

$isCompleted = true;

// Mostly used within control structures like loops or ethos conditionals:
if ($isCompleted) {
		# do something
		echo 'Success!';
} else {
		# do something else
		echo 'Fail!';
}
echo '<br />';
echo $isCompleted;
echo '<br />';
var_dump($isCompleted);

// There are other data types those being converted to booleans by PHP on the fly and could be evaluated to either true or false.
// Integers 0 and -0 = false
// Floats 0.0 and -0.0 = false
// Strings '' = false
// Strings '0' = false
// Empty array [] = false
// Null = false

// Anything else will evaluated to true, even the negative numbers.