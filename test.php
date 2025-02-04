<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP DataTypes</title>
</head>
<body>
    <h1>PHP DataTypes</h1>

	<h2>Strings</h2>
    <?php
	    // Declaring and initializing string variables
        $name = "Alicia";

        // Concatenation
        $msg = "Hello" . ", " . $name . "!";

        // Useful methods
        $length = strlen($msg);
        $upcase_msg = strtoupper($msg);
        $substr = substr($msg, 0, 5);
		$x = '5' + 6;

        echo "<p>Message: $msg</p>";
        echo "<p>Message length: $length characters</p>";
        echo "<p>Uppercase message: $upcase_msg</p>";
        echo "<p>Substring (first 5 characters): $substr</p>";		
        echo "<p>Testing x = '5' + 6: $x</p>";
	 ?>
	 
    <h2>Integers</h2>
    <?php
        // Declaring and initializing integer variables
        $int1 = 10;
        $int2 = 25;

        // Math operations
        $sum = $int1 + $int2;
        $subtraction = $int2 - $int1;
        $multiplication = $int1 * $int2;
        $division = $int2 / $int1;
        $modulus = $int2 % $int1;

        echo "<p>First Number: $int1</p>";
        echo "<p>Second Number: $int2</p>";
        echo "<p>Sum: $sum</p>";
        echo "<p>Subtraction: $subtraction</p>";
        echo "<p>Multiplication: $multiplication</p>";
        echo "<p>Division: $division</p>";
        echo "<p>Modulus: $modulus</p>";
    ?>
	
	<h2>Floats</h2>
	<?php
        // Declaring and initializing float variables
        $flt1 = 10.75;
        $flt2 = 2.5;

        // Math operations
        $sum = $flt1 + $flt2;
        $diff = $flt1 - $flt2;
        $product = $flt1 * $flt2;
        $quotient = $flt1 / $flt2;

        // Displaying the results
        echo "<p>First Number: $flt1</p>";
        echo "<p>Second Number: $flt2</p>";
        echo "<p>Sum: $sum</p>";
        echo "<p>Difference: $diff</p>";
        echo "<p>Product: $product</p>";
        echo "<p>Quotient: $quotient</p>";

        $flt3 = 0.1;
        $flt4 = 0.2;
        $flt5 = $flt3 + $flt4;
        echo "<p>0.1 + 0.2 = $flt5</p>";
    ?>

	<h2>Math with Integers and Floats</h2>
	<?php
	
		$int = 10;
		$flt = 5.5;

		$sum = $int + $flt;
        $subtraction = $int - $flt;
        $multiplication = $int * $flt;
        $division = $int / $flt;

		// Check the resulting type
		echo "<p>Int Value: $int</p>";
		echo "<p>Float Value: $flt</p>";
		echo "<p>Sum: $sum</p>";
		echo "<p>Subtraction: $subtraction</p>";
		echo "<p>Multiplication: $multiplication</p>";
		echo "<p>Division: $division</p>";
	 ?>
	
	<h2>Booleans</h2>
    <?php
        // Declaring and initializing boolean variables
        $is_kind = true;
        $is_wealthy = false;
		
		echo "<p>Alicia is_kind: $is_kind</p>";
		echo "<p>Alicia is_wealthy: $is_wealthy</p>";
    ?>
	
	<h2>Indexed Arrays</h2>
    <?php
        // Declaring and initializing indexed arrays
        $fruit = array("Apple", "Banana", "Cherry");

        // Adding elements
        $fruit[] = "Date";
        array_push($fruit, "Elderberry");

        // Removing last element
        $delFruit = array_pop($fruit);

        // Counting elements in the array
        $count = count($fruit);

        echo "<p>Removed Fruit: $delFruit</p>";
        echo "<p>Total Fruit: $count</p>";
		echo "<p>Fruit[0]: $fruit[0]</p>";
		echo "<p>Fruit[1]: $fruit[1]</p>";
		echo "<p>Fruit[2]: $fruit[2]</p>";
		echo "<p>Fruit[3]: $fruit[3]</p>";
    ?>
	
	<h2>Associate Arrays</h2>
    <?php
        // Declaring and initializing associative arrays
        $students = array(	
			"id" => 101,
			"name" => "Max",
			"major" => "CS"
		);

        // Adding elements
        $students["gpa"] = 3.8;
		
		// Updating elements
        $students["name"] = "Maxine";

        // Removing element by key
		unset($students["major"]);

        // Counting elements in the array
        $count = count($students);

        echo "<p>Total elements: $count</p>";
		echo "<p>students[id]: $students[id]</p>";
		echo "<p>students[name]: $students[name]</p>";
		echo "<p>students[gpa]: $students[gpa]</p>";
    ?>
	
	<h2>Multidimensional Arrays</h2>
    <?php
        // Declaring and initializing multidimensional arrays
        $students = [	
			[ "id" => 101, "name" => "Max", "major" => "CS" ],
			[ "id" => 102, "name" => "Doc", "major" => "BS" ],
			[ "id" => 103, "name" => "Happy", "major" => "Comedy" ]
		];

        // Adding an array
        $students[] = [ "id" => 104, "name" => "Sneezy", "major" => "Napping" ];
		
		// Updating elements
        $students[0]["name"] = "Maxine";

        // Removing element by key
		unset($students[1]);

        // Counting elements in the array
        $count = count($students);

        echo "<p>Total elements: $count</p>";
		//https://www.w3schools.com/php/php_datatypes.asp (var_dump)
		echo var_dump($students)
    ?>

	
</body>
</html>
