<?php

/** LOOPS **/
// Loops are used to execute statements multiple times.


// while
// For example: a simple counter up to 15:
$i = 0;

while ($i <= 15) {
		echo $i++;
} # it will keep on running the expression until the conditional expression in parentheses evaluates to true. So up to 15.

echo '<br /><br />';

/* while ($i <= 15) {
	  	echo $i;
} This is an infinite loop, which means that it never stops running, as $i remains 0, and it actually can harm the application. */
// Use cases for infinite loops:
$b = 0;
while (true) {
		if ($b >= 10) {
				break; # accepts an optional argument and it's by default 1
		}

		echo $b++;
} # When you want to wait for something to happen and then conditionally break out the loop, using the break statement.

echo '<br />';

// In a nested loop like this, whenever $c going to be over 10, we're going to break out of two levels of loops: 'while (true)' and 'while ($c > 10)'.
$c = 0;
while (true) {
		while ($c > 10) {
				break 2;
		}

		echo $c++;
}

echo '<br /><br />';

// We could also skip the current loop iteration by using the continue statement and move on to the next iteration.
$d = 0;
while ($d <= 15) {
		if ($d % 2 === 0) {
				$d++;

				continue;
		} # if $d is an even number, then continue.

		echo $d++ . ',';
}
echo '<br />';

// Continue is similar to break statement and also accepts an optional argument which will allow us to continue multiple nested loops.

// PHP has also an alternative syntax to while loops similar to if conditionals that mainly used when embedding PHP within HTML.
$e = 0;
while ($e <= 15):
		if ($e % 2 === 0) {
				$e++;

				continue;
		} # if #d is an even number, then continue.

		echo $e++ . ',';
endwhile;

echo '<br /><br />';

/** do-while */
// do-while loop is similar to while loop with the main difference being that the do-while loop guarantees that the statements within the loop will execute at least once…
$f = 15;

do {
		echo $f++;
} while ($f <= 15); # …, because this conditional expression is checked at the end of an iteration instead of the beginning.

echo '<br /><br />';

/** for */
// For loop takes three expressions that are separated by semicolons.
// 1st: evaluates only the first time;
// 2nd: is conditional expression and is evaluated at the beginning of each iteration;
// 3rd: is evaluated at the end of each expression.

for ($g = 0; $g < 20; $g++) {
		echo $g;
} # So we're creating a variable $g, assigning 0 to it. Then check if $g less than 20 and incrementing $g. Each of those expressions can be empty, they're not required.
echo '<br />';

// It also could contain multiple expressions separated by commas.

for ($g = 0; $g < 20; print $g, $g++) {}

echo '<br />';

// The evaluation whether the loop should continue or not will be determined by the last expression.

for ($g = 0; print $g, $g < 20; $g++) {}
// Before the last number was 19 and now the last number is 20. The reason for that is because the conditional expression is run for each iteration and the last iteration, which is $g < 20 is being checked after we're printing it.
echo '<br /><br />';

// For loops can also be used to iterate over strings and print out each character or iterate over arrays.
$text = 'Hello World';

for ($h = 0; $h < strlen($text); $h++) {
		echo $text[$h] . '<br />';
}

echo '<br />';

$array = ['a', 'b', 'c', 'd', 'e'];

for ($j = 0; $j < count($array); $j++) {
		echo $array[$j] . '<br />';
} # This has a performance issue here. As we know the conditional expression run at the beginning of each iteration. So we're calling the function count here for each iteration. In this case we're only calling it four times, which is not big of a deal, but in the cases where our array might be too big or our function call might be expensive, this might cause some performance issues.

/** <!> Same performance issue could happen also with while or do-while loops. */
echo '<br />';

// A good practice would be to not make any unnecessary function calls, so instead, we could create a var called $length and assign it within the 1st expression of the loop, so as we know the first expression calls only 1 time. So the count only will be called once. And we get the exact same thing.

$array = ['f', 'g', 'h', 'i', 'j'];

for ($j = 0, $length = count($array); $j < $length; $j++) {
		echo $array[$j] . '<br />';
}
echo '<br />';

// Another option of the same thing would be like these:
$array = ['k', 'l', 'm', 'n', 'o'];
$length = count($array);

for ($j = 0; $j < $length; $j++) {
		echo $array[$j] . '<br />';
}

echo '<br />';

/** foreach */
// Foreach loop is used to iterate over arrays or objects.
$programmingLanguages = ['php', 'java', 'javascript', 'c++', 'c#', 'go', 'rust', 'python'];

foreach ($programmingLanguages as $language) {
		echo $language . '<br />';
} # On every iteration it's assigning the value of the current element in an array to the variable $language. If we try to use foreach on something, that is not an array or not an object it will give us an error.
echo '<br />';

// We could also access the keys of the arrays by using the key variable (or any other variable).
foreach ($programmingLanguages as $key => $language) {
		echo $key . ': ' . $language . '<br />';
} # On every iteration it's assigning the value of the current element in an array to the variable $language. If we try to use foreach on something, that is not an array or not an object it will give us an error.
echo '<br />';

// We also could assign key by reference, like this. And it will assign the value of the current element by reference and not by value as it does above. Which means if we modify this, it will actually modify the original array.
foreach ($programmingLanguages as $key => &$language) {
		$language = 'php';
}
print_r($programmingLanguages);
echo '<br /><br />';

$programmingLanguages = ['php', 'java', 'javascript', 'c++', 'c#', 'go', 'rust', 'python'];

foreach ($programmingLanguages as $key => $language) {
		$language = 'php';
}
print_r($programmingLanguages);
echo '<br />';
echo '<br />';

// $language variable won't get destroyed after the foreach loop, which means if we decided to use this variable somewhere else, this could cause some issues in our code. Especially if working with the references.
$programmingLanguages = ['php', 'java', 'javascript', 'c++', 'c#', 'go', 'rust', 'python'];

foreach ($programmingLanguages as $key => &$language) {
		echo $key . ': ' . $language . '<br />';
}
echo '<br />';

$language = 'php';

print_r($programmingLanguages); # 'php' replaces 'python'. Because $language is still a reference to the last element in the array and in this case it's 'python' and it gets changed to 'php'.
echo '<br /><br />';

// So if we decide to use reference, after foreach loop we usually just destroy the variable using unset and that way we sure, that it won't anymore overwrite anything in $programmingLanguages.
$programmingLanguages = ['php', 'java', 'javascript', 'c++', 'c#', 'go', 'rust', 'python'];

foreach ($programmingLanguages as $key => &$language) {
		echo $key . ': ' . $language . '<br />';
}
echo '<br />';

unset($language);

$language = 'php';

print_r($programmingLanguages);

echo '<br />';

// Another good use of foreach loop is to iterate over associative arrays.
$user = [
		'name'   => 'Al',
		'email'  => 'al.tsaplin@gmail.com',
		'skills' => ['html', 'css', 'js', 'php'],
];

foreach ($user as $key => $value) {
		echo $key . ': ' . json_encode($value) . '<br />';
}

echo '<br />';

// Or another way:

foreach ($user as $key => $value) {
		if (is_array($value)) {
				$value = implode(', ', $value);
		}

		echo $key . ': ' . $value . '<br />';
}

echo '<br />';

// Or we could iterate over the value:

foreach ($user as $key => $value) {
		echo $key . ': ';

		if (is_array($value)) {
				foreach ($value as $skill) {
						echo $skill . ' — ';
				}
		} else {
				echo $value;
		}

		echo '<br />';
}

echo '<br />';

// Alternative syntax for foreach and for loops:
foreach ($user as $key => $value):
		echo $key . ': ';

		if (is_array($value)) {
				foreach ($value as $skill) {
						echo $skill . ' — ';
				}
		} else {
				echo $value;
		}

		echo '<br />';
endforeach;

echo '<br />';

$array = ['KFC', 'McDonald\'s', 'Sbarro', 'Burger King', 'Subway'];

for ($j = 0, $length = count($array); $j < $length; $j++):
		echo $array[$j] . '<br />';
endfor;