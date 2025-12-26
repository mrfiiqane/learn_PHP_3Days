<?php

// Constructor
class Student {
    public function __construct($name) {
        $this->name = $name;
    }
  	public function print() {
        echo "Name: " . $this->name;
    }
}
$alex = new Student("Alex");
$alex->print();    # => Name: Alex



// Inheritance
class ExtendClass extends SimpleClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();



class Student
{
  public function __construct($name)
  {
    $this->hisName = $name;
  }
}
$his_name = new Student("maxamed");
echo $his_name->hisName;






class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
$myCar = new Car("black", "Toyota");
echo $myCar->message();





?>