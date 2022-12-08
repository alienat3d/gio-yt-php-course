<?php

// Constants

//define('name', 'value')
define('STATUS_PAID', 'paid');

// other way to define constant is:
const STATUS_SOLD = 'sold';

// to check if constant has been defined:
echo defined('STATUS_PAID') . '<br>';
echo STATUS_PAID . '<br>';
echo STATUS_SOLD . '<br>';

// The main difference between define function and const keyword is that constants created with const keyword are actually define in compile time, while constants created with a define function are defined in a runtime. So you can't define constants with a const keyword within your control structures like loops or if else for example, but you could define constants using the define function within the control structures.
if(true) {
//		const FOO = 'bar'; - not gonna work.
		define('STATUS', 'on pending');
}

$bought = 'BOUGHT';

define('STATUS_' . $bought, 'The product has been bought.');

echo STATUS_BOUGHT . '<br>';
// There are some "magic" predefined constants in PHP:
echo PHP_VERSION . '<br>';
echo 'This is located on the line #' . __LINE__ . '<br>';
echo 'We\'re working in this file: ' . __FILE__ . '<br>';

// Variable Variables
$foo = 'bar';

// Basically means "Take the value of variable $foo and use it as the name for a new variable, that been set to value 'baz'. In other words: $bar = 'baz';
$$foo = 'baz';

echo $bar . '<br>';
// or like this:
echo $$foo . '<br>';
// or like this:
echo "$foo , ${$foo}" . '<br>';
// or like this:
echo "$foo , {$$foo}" . '<br>';
// but this not gonna work, as been intended.
echo "$foo , $$foo" . '<br>';