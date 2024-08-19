<?php

/////////////////////4.2
// Person.php
class Person {
    private string $name;
    private string $address;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->address;
    }

    public function setAge($address) {
        $this->address = $address;
    }

    public function display() {
        echo "Name: " . $this->name . "\n";
        echo "address: " . $this->address . "\n";
    }
}

// Student.php
class Student extends Person {
    protected string $course;
    protected int  $year;
    protected float $fee;


    public function __construct($name, $address, $course, $year , $fee) {
        parent::__construct($name, $address);
        $this->course = $course;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($course) :void {
        $this->course = $course;
    }

    public function getyear() {
        return $this->year;
    }

    public function setyear($year):void {
        $this->year= $year;
    }

    public function getfee() {
        return $this->fee;
    }

    public function setfee($fee):void {
        $this->fee = $fee;
    }


    public function display() {
        parent::display();
        echo "Course: " . $this->course . "\n";
        echo "year:".$this->year. "\n";
        echo "fee:".$this->fee."\n";
    }
}

// Staff.php
class Staff extends Person {
    protected string $school;
    protected float $pay;

    public function __construct($name, $age, $school, $pay) {
        parent::__construct($name, $age);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getDepartment() {
        return $this->school;
    }

    public function setDepartment($school) {
        $this->school = $school;
    }

    public function getpay() {
        return $this->pay;
    }

    public function setpay($pay) {
        $this->school = $pay;
    }


    public function display() {
        parent::display();
        echo "school: " . $this->school 
        .$this->pay. "\n";
    }
}
$react= new Staff ("omar" , 20,"elaqaad", 5000 );
$react->display();

////////////////////////////4.5

// Shape class
/*
class Shapee {
    private $color;
    private $filled;

    public function __construct($color = "green", $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function isFilled() {
        return $this->filled;
    }

    public function setFilled($filled) {
        $this->filled = $filled;
    }

    public function __toString() {
        return "A Shape with color of " . $this->color . " and " . ($this->filled ? "filled" : "not filled");
    }
}

// Circle class
class Circlee extends Shapee {
    private $radius;

    public function __construct($radius = 1.0, $color = "green", $filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }

    public function __toString() {
        return "A Circle with radius=" . $this->radius . ", which is a subclass of " . parent::__toString();
    }
}

// Rectangle class
class Rectanglee extends Shapee {
    private $width;
    private $length;

    public function __construct($width = 1.0, $length = 1.0, $color = "green", $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getArea() {
        return $this->width * $this->length;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->length);
    }

    public function __toString() {
        return "A Rectangle with width=" . $this->width . " and length=" . $this->length . ", which is a subclass of " . parent::__toString();
    }
}

// Square class
class Squaree extends Rectanglee {
    public function __construct($side = 1.0, $color = "green", $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function setWidth($width) {
        parent::setWidth($width);
        parent::setLength($width);
    }

    public function setLength($length) {
        parent::setLength($length);
        parent::setWidth($length);
    }

    public function __toString() {
        return "A Square with side=" . $this->getWidth() . ", which is a subclass of " . parent::__toString();
    }
}

// Test program
$shape = new Shapee();
echo $shape->__toString() . "\n";

$shape->setColor("blue");
$shape->setFilled(false);
echo $shape->__toString() . "\n";

$circle = new Circlee(5.0, "red", true);
echo $circle->__toString() . "\n";
echo "Area: " . $circle->getArea() . "\n";
echo "Perimeter: " . $circle->getPerimeter() . "\n";

$rectangle = new Rectanglee(4.0, 5.0, "yellow", false);
echo $rectangle->__toString() . "\n";
echo "Area: " . $rectangle->getArea() . "\n";
echo "Perimeter: " . $rectangle->getPerimeter() . "\n";

$square = new Squaree(6.0, "green", true);
echo $square->__toString() . "\n";
echo "Area: " . $square->getArea() . "\n";
echo "Perimeter: " . $square->getPerimeter() . "\n";
*/

/////////////////////////6.1


// Shape class

abstract class Shape {
    protected $color;
    protected $filled;

    public function __construct($color = "green", $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function isFilled() {
        return $this->filled;
    }

    public function setFilled($filled) {
        $this->filled = $filled;
    }

    public function __toString() {
        return "A Shape with color of " . $this->color . " and " . ($this->filled ? "filled" : "not filled");
    }

    abstract public function getArea();
    abstract public function getPerimeter();
}

// Circle class
class Circle extends Shape {
    private $radius;

    public function __construct($radius = 1.0, $color = "green", $filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }

    public function __toString() {
        return "A Circle with radius=" . $this->radius . ", which is a subclass of " . parent::__toString();
    }
}

// Rectangle class
class Rectangle extends Shape {
    private $width;
    private $length;

    public function __construct($width = 1.0, $length = 1.0, $color = "green", $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getArea() {
        return $this->width * $this->length;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->length);
    }

    public function __toString() {
        return "A Rectangle with width=" . $this->width . " and length=" . $this->length . ", which is a subclass of " . parent::__toString();
    }
}

// Square class
class Square extends Rectangle {
    public function __construct($side = 1.0, $color = "green", $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function setWidth($width) {
        parent::setWidth($width);
        parent::setLength($width);
    }

    public function setLength($length) {
        parent::setLength($length);
        parent::setWidth($length);
    }

    public function __toString() {
        return "A Square with side=" . $this->getWidth() . ", which is a subclass of " . parent::__toString();
    }
}

// Test program
$shape = new Circle(5.0, "red", true);
echo $shape->__toString() . "\n";
echo "Area: " . $shape->getArea() . "\n";
echo "Perimeter: " . $shape->getPerimeter() . "\n";

$shape = new Rectangle(4.0, 5.0, "yellow", false);
echo $shape->__toString() . "\n";
echo "Area: " . $shape->getArea() . "\n";
echo "Perimeter: " . $shape->getPerimeter() . "\n";

$shape = new Square(6.0, "green", true);
echo $shape->__toString() . "\n";
echo "Area: " . $shape->getArea() . "\n";
echo "Perimeter: " . $shape->getPerimeter() . "\n";









?>