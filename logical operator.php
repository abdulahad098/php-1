<?php
// index array
// eg:1
// $color=array ("red","green","yellow");
// print_r ($color);
// // eg 2

//  $color=array("red","green","blue");
//  echo "<pre>";
//  print_r ($color);
//  echo "</pre>";

// eg 3s
//  $color = array ("red","green","blue");
//  $color [3] = "white";
//  echo "<pre>";
//  print_r ($color);
// echo "</pre>";

// Associative array
// eg 1
// $age= array(
//     'aslam' => 24,
//     'abdul'=> 21,
//     'ali'=> 23,
// );
// echo "<pre>";
// print_r ($age);
// echo "</print>";

 $age = array(
    'aslam' => 24,
    'abdul'=> 21,
    'ali'=> 23,
 );
print_r($age);
echo "<br>";

$person = array(
'id'=> 101,
'name'=> 'aslam',
'age'=> 24,
'adress'=> array('karachi','lahore')
);
 print_r ($person['adress']);
 print_r($person);

