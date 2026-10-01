
<?php

class Employee
{
    private $name;
    private $title;

//Getter Function 
    public function getName() {
        return $this->name;
    }
    
//Setttr Function     
    public function setName($name) {
        $this->name = $name;
    }
    public function sayHello() {
        echo "Hi, my name is {$this->getName()}.";
    }
} //end of class

$exp1 = new Employee();
$exp1->setName("Rokon Ahmed");
//echo $exp1->getName();
$exp1->sayHello();

//echo "<pre>";
//var_dump($exp1);

?>