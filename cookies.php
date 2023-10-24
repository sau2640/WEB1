<?php
class person {
    public $name;
    public $age;

    public function _construct($name,$age){
        $this->name = $name;
        $this->age = $age;
        echo "A new person object has been created.Name: $this->name,Age:$this->age\n";
    }
    public function sayHello(){
        echo "Hello,my name is $this->name,and I am $this->age years old.\n";
    }
}
$person1 =new person("John",30);
$person2 =new person("Alice",25);
$person2->sayHello();
?>