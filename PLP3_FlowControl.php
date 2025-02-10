<?php

// Boolean Value Conversions
echo "\n***Boolean Values:\n";
echo "true: " . true; // 1
echo "\nfalse " . false; // <no value>
echo "\nTrue: " . True; // 1
echo "\nFalse " . False; // <no value>

echo "\n*********************************************\n";


// Type Juggling Examples
echo "\n***Type Juggling Examples:\n";
echo "0: " . var_dump((bool)0); // false
echo "0.0: " . var_dump((bool)0.0); // false
echo "-0.0: " . var_dump((bool)-0.0); // false
echo "empty string: " . var_dump((bool)""); // false
echo "\"0\": " . var_dump((bool)"0"); // false
echo "[]: " . var_dump((bool)[]); // false
echo "NULL: " . var_dump((bool)NULL); // false

echo "\n*********************************************\n";
echo "\n";

echo "\n***Conditional Flow Control:\n";
// Conditional Flow Control
$val = 10;

// if
if ($val > 5) {
    echo "The variable is greater than 5\n";
}

// if...else
if ($val < 5) {
    echo "Less than 5\n";
} else {
    echo "Greater than or equal to 5\n";
}

// if...elseif
if ($val < 5) {
    echo "Less than 5\n";
} elseif ($val == 10) {
    echo "Exactly 10\n";
} else {
    echo "Something else\n";
}

// switch
$option = 'B';
switch ($option) {
    case 'A':
        echo "Option A selected\n";
        break;
    case 'B':
        echo "Option B selected\n";
        break;
    default:
        echo "Default case\n";
}

// match
$value = 2;
$result = match ($value) {
    1 => 'One',
    2 => 'Two',
    3 => 'Three',
    default => 'Unknown'
};
echo "Match Result: $result\n";

// ternary operator
$age = 18;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Ternary Result: $status\n";

echo "\n*********************************************\n";
echo "\n";

echo "\n***Loop Flow Control:\n";

// while
$count = 1;
while ($count <= 3) {
    echo "While Loop Count: $count\n";
    $count++;
}

// do-while
$count = 1;
do {
    echo "Do-While Loop Count: $count\n";
    $count++;
} while ($count <= 3);

// for
for ($i = 1; $i <= 3; $i++) {
    echo "For Loop Count: $i\n";
}

// for - indexed array
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n";
}

// foreach - associative array
$prices = ['Soda' => 2.99, 'Ice Cream' => 1.99, 'Cookie' => 0.99];
foreach ($prices as $item => $price) {
    echo "$item costs $$price\n";
}

?>
