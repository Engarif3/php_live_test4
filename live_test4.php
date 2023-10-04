<!-- Task 1: -->

<?php 
class Person {

    public $name;
    public $age;


    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old.\n";
    }
}

// Example:
$person = new Person("John", 30);
$person->introduce();

echo "<br>";
echo "<br>";

?>

<!-- Task 2: -->

<?php
class Student extends Person {

    public $mark;

    public function __construct($name, $age, $mark) {
        parent::__construct($name, $age);
        $this->mark = $mark;
    }
    
    public function introduce() {
        echo "My name is {$this->name}, I am {$this->age} years old.<br>";
    }

    public function calculate_grade_percentage() {
        return "{$this->mark}%";
    }
}

// Example usage
$student = new Student("Alice", 18, "85");
$student->introduce();
$gradePercentage = $student->calculate_grade_percentage();
echo "My grade percentage is {$gradePercentage}\n";

?>