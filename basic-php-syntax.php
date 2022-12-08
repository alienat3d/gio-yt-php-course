<?php

echo 'Hello World!', '<br>';
//    thе same thing as:
echo 'Hello', ' ', 'World!', '<br>';

echo 'Al\'s World', '<br>';
//    or
echo "Al's World", '<br>';

// Variables (must start with the letter or an underscore)
$firstName = 'Al';
$lastName = 'Tsaplin';
$age = '35';

echo "My name is {$firstName} and my lastname is {$lastName}. I'm {$age} years old.", '<br>';

// can't assign variables with the object's name: $this = 'Al';

$x = 1;
$y = &$x;
$x = 3;

echo $y, '<br>';

/*
If writing like these:
$x = 1;
$y = $x;
$x = 3;

then $y value is 1.
*/