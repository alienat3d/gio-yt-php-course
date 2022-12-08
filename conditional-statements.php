<?php
/* Control Structures ( if / else / elseif / else if ) */

// Allows us to group multiple statements and also allows us control the flow of the code execution.
// We execute a only if condition b passes. Or keep executing a until condition b is met.

$condition = true;

if ($condition) {
		# code or statements, which we want to executed only if condition evaluates to true. $condition can be any kind of expression. It could be as simple as variable or as complex as using multiple operators including the logical operators.
}

// Example of simple grading system:
$score = 95;

if ($score >= 90) # for simple expressions like this we can remove the curly braces. But it's recommended to always use the curly braces, because it makes the code more readable.
		echo 'A';

echo '<br />';
// If condition fails, then we could execute the default block of code and that is by using the else case.
$name = 'Jack';

if ($name === 'Jack') {
		echo "It's Jack";
} else {
		echo "It's not Jack";
}

echo '<br />';

// For using multiple conditions we can use elseif:
// We also could use 'else if' with space, but I personally prefer not using it. As in HTML works only no space-version.

$score = 64;

if ($score >= 90) {
		echo 'A';
		if ($score >= 95) {
				echo '+';
		}
} elseif ($score >= 80) {
		echo 'B';
		if ($score >= 85) {
				echo '+';
		}
} elseif ($score >= 70) {
		echo 'C';
		if ($score >= 75) {
				echo '+';
		}
} elseif ($score >= 60) {
		echo 'D';
		if ($score >= 65) {
				echo '+';
		}
} elseif ($score >= 50) {
		echo 'E';
		if ($score >= 55) {
				echo '+';
		}
} else {
		echo "F";
}

echo '<br />';

// Use with HTML like these:
$score = 97;

if ($score >= 90) {
		?>
		<strong style="color: green;">'A'</strong>
		<?php } elseif ($score >= 80) {
		?>
		<strong style="color: greenyellow;">'B';</strong>
		<?php } elseif ($score >= 70) {
		?>
		<strong style="color: yellow;">'C';</strong>
		<?php } elseif ($score >= 60) {
		?>
		<strong style="color: orange;">'D';</strong>
		<?php } elseif ($score >= 50) {
		?>
		<strong style="color: hotpink;">'E';</strong>
		<?php } else {
		?>
		<strong style="color: red;">'F';</strong>
		<?php }
		echo '<br />';
		?>

<!-- But it's also less readable, as this alternative syntax: -->
		<?php	$score = 57 ?>

		<?php if ($score >= 90): ?>
			<strong>A</strong>
		<?php elseif ($score >= 80): ?>
			<strong>B</strong>
		<?php elseif ($score >= 70): ?>
			<strong>C</strong>
		<?php elseif ($score >= 60): ?>
			<strong>D</strong>
		<?php elseif ($score >= 50): ?>
			<strong>E</strong>
		<?php else: ?>
			<strong>F</strong>
		<?php endif ?>