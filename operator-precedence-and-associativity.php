<?php

/* Operator Precedence and Associativity */
// Manual at: https://www.php.net/manual/en/language.operators.precedence.php

// When Multiple operators are used in the expression, they're grouped by their precedence. If they have the same precedence, then their associativity decides how they're grouped.
// A simple example:
$x = 5 + 3 * 5; # If there were no precedence, then it would have been: 5 + 3 = 8 * 5 = 40. But a multiply sign "*" has higher precedence, than addition sign "+", therefor it's 20. And the assignment sign "=" has the lowest precedence, so it assigns to $x at last.

echo $x . '<br />';

$y = (5 + 3) * 5; # However, if we put the "5 + 3" in parentheses, we could force precedence and it will be calculated first, alike with normal math. So the result will be 40.

echo $y . '<br />';

// Associativity basically means, if operators have same precedence, then their associativity decides how they're grouped.
$x = $y = 5; # It has associativity "right", so it gets executed from right to left, so the $x will be assigned to the result of "$y = 5;".

echo $y . '<br />';

// Another expression:
$x = 5;
$y = 2;
$z = 10;

$result = $x / $y * $z; # Multiplication and division have the same precedence and it's associativity is "left". Therefor "$x / $y" is grouped first and then their result will be multiplied by $z. Finally the result will be assigned by variable $result.

echo $result . '<br />';

/* Non-associative can't be used next to each other.
$result = $x < $y > $z;
*/

// However, if non-associative have different precedence, you could use it in the same expression. So you could do these:
$result = $x < $y == $z;

// Example with the logical operators:
$x = true;
$y = false;
$z = true;

var_dump($x && ! $y); # "! $y" has the higher precedence and will be grouped first, then will be compared to $x.
echo '<br />';

var_dump($x && $y || $z); # End operator has the higher precedence, than or operator, so "$x && $y" will be grouped and executed first, then the result of this will be ored with the variabled $z. So result of "$x && $y" is false and final result will be true.
echo '<br />';

// Difference between "&& and 'and'" and "|| and 'or'".
$x = true;
$y = false;

$z = $x && $y;

var_dump($z);
echo '<br />';

$x = true;
$y = false;

$z = $x and $y; # Because the assignment operator has the higher precedence, as "and" and in first case it's false, because of lower precedence, than "&&" operator.
// So in this case $z assigned to $x and "and $y" gets discarded.

var_dump($z);
echo '<br />';

// To avoid confusion and unexpected results it's highly encouraged to use parentheses. 1) It will add more clarity and readability to code. 2) We also being explicit on how we want our operators to be grouped, instead of relying on precedence and associativity.
$x = true;
$y = false;

$z = ($x and $y); # We won't get that problem with parentheses, as in previous case.

var_dump($z);