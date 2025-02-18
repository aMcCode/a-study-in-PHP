<?php

echo "\n***Loop Flow Control:\n";

// while
echo "\n***While Loop:";
$count = 1;
while ($count <= 3) {
    echo "While Loop Count: $count\n";
    $count++;
}

// do-while
echo "\n***Do-While Loop:\n";
$count = 1;
do {
    echo "Do-While Loop Count: $count\n";
    $count++;
} while ($count <= 3);

// for
echo "\n***For Loop - Counting:\n";
for ($i = 1; $i <= 3; $i++) {
    echo "For Loop Count: $i\n";
}

// for - indexed array
echo "\n***For Loop - Indexed Array:\n";
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n";
}

// foreach - associative array
echo "\n***Foreach Loop - Associative Array:\n";
$prices = ['Soda' => 2.99, 'Ice Cream' => 1.99, 'Cookie' => 0.99];
foreach ($prices as $item => $price) {
    echo "$item costs $$price\n";
}

// goto
echo "\n***goto Statement:\n";
// https://www.php.net/manual/en/control-structures.goto.php

goto label;

echo "This will not print.";

label:
echo "This will print.";

// Functions
echo "\n\n***Functions - Multiply 2 Numbers, Return a single value:\n";
function multiply_two_nums($num1, $num2) {
    return $num1 * $num2;
}

$product = multiply_two_nums(5, 6);
echo "The product of 5 * 6 is ". $product;

echo "\n\n***Functions - Split Strings, Return multiple values:\n";
//https://www.geeksforgeeks.org/how-to-split-string-by-delimiter-separator-in-php/
function splitNameStr($str) {
    $strArray = explode(',', $str);
    $firstname = $strArray[1];
    $lastname = $strArray[0];

    return [$firstname, $lastname];
}

$name_parts = splitNameStr("McNeil,Alicia");
echo("FirstName: " . $name_parts[0] . " LastName: " . $name_parts[1]);

echo "\n\n***Recursive Function\n";
function reverseString($str) {
    if (strlen($str) <= 1)
        return $str;
    else {
        return substr($str, -1) . reverseString(substr($str, 0, -1));
    }
}

$revStr = reverseString("Hello World");
echo "The reverse of 'Hello World' is " . $revStr . ".";

echo "\n\n***Swap Function - Proof PHP Passess Arguments by Value by Default\n";
function swap($str1, $str2) {
    $temp = $str1;
    $str1 = $str2;
    $str2 = $temp;
    echo "\nIn Swap Function!\n";
    echo "str1 = " . $str1 . ", str2 = " . $str2;
}

$i = "Happy";
$w = "Guilmore";
echo "\nHappy Guilmore = " . $i . " " . $w;
swap($i ,$w);
echo "\nSwap Outcome = " . $i . " " . $w;

echo "\n\n***Swap Function - Passing Arguments by Reference\n";
function swap2(&$str1, &$str2) {
    $temp = $str1;
    $str1 = $str2;
    $str2 = $temp;
    echo "\nIn Swap Function!\n";
    echo "str1 = " . $str1 . ", str2 = " . $str2;
}

$i = "Happy";
$w = "Guilmore";
echo "\nHappy Guilmore = " . $i . " " . $w;
swap2($i ,$w);
echo "\nSwap Outcome = " . $i . " " . $w;

echo "\n\n***Anonymous Function or Closure\n";
$greeting = function($name) {
    return "\nHello, $name!";
};

echo $greeting("Alicia");

echo "\n\n***Arrow Function \n";
$greeting = fn($name) => "Hello $name!";

echo $greeting("Alicia");


echo "\n\n***Callback Example\n";
function orderedRun(callable $callback) {

    echo "\nRun this code before the function Run";
    $callback();
    echo "\nRun this code after the function Run";
}

// passing an anonymous function
orderedRun(function() {
    echo "\nRun me - the callback - in the middle.";
})

?>
