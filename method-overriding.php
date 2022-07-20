<?php

//Method overriding When Ineritence
//Parent class and child class function name will be same with same number of arguments
class A{
    public function hello(){
        echo "Hello From base class";
    }
}
class B extends A{
    public function hello(){
        echo "Hello From derived class";
    }
}

$obj = new B();
$obj->hello();

?>