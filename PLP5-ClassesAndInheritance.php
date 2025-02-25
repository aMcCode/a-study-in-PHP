<?php

echo "*** Initial Car Class ***\n";

class Car {
    # properties
    public $color;
    public $model;

    # constructor
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    # destructor
    public function __destruct() {
        echo "\nRemoving the Object...";
    }

    # methods
    public function getColor() {
        return $this->color;
    }

    public function changeColor($color) {
        $this->color = $color;
    }

    # __toString() method
    public function __toString() {
        return "\nCar details: " . $this->color . " " . $this->model;
    }
}

# Using/Accessing the object
$car1 = new Car("silver", "Audi");
echo $car1 -> getColor() . " " . $car1 -> model;
$car1->changeColor("blue");
echo $car1;

# Creating a reference to the same object
$car2 = $car1;
$car2->changeColor("black");

# Both objects output as black
echo "\ncar1: $car1\n";
echo "car2: $car2\n";

# Using clone instead
$car3 = clone $car1;
$car3->changeColor("green");

# car1 is black, car3 is green
echo "\ncar1: $car1\n";
echo "car3: $car3\n";

echo "\n\n*** Static Car Class ***\n";

class Car_StaticExamples {
    # static property
    private static $model = "";
    private $color;

    # constructor setting static method
    public function __construct($color, $model) {
        $this->color = $color;
        self::$model = $model;
    }

        # destructor
    public function __destruct() {
        echo "\nRemoving the Object...";
    }

    # methods
    public function getColor() {
        return $this->color;
    }

    public function changeColor($color) {
        $this->color = $color;
    }

    # Static methods
    public static function setModel($model) {
        self::$model = $model;
    }

    public static function getModel() {
        return self::$model;
    }


    # __toString() method using static property
    public function __toString() {
        return "\nCar details: " . $this->color . " " . self::$model;
    }

}

# Using/Accessing static methods
$static_car1 = new Car_StaticExamples("silver", "Audi");
# Notice how the static methods setModel() and getModel() arevcalled using the class name and not the instantiated object name
Car_StaticExamples::setModel("BMW");
echo $static_car1 -> getColor() . " " . Car_StaticExamples::getModel();
echo $static_car1;


echo "\n\n*** Inheritance ***";
# Child class inheriting from Car
class ElectricCar extends Car {
    private $batteryCapacity;

    // Note the second constructor calling the parent class
    public function __construct($color, $model, $batteryCapacity) {
        parent::__construct($color, $model); 
        $this->batteryCapacity = $batteryCapacity;
    }

    # Overriding the getColor Method
    public function getColorAndCapacity() {
        return parent::getColor() . ", Battery Capacity: " . $this->batteryCapacity;
    }

    # New method
    public function charge() {
        return "Charging the car...";
    }
}

$car = new Car("Red", "Ford");
echo $car;
$electricCar = new ElectricCar("Blue", "Chevy", 75);
echo "\n" . $electricCar->getColorAndCapacity();
echo "\n" . $electricCar->charge();

?>


