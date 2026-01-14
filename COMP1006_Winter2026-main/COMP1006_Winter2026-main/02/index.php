//1. Set Up & Start 
<?php
declare(strict_types=1);
//3. Variables, Data Tyoes, Concatenation, Conditional Statements & Echo
$firstName = "Max";
$lastName = "Brushette";
$age = 20;
$isStudent = true;

if($isStudent){
    echo "<p> I am a student. </p>";
}
else{
    echo "<p> I am not a student </p>";
}

//4. Loosely Typed Language Demo
$num1 = 1;
$num2 = 3;

function add(int $num1, int $num2) : int{
    return $num1 + $num2;
}
echo "<p>" . add($num1, $num2) . "</p>";

//5. Strict Types & Types Hints


//6. OOP with PHP 
class Person{
    public string $name;
    public int $age;
    public bool $isStudent;

    public function __construct(string $name, int $age, bool $isStudent){
        $this->name = $name;
        $this->age = $age;
        $this->isStudent = $isStudent;
    }
    public function getBadge(): string{
        $role = $this->isStudent ? "Student" : "Instructor";
        return "Name : ($this->name) | Age: ($this->age) | Role : $role";
    }
}

$person  = new Person("Max",20,true);

echo $person->getBadge();

?>