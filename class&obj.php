<?php
class person{
    public $firstname;
    public $lastname;
    public $age;
    public function _construct($firstname,$lastname,$age){
        $this->firstname =$firstname;
        $this->lastname =$lastname;
        $this->age =$age;
    }
    public function displayInfo(){
        echo "Name:". $this->firstname."". $this->lastname."\n";
        echo "Age:".$this->age."years old\n";
    }
}
$person1 = new person("Mayuri","Rane","20");
$person1 = new person("Mamta","patil","24");
?>