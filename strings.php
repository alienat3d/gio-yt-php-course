<?php

/* STRINGS */

// The main difference between '' & "" is that in a '' you cannot use variables, while in "" you can.
$firstName = 'Will';
$lastName = 'Smith';
$fullName = "$firstName Smith";
// Same as:
# $fullName = "{$firstName} Smith";
# $fullName = "${firstName} Smith";

$name = $firstName . ' ' . $lastName;

echo $firstName;
echo '<br />';
echo $lastName;
echo '<br />';
echo $fullName;
echo '<br /><br />';

echo $name;
echo '<br />';

// We can refer to specific letter in the line by the same analogy with arrays.
echo $name[5];
echo '<br />';
// To refer to the specific letter from the end we use negative numbers.
echo $name[-2];
echo '<br />';

// Let's change the capital S with a small "s".
$name[5] = 's';
$name[-2] = 'T';
echo $name;
echo '<br />';
var_dump($name);

//  $name{5}; - deprecated since PHP 7.4

echo '<br /><br />';

/* Multiline stings */

// Heredoc - treats as if it was enclosed in double quotes.

$a = 1;
$b = 2.5;
$c = -9;

$text = <<<TEXT
Line 1: $a
Line 2: $b
Line 3: $c
TEXT;

// nl2br for line breaks.
echo nl2br($text);
echo '<br /><br />';

// Nowdoc - treats as if it was enclosed in single quotes.
$text = <<<'TEXT'
Line 1: $a
Line 2: $b
Line 3: $c
TEXT;

echo nl2br($text);

# We also could have a full pieces of HTML here:

$section = <<<TEXT
<div>
	<h3 class="title" style="color: red;">Hello, World!</h3>
	<p class="text" style="color: forestgreen;">
		Lorem ipsum dolor sit amet.
	</p>
</div>
TEXT;

echo $section;