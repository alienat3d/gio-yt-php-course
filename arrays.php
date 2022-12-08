<?php

/* ARRAYS */

$programmingLanguage1 = 'PHP';
$programmingLanguage2 = 'Java';
$programmingLanguage3 = 'Python';
$programmingLanguage4 = 'Javascript';

// refactoring to array
$programmingLanguages = ['PHP', 'Java', 'Python', 'JavaScript'];
/*  another way to set an array:
$programmingLanguages = array('PHP', 'Java', 'Python', 'JavaScript'); */

var_dump($programmingLanguages);
echo '<br />';
echo $programmingLanguages[3];
echo '<br />';
echo var_dump(isset($programmingLanguages[4]));
echo '<br />';

$programmingLanguages[1] = 'C#';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);
echo '<br />';

$programmingLanguages[] = 'C++';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);
echo '<br />';

array_push($programmingLanguages, 'C', 'Kotlin', 'Go');

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);
echo '<br />';

/* Custom keys */

$programmingLanguages = [
		'php' => '8.1.6',
		'python' => '3.9'
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php'];
echo '<br />';
echo $programmingLanguages['python'];
echo '<br />';

// The variables in arrays can have different date types: it can have strings, booleans, integers, floats, and it can have even arrays as value, which makes it possible to have multidimensional arrays.
$newLang = 'go';

$programmingLanguages[$newLang] = '1.15';
echo $programmingLanguages['go'];
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$programmingLanguages = [
		'php' => [
				'creator' => 'Rasmus Lerdorf',
				'extension' => '.php',
				'website' => 'www.php.net',
				'isOpenSource' => true,
				'versions' => [
						['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
						['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
				],
		],
		'python' => [
				'creator' => 'Guido van Rossum',
				'extension' => '.py',
				'website' => 'www.python.org',
				'isOpenSource' => true,
				'versions' => [
						['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
						['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
				],
		],
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// To print on a screen specific value of the specific key, finding it deep inside of multidimensional arrays.
echo $programmingLanguages['php']['versions'][0]['releaseDate'];
echo '<br /><br />';

// If you have multiple keys, those are the same, the last one overwrites the others.
$array = [0 => 'foo', 1 => 'bar', '1' => 'baz'];
print_r($array);
echo '<br />';

// PHP tries to cast the keys when possible.
$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => 'e'];
print_r($array);
echo '<br />';
echo $array[''];
echo '<br />';
// Previous is the same as this one
echo $array[null];
echo '<br />';

$array = [1,2,3];
print_r($array);
echo '<br />';

$array = ['a', 'b', 'c', 50 => 'd', 'e', 'f'];
echo '<pre>';
print_r($array);
echo '</pre>';

// 'array_pop' function to remove the last element from an array:
echo array_pop($array);
echo '<pre>';
print_r($array);
echo '</pre>';

// 'array_shift' function to remove the first element from an array:
echo array_shift($array);
echo '<pre>';
print_r($array);
echo '</pre>';

//  unset($array); - will destroy the whole array and gives out the error "Undefined variable array"

//  Use unset to specify which element of an array you want to remove:
unset($array[2]);
echo '<pre>';
print_r($array);
echo '</pre>';

unset($array[0], $array[1], $array[3]);
$array[] = 1;
$array[] = 'Keti';
print_r($array);
echo '<br />';

/* CASTING */
$x = 3;
$y = 'foo';
$z = null;

var_dump((array) $x);
echo '<br />';

var_dump((array) $y);
echo '<br />';

var_dump((array) $z);
echo '<br />';

// Let's check if key exists in the array:


$array = ['a' => 1, 'b' => null];

var_dump(array_key_exists('b', $array)); # Shows if key exists.
echo '<br />';
var_dump(isset($array['b'])); # Shows if key exists and it's not null.
