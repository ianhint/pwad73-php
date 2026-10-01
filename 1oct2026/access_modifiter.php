<?php


class MyClass {

//Property Public,Protected,Private 
    public $name;
    

//Methot
    function welcome(){
        echo "Hello " .$this->name . "<br>";
        

    }
}

//Object
    $obj1 = new MyClass;

    $obj1->name = "Ismail";
    $obj1-> welcome();

    

?>