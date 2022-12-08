<?php

/** Switch statement vs. if/else statement */

// Switch statement is similar with if/else statement, and it allows us to compare the same expression with the multiple different values and run diff. parts of code based on which value matches the given expression.
// Switch statement executes line by line, but it only starts executing line by line after it finds the matching case.

$paymentStatus = 'paid';

switch ($paymentStatus) {
		case 'paid':
				echo 'Paid';
				break; # note the break statement here, it serves the same purpose, as with the loops.

		case 'declined':
				echo 'Payment Declined';
				break;

		case 'pending':
				echo 'Pending Payment';
				break;

		default: # not required
				echo 'Unknown Payment Status';
}

echo '<br />';

// Another case of use, when we remove the break. Which will mean, if case 'declined' or 'rejected', then echo 'Payment Declined';.
$paymentStatus = 'rejected';

switch ($paymentStatus) {
		case 'paid':
				echo 'Paid';
				break;

		case 'declined':
		case 'rejected':
				echo 'Payment Declined';
				break;

		case 'pending':
				echo 'Pending Payment';
				break;

		default: # not required
				echo 'Unknown Payment Status';
}

echo '<br />';

// Note that the switch statement does the loose comparison.

//$paymentStatus = '0';
$paymentStatus = false;

switch ($paymentStatus) {
		case 1:
				echo 'Paid';
				break;

		case 2:
		case 3:
				echo 'Payment Declined';
				break;

		case 0:
				echo 'Pending Payment';
				break;

		default: # not required
				echo 'Unknown Payment Status';
}
echo '<br /><br />';

// Another thing to note is that, when you're using switch statement within the loop the break statement here would only break out of 'switch ($paymentStatus)' statement and not out of the loop. Here is an example:
$paymentStatuses = [1, 3, 0];

foreach ($paymentStatuses as $paymentStatus) {
		switch ($paymentStatus) {
				case 1:
						echo 'Paid';
						break 2; # If we write 2, then it will break out of 2 levels. In this case it will break out of switch and also the loop. If we just write 'break;' then it only break out of switch, and we get all three values.

				case 2:
				case 3:
						echo 'Payment Declined';
						break;

				case 0:
						echo 'Pending Payment';
						break;

				default: # not required
						echo 'Unknown Payment Status';
		}
		echo '<br />';
}
echo '<br /><br />';

$paymentStatuses = [1, 3, 0];

foreach ($paymentStatuses as $paymentStatus) {
		switch ($paymentStatus) {
				case 1:
						echo 'Paid';
						continue 2; # We get all three payment statuses printed, but without break line in the first one.

				case 2:
				case 3:
						echo 'Payment Declined';
						break;

				case 0:
						echo 'Pending Payment';
						break;

				default: # not required
						echo 'Unknown Payment Status';
		}
		echo '<br />';
}
echo '<br />';

// The difference between the if\else statement and the switch statement is that expression 'switch ($paymentStatus)' is executed once, while the expression within if\else conditional statements are executed for each statement.
// Here is an example. Let's assume that we have some kind of heavy function, that performs some heavy operations and then maybe takes like three four seconds.

function x() {
		sleep(3); # 'sleep' function will pause the script execution for a number of seconds.

		echo 'Done <br />';

		return 3;
}

if (x() === 1) {
		echo 1;
} elseif (x() === 2) {
		echo 2;
} elseif (x() === 3) {
		echo 3;
} else {
		echo 4;
}

echo '<br /><br />';

// So to fix that we'll just move out the function call to a variable and then just us it instead of function.

function y() {
		sleep(3); # 'sleep' function will pause the script execution for a number of seconds.

		echo 'Done <br />';

		return 3;
}

$x = y();

if ($x === 1) {
		echo 1;
} elseif ($x === 2) {
		echo 2;
} elseif ($x === 3) {
		echo 3;
} else {
		echo 4;
}

echo '<br /><br />';

// However within the switch statement it only executes once and we don't need to assign it to a variable.
function z() {
		sleep(3); # 'sleep' function will pause the script execution for a number of seconds.

		echo 'Done <br />';

		return 3;
}

switch (z()) {
		case 1:
				echo 1;
				break;
		case 2:
				echo 2;
				break;
		case 3:
				echo 3;
				break;
		default:
				echo 4;
} # And it's only going to take three seconds and execute one time. So overall switch statement is slightly faster than the if statement, but don't worry about the performance because it's negligible, but in the cases like this example then you would want either assign the function to a variable or use the switch statement.