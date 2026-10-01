<?php


class MyClass {

//Property
    public $name;
    public $age;

//Methot
    function welcome(){
        echo "Hello".$this->name . "<br>";
        

    }
}

//Object
    $obj1 = new MyClass;
    $obj1->name ="Ismail";
    

    $obj1->welcome();

    //echo "<pre>";
    //var_dump($obj1);


    $obj2 = new MyClass;

    var_dump($obj2);

?>