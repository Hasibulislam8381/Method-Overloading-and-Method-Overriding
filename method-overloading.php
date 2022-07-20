<?php
  //In Function overloading may we have same function but with have different list of parameters within the same class
  //We use a magic function(__call) in overloading
//   function __call($function_name,$arguments)
//   {
//     Overload the function
       // 1.Check the function name
       // 2. Count the Arguments
//   }

class demo{
    function __call($fn,$arg){
        if($fn=="add"){
            $c = count($arg);
            switch ($c) {
                case 2:
                echo "<h1>Addtion of v1 is </h1>". $arg[0]+$arg[1];
                break;
                case 3:
                echo "<h1>Addtion of v2 is </h1>". $arg[0]+$arg[1]+$arg[2];
                break;
                case 4:
                echo "<h1>Addtion of v3 is </h1>". $arg[0]+$arg[1]+$arg[2]+$arg[3];
                break;
                
                default:
                echo "<h1>No match Found</h1>";
                break;
            }
        }
        if($fn=="mul"){
            $c = count($arg);
            switch ($c) {
                case 2:
                echo "<h1>Multiplications of v1 is </h1>". $arg[0]*$arg[1];
                break;
                case 3:
                echo "<h1>Multiplications of v2 is </h1>". $arg[0]*$arg[1]*$arg[2];
                break;
                case 4:
                echo "<h1>Multiplications of v3 is </h1>". $arg[0]*$arg[1]*$arg[2]*$arg[3];
                break;
                
                default:
                echo "<h1>No match Found</h1>";
                break;
            }
        }
        
    }
}
$obj = new demo();
$obj->add(12,34);
$obj->add(34,12,45);
$obj->add(34,12,45,9);
$obj->add(12);
$obj->mul(12,34);
$obj->mul(34,12,45);
$obj->mul(34,12,45,9);
$obj->mul(12);



?>