<?php

// EXPRESSIONS

/* Expression is pretty much anything that has a value or evaluates to value.
 PHP is an expression-oriented language, where is almost everything is an expression.

 The Simplest expression when you assign a value to a variable */

$x = 5;

# or this

$y = $x;

# So pretty much anything with the '=' is an expression. Because it evaluates to some kind of value. And the value can be any data type.

# Also when we compare one variable to another.

$z = $x === $y;

# Functions also consider expressions as they typically return a value.

$z = sum($x, $y);

# Also can have an expressions inside of the control structures such as conditionals and loops.

if ($x < 5) {
		echo 'Hello';
}