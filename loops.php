<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$x = 1;

while ($x <= 10)
{
	echo $x . "<br />";
	$x++;
}

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step)
to create array of numbers 5 to 100 with the step 5
(example: 5, 10, 15, ...)
*/
$numArr = range(5, 100, 5);
/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even?
Divide it by 2, and if there is a remainder, the number is odd.
Use modulus operator (outputs the remainder after division),
for example:
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/
$numCount = sizeof($numArr);
$x = 0;

for ($x = 0; $x < $numCount; $x++)
{
	if ($numArr[$x] % 2 == 1)
	{
		echo $numArr[$x] . "<br />";
	}
}

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food
(at least 4 array elements). Name the array food.
*/
$food = array(
	"Shrimp Rice",
	"Donuts",
	"Tandoori",
	"Bagels"
);
/*
Use while-loop to print array elements (every food in a new row).
*/
echo "<h2>while loop</h2>";
$foodArrSize = sizeof($food);
$x = 0;

while ($x < $foodArrSize)
{
	echo $food[$x] . "<br />";
	$x++;
}

/*
Use for-loop to print array elements (every food in a new row).
*/
echo "<h2>for loop</h2>";

for ($x = 0; $x < $foodArrSize; $x++)
{
	echo $food[$x] . "<br />";
}

/*
Use foreach-loop to print array elements (every food in a new row).
*/
echo "<h2>foreach loop</h2>";

foreach($food as $foodIndividual)
{
	echo $foodIndividual . "<br />";
}

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
echo "<ul>";

foreach($food as $foodIndividual)
{
	echo "<li>" . $foodIndividual . "</li>";
}

echo "</ul>";

// task separator

echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array.
The meal courses are broken down based on the type (salad, main course, dessert, ...)
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
"pizza" => [
"type" => "main course",
"origin" => "Italy"
],
"cheesesake" => [
"type" => "desert",
"origin" => "Greece"
]
]

So, food_assoc is an associative array.
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself
and carries the information about the type and origin.
*/
$food_assoc = array(
	$food[0] => array(
		"type" => "side",
		"country" => "Thai"
	) ,
	$food[1] => array(
		"type" => "snack",
		"country" => "U.S.A"
	) ,
	$food[2] => array(
		"type" => "main course",
		"country" => "India"
	) ,
	$food[3] => array(
		"type" => "Bagels",
		"country" => "France"
	)
);
/*
Loop through $food_assoc and use print_r() to print the entire meal course
(entire array that includes type and origin).
*/
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array)
and print the type and origin as nested list items (see the example below).
*/

foreach($food_assoc as $food_assoc => $foodName)
{
	echo "<ul><li>" . $food_assoc . "</li><ul>";
	$classificationCounter = 0;
	foreach($foodName as $foodName => $foodClassification)
	{
		if ($classificationCounter == 0)
		{
			echo "<li>type: " . $foodClassification . "</li>";
			$classificationCounter++;
		}
		else
		{
			echo "<li>origin: " . $foodClassification . "</li>";
		}
	}

	echo "</ul></ul>";
}

?>
