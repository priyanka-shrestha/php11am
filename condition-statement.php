<?php



// Nested if Statement

//...............................................................
//$x = 10;
//$y = 20;
//$z = 30;
//if ($x > $y and $x > $z) {
//    echo " x is larger";
//}
//else if ($y> $x and $y> $z) {
//    echo " Y is larger ";
//}
//else
//    echo " Z is larger ";
//    if ($x > $y) {
//        echo "x is larger";
//    }
//
//    else {
//        echo " y is larger ";
//    }
//...................................................

$name = 'Sam';
$password = "Alot10";
//.........................................................
//if ($name == 'Sam' & $password == "Alot10"){
//    echo "Welcome ";
//    }
//    else if($name != 'Sam' & $password != "Alot10"){
//        echo "Wrong Username and password";
//    }
//    else if ($name == 'Sam' & $password != "Alot10"){
//        echo "Wrong Password";
//    }
//    else echo "User name not found";
//.....................................................

if ($name == 'Sam' & $password == "Alot10"){
   echo "Welcome ";
    }
    else if($name!= 'Sam'){
        echo "Wrong username";
    }
    else echo "Wrong Password";