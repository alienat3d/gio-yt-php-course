<?php

/** Match vs switch expression */
// Match expression has been introduced since PHP 8.

$paymentStatus = 1;

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

		default:
				echo 'Unknown Payment Status';
}

echo '<br />';

// In curly braces we provide key-value pairs, where key is a single conditional expression and the value is the return expression.
// 1 difference: So as match expression is an expression it evaluates to variable.
// 2 difference: While in the switch statement we need to use the break statement to avoid some unexpected results, because without break statement as mentioned before it will just fall through the other cases. With match expression that doesn't happen. Match expression will just return that one value once the match is found and it will not fall through the other cases. So we don't need the break statement in match expression. Though we could do the follow through strategy using match expression and that is by specifying multiple expressions here by separating them with commas.

$paymentStatusDisplay = match ($paymentStatus) {
		1 => print 'Paid', # It can be any kind of expression pretty much. We could have a function here that returns a value and so on.
		2 => print 'Payment Declined',
		0 => print 'Pending Payment',
};

echo $paymentStatusDisplay;
echo '<br />';

$paymentStatusDisplay = match ($paymentStatus) {
		1 => 'Paid',
		2 => 'Payment Declined',
		0 => 'Pending Payment',
};

echo $paymentStatusDisplay;
echo '<br />';

$paymentStatusDisplay = match ($paymentStatus) {
		1 => print 'Paid',
		2, 3 => print 'Payment Declined',
		/* works the same as:
		case 2:
		case 3:
				echo 'Payment Declined';
				break; */
		0 => print 'Pending Payment',
};

echo $paymentStatusDisplay;
echo '<br /><br />';

// 3 difference: In switch statement default is not required and therefor we could have some cases that are not found. In a match expression it will return an error.
// The match expression is exhaustive, meaning that you have to specify all the possible cases here. If you don't specify all possible cases, then you have to specify the default.
// 4 difference: The match expression does strict comparison, while the switch statement does the loose comparison.
# switch ==
# match ===

$countries = '1';

switch ($countries) {
		case 1:
				echo 'Russia';
				break;
		case 2:
				echo 'Ukraine';
				break;
		case 3:
				echo 'Germany';
				break;
		case 4:
				echo 'Thailand';
				break;
		default:
				echo 'undefined country';
}
echo '<br />';

$countryDisplay = match($countries) {
		1 => 'Russia',
		2 => 'Ukraine',
		3 => 'Germany',
		4 => 'Thailand',
		default => 'undefined country',
};

echo $countryDisplay;
echo '<br /><br />';

/** Because of both side in match statement are expression, you could have complex expressions. You could have function calls here, you could have some logical operators, you could set this to some conditional expression. */

$fruit = false;

$fruitDisplay = match($fruit) {
		1 > 2 => 'Apple',
		3,4 => 'Watermelon',
		10 - 5 => 'Banana',
		default => 'undefined fruit',
};

echo $fruitDisplay;
echo '<br /><br />';

// Another thing to note is that the match expression does not deprecate the switch statement. Switch statements still have use cases, for example: in a switch statement we could have several statements:
switch ($countries) {
		case 1:
				echo 'Russia';
//			function ($x);
//			...and more statements..
				break;
};

$fruit = false;

$fruitDisplay = match($fruit) {
		1 > 2 => 'Apple', # can't do like that "; another expression,"
		3,4 => 'Watermelon',
		10 - 5 => 'Banana',
		default => 'undefined fruit',
};

// The way you would solve that with the match expression is that it would extract that block into a function and then use that function call as the expression.

// So which one is better if/else, switch or match statement? There is no right or wrong answer, it's up to you which one you want to use for your purposes.
