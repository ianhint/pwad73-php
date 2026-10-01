<?php


class MyClass {

    public $name;
    protected $age;

//Methot
    function welcome(){
        echo "Hello".$this->name . "<br>";
        

    }
}

class Child_one extends MyClass {
    public $age =30;

}

//Object
    $obj1 = new MyClass;

    $obj1->name ="Ismail";
    var_dump($obj1);

    

?>