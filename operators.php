<?php

/* OPERATORS */

/* Arithmetic Operators (+ - * / % **) */
// Allows us to perform arithmetical operations such as: addition, subtraction, multiplication, division, modules and exponentiation. Also works with negative numbers.
$x = 10;
$y = 2;

var_dump($x ** $y);
echo '<br />';

// Tips for the cast:
// If original value is a string we could simply convert it to integer simply by adding + or minus in front of the variable.
$z = '5';

var_dump(+$z);
echo '<br />';

// same as:
$z = +'5';

var_dump($z);
echo '<br />';

// About division - it always will be float, unless both of operands are integers and they're evenly divisible. Or even if they were evenly divisible but one of them was float - the result will be float.
$x = 8;
$y = 2.0;

var_dump($x / $y);
echo '<br />';

// Dividing by 0. Will throw out a fatal error. However, if we still want to use an INF as a value we could use special function 'fdiv', then there will be no error.
$x = 7;
$y = 0;

var_dump(fdiv($x, $y));
echo '<br />';

// Modules operator don't work with the float operators, so
$x = 20;
$y = 11;

var_dump($x % $y);
echo '<br />';

// and
$x = 20.9;
$y = 11.5;
// will throw out the same result.

var_dump($x % $y);
echo '<br />';

// To use modules with the floats we have to use special function 'fmod'.
$x = 20.9;
$y = 11.5;

var_dump(fmod($x, $y));
echo '<br />';

// Another not about mod operator - when we work with the negative numbers, the sign of the result will be taken from that you're were dividing.
$x = 20;
$y = -6;

var_dump($x % $y);
echo '<br />';

$x = -20;
$y = 6;

var_dump($x % $y);
echo '<br /><br />';

/* Assignment Operators (= += -= *= /= %= **=) */
// Simple well known assignment:
$x = 5; # 5 assigned to be a value of variable 'x'.
$x = $y = 5; # also can be like this, 5 is assign to be a value of variables y and x.

var_dump($x, $y);
echo '<br />';

// It can be also more complex assignment, such as:
$a = ($b = 7) + 2; # Well it's possible to do such things, but not recommended, as it makes code less readable.

var_dump($a, $b);
echo '<br />';

// Also possible to use arithmetical operators later on in code like these:
$c = 10;

// $c = $c * 3;
// or it's short version:
$c *= 3;

var_dump($c);
echo '<br />';

// It applies to other operators as well:
$c = 10;

$c /= 5;

var_dump($c);
echo '<br />';

$d = 11;

$d %= 2;

var_dump($d);
echo '<br />';

$e = 2;

$e **= 3;

var_dump($e);
echo '<br /><br />';

/* String Operators (. .=) */

$x = 'Hello';

$x .= ' World';

echo $x . '<br />';

/* Comparison Operators (== === != <> !== < > <= >= <=> ?? ?:) */

$x = 5;
$y = '5';

var_dump($x == $y); # loose comparing x to y (converts the data type)
echo '<br />';
var_dump($x === $y); # strict comparing x to y (it checks also the data type and compares)
echo '<br />';
var_dump($x != $y); # to loose comparing for inequality.
echo '<br />';
var_dump($x <> $y); # another way to loose comparing for inequality.
echo '<br />';
var_dump($x !== $y); # to strict comparing for inequality.
echo '<br />';
var_dump($x <=> $y); # will return 0, if x is equal to y, -1 if x less than y and 1 if x greater than y.
echo '<br />';

// An important note about PHP ver. differences <!>
// Before PHP 8, when we compare integer to string. The string would have converted to integer, so it turned to 0 and then we get bool(true), but since PHP 8 it's an integer being converted to string, so it's unequal and we get bool(false).
var_dump(0 == '0a');
echo '<br />';
var_dump(0 == '0');
echo '<br />';

var_dump(0 === '0'); # So in general is better to use strict comparisons, when possible to avoid issues.
echo '<br />';

// An example why strict comparison is better:
$x = 'Hello World';
$y = strpos($x, 'H'); # looks for the letter 'W' and shows it's position in the string.

if (0 == false) { # In loose comparison 0 will be converted to false and that's why we get 'H not found'.
		echo 'H not found.';
} else {
		echo 'H found at index ' . $y;
}
echo '<br />';

// '?:' - is a ternary operator, and it's just a shorthand of previous 'if else' statement.
$result = $y === false ? 'H not found' : 'H found at index ' . $y; #
echo $result . '<br />';
// We could also stack the ternary operators, but then we always have to use parentheses, as not using them is deprecated since PHP 7.4 (will result errors in PHP 8), and it makes code more readable.

// Null coalescing operator - mainly used, when working with nulls.
$x = null;
$y = $x ?? 'hello'; # $y will equal to 'hello' only when $x is null. Otherwise if $x is not null, then $y will equal to whatever the value of x is.

var_dump($y);
echo '<br />';

// Can also be useful, when working with undefined variables or undefined array keys. For example, if we never defined variable m, the value of m is actually null, and we would otherwise get undefined variable m warning, but we're not going to get the error, instead it will evaluate to 'hello'.
$z = $m ?? '$m does not exist :P';
echo $z;
echo '<br /><br />';

/* Error Control Operators (@) */
// If we add this to an expression it will suppress any error from that expression.
$x = @file('foo.txt'); # Not recommend to use this operator at all, until we have a really good use case for that, such as if you want to suppress some api calls or something. But it's still not recommend to use this operator. There are better error handling, than just suppressing it.

/* Increment/Decrement Operators (++, --) */
// Only effects numbers and strings.

$x++; # First it returns the value and then does the increment.
$x--; # Same with this post-decrement.
++$x; # First increments and then returns the value.
--$x; # Same with this pre-decrement.

$a = 10;
$b = 20;
$c = null; # Incrementing null results 1, however decrementing null doesn't affect it.
$d = 'abc'; #  Incrementing string results incrementing last character, however decrementing string doesn't affect it.

echo $a++ . '<br />';
echo $a . '<br />';
echo ++$b . '<br />';
echo ++$c . '<br />';
echo ++$d;
echo '<br /><br />';

/* Logical Operators (&& || ! and or xor) */
// Allows to combine multiple conditions together, so you could use these operators to basically combine and create a larger conditional statement.

// && - And operator: evaluates to true only if the both operands evaluate to true. Doesn't need to be boolean tho.
$m = true;
$n = false;

var_dump($m && $n);
echo '<br />';

// || - Or operator: evaluates to true if either x or y evaluates to true.
$o = true;
$p = false;

var_dump($o || $p);
echo '<br />';

// ! - Unary operator: it's just a negation. It negates any value that comes after it.
$o = true;
$p = false;

var_dump(!$o || $p);
echo '<br />';

// "and or xor" operators are basically variations of "&& || !"
// However, there are difference between "&&" and "and" in PHP. It's in their precedence.
$x = true;
$y = false;

$z = $x && $y;

var_dump($z);
echo '<br />';

$x = true;
$y = false;

$z = $x and $y; # Boolean becomes true, because the assignment sign ("=") has the higher precedence, than the end operator and therefor $z = $x evaluates first. Then and $y evaluates after and it gets discarded.

var_dump($z);
echo '<br />';

// Short-circuiting of logical operators
$a = true;
$b = false;

var_dump($a || $b); # But the b expression here never gets evaluated, because it's short-circuited. For or-operator ("||") only one of the operands need to evaluate to true and in this case only "a" operand evaluates to true and therefor the rest of the operands don't need to evaluate and PHP short-circuits them doesn't evaluate it. So the final answer is true without ever executing "y".
echo '<br />';

// Even better to see on a following function example:
function hello() {
		echo 'Hello Wolrd';

		return false;
}

var_dump($x || hello());
echo '<br />';
var_dump($x && hello());
echo '<br />';
var_dump($x && hello() || true); # Because and-operator ("&&") has higher precedence, than the or-operator ("||") and therefor "$x && hello()" grouped together and gets executed first. So the value of that expression is false. So the or-operator ("||") needs to check the other operand and therefor true gets evaluated and the final result of an expression is true.
echo '<br /><br />';

/* Bitwise Operators (& | ^ ~ << >> ) */
// We can use these operators to flip the switches from 1 to 0 and from 0 to 1 or shift the bits left and right to get desired result.

// & - and-operator and it will return bits both set in x and y.
$x = 6; # binary representation: 110
$y = 3; # binary representation: 011

// 110
// &
// 011
// ---
// 010 = 2

var_dump($x & $y);
echo '<br />';

// | - or-operator will return bits that either set in x or y.
$x = 6;
$y = 3;

// 110
// |
// 011
// ---
// 111 = 7 # in decimal will be 1+2+4

var_dump($x | $y);
echo '<br />';

// ^ - zor-operator will return bits that either set in x or y, but that are not set in both.
$x = 6;
$y = 3;

// 110
// ^
// 011
// ---
// 101 = 5 # in decimal will be, counting from end: 1+0+4.
// Or counting from beginning: (1 * 4)+(0 * 2)+(1 * 0) = 4+0+1

var_dump($x ^ $y);
echo '<br />';

// ~ - negation-operator just flips the bits.
$x = 6;
$y = 3;

// 110
// ~
// 001
// &
// 011
// ---
// 001 = 1

var_dump(~$x & $y);
echo '<br />';

// << >> - shifts bits to left and to right. What meant by shifting bits is that every time a bit is shifted it will either multiply by 2 (when shifting left) or divide by 2 (when shifting to the right).
// In following examples values are converted to integers and then bitwise operations are applied to the integers. But if values were strings, then operations will be performed on ascii values of the characters that make up those strings.
// Some uses of Bitwise operations are: encryption, storing flags as bits, to store some permissions (https://youtu.be/gCVlQdbddXY?t=753), php config etc.

$x = 6;
$y = 3;

// 110 # append zeros here.
// <<< # we're going shift three times.
// 110000 # now, because we shifted it three times, we multiplying it by two each time. Counting from end: (1, 2, 4, 8, 16, 32) = 48
// https://youtu.be/gCVlQdbddXY?t=663
//
// 011
// <<<
// 110000 = 48
// Btw we get also 48 if multiply 6 by 2 three times.

var_dump($x << $y);
echo '<br />';

// If we shifting the other way ("<<"), we're basically discarding the bits.
$x = 6;
$y = 3;

// 110
// >>>
// 0 # we discard three time, and it's all three numbers, so we left with 0.

var_dump($x >> $y);
echo '<br />';

// Some more examples with a smaller number-shifting:
$x = 6;
$y = 1;

// 110
// >>
// 11
// 6 / 2 = 3

var_dump($x >> $y);
echo '<br /><br />';

/* Array Operators (+ == === != <> !==) */

$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f', 'g', 'h']; # so only 'g' and 'h' adds, as they have different indexes, those are not exist in variable $x.

$z = $x + $y; # "+" operator computes union of the two arrays and the union means that take all elements from the variable y and append it to variable x, if they don't exist at the same index or the same key.

echo '<pre>';
print_r($z);
echo '</pre>';

// When we make associative arrays
$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];

$z = $x + $y; # So now the keys are not match, they're all unique and therefor all of the keys from $y will be appended to $x array.
// But if $y = ['d' => 4, 'e' => 5, 'b' => 6, 'g' => 7, 'h' => 8]; "'b' => 6" won't be appended as it's already "'b' => 2" in the $x, so it stays as it were 2.

echo '<pre>';
print_r($z);
echo '</pre>';

// '==' and '===': Comparison and strict comparison operators happens with arrays is that it will return true if both x and y have the same key value pairs, so for example in these case $z will be false, because the keys don't have the same key value pairs:
$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];

$z = $x == $y;

var_dump($z);
echo '<br />';

// Even if the number of indexes match or keys are the same, it still will be false. Only if the both array keys and values match it going to be true.
$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['a' => 1, 'c' => 3, 'b' => 2];

$z = $x == $y;
var_dump($z);
echo '<br />';
$z = $x === $y; # with a strict comparison also the changed order will return false, while loose comparison will return true.
var_dump($z);
echo '<br />';

// The same logic applies to inequality check-operators: != <> !==.

/* Execution Operators (``) */
// This operator is probably something we'll never use, as it allows to execute the content of backticks as shell commands. Only if the shell exec is enabled. Won't ever need unless we need to execute some shell commands from PHP.

/* Type Operators (instanceof) */

/* Nullsafe Operators - PHP8 (?) */