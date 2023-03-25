<?php

$name = 'Smrity';
$bill = 700;
echo "Hi {$name}, Thanks for your ordeer. Now Pay Your bill {$bill} taka";
echo "<hr>" ; 

#Constant Variable

define ('Type', 'Constant Variable');
define ('Name', 'Mst. Sahida Akter');
define ('Age', '24');
define ('Skill', 'PHP Developer');
echo " Hello, this is " .Type ;
echo "<br>" ;
echo " My name is " .Name ;
echo "<br>" ;
echo " I am 24 years old " .Age ;
echo "<br>" ;
echo " I am a " .Skill ;
echo "<hr>" ;

#if else statement

$age = 50;
$card = '';
if($age>=30){
    echo "You are Welcome";
}else{
   echo "We are sorry";
}
echo "<hr>" ;

#Logical Operator &&

$age = 20;
$card = 'true';
if($age>=30 && $card == true){
    echo "You are Welcome";
}else{
   echo "We are sorry";
}
echo "<hr>" ;

#Logical Operator &&

$age = 50;
$card = 'true';
if($age>=30 || $card == false){
    echo "You are Welcome";
}else{
   echo "We are sorry";
}
echo "<hr>" ;

# A simple marks calculation with if else condition.

$marks = 99;

if( $marks >= 0 && $marks <= 32){
  echo "<h3 style = 'color:red'>Sorry You are failed. </h3>";
}else if ( $marks >= 33 && $marks <= 40 ){
    echo "<h3 style = 'color:Orange'>You got D Grade. </h3>";
}
else if ( $marks >= 41 && $marks <= 50){
    echo "<h3 style = 'color:yellow'>You got C Grade. </h3>";
}
else if ( $marks >= 51 && $marks <= 60 ){
    echo "<h3 style = 'color:C733FF'>You got B Grade. </h3>";
}
else if ( $marks >= 61 && $marks <= 70 ){
    echo "<h3 style = 'color:#33DAFF'>You got A- Grade. </h3>";
}
else if ( $marks >= 71 && $marks <= 80 ){
    echo "<h3 style = 'color:F633FF'>You got A Grade. </h3>";
}
else if ( $marks >= 81 && $marks <= 90 ){
    echo "<h3 style = 'color:Blue'>You got A+ </h3>";
}
else if ( $marks >= 91 && $marks <= 100 ){
    echo "<h3 style = 'color:EFB329'>You got Golden A+ </h3>";
}else{
    echo "Not a valid Number";
}
echo "<hr>" ;

#Null Coalescing

echo $namee ?? 'empty';
echo "<br>" ;
$nam = 'I lovee Php';
echo $nam ?? 'not found';
echo "<hr>" ;

#Ternary Operator

$boyosh = 15;
echo $boyosh >= 18 ? "You are ready for marriage" : "you are not ready";
echo "<hr>" ;

#Currency Converter

$amount =120;
$rate = 85.34;
$bdt = $amount*$rate;
echo "{$amount} dollar = {$bdt} BDT";
echo "<hr>" ;

# currency converter with if else

$amount = 500;
$type = "dollar";
$rate = 85.34;

if ($type == "dollar"){
   $rate = 85.34;
}else if ($type == "pound"){
    $rate = 116;
}
else if ($type == "Euro"){
    $rate = 95;
}
else if ($type == "Won"){
    $rate = 0.071;
}

$bdt = $amount * $rate;
echo "{$amount} {$type} = {$bdt} BDT";
echo "<hr>" ;

# currency converter with Switch Case

switch ($type){
    case 'dollar' :
        $rate = 85.34;
        break;
    case 'dollar' :
        $rate = 85.34;
        break;  
    case 'dollar' :
        $rate = 85.34;
        break;
    case 'dollar' :
        $rate = 85.34;
        break;
    default :
    $rate = 0;
    break;

$bdt = $amount * $rate;
echo "{$amount} {$type} = {$bdt} BDT";
echo "<hr>" ;
}

$marks = 80;
switch ($marks) {
    case $marks >=0 && $marks <= 32:
        $result = 'F';
        break;
        case $marks >=33 && $marks <= 40:
            $result = 'D';
            break;
        case $marks >=41 && $marks <= 50:
            $result = 'C';
            break;
        case $marks >=51 && $marks <= 60:
            $result = 'B';
            break;
        case $marks >=61 && $marks <= 70:
            $result = 'A-';
            break;
        case $marks >=71 && $marks <= 80:
            $result = 'A';
            break; 
        case $marks >=81 && $marks <= 90:
            $result = 'A+';
            break;   
        default:
        # code...
        break;
}
  echo $result;
  echo "<hr>";

 # Isset function()

if ( isset($anything)){
   echo " Value set";
}else{
    echo "value not set";
}
echo "<hr>";

 # Empty function()

 if ( empty($abul)){
    echo " Value is empty";
 }else{
     echo "value is not empty";
 }
 echo "<hr>";

 # Die function()
 
 echo "This is Sahida akter Smrity";
 echo "<br>";
 echo "I am A PHP Developer";
 echo "<br>";
 #die();
 echo "I have graduated from UITS with a bachelor degree";
 echo "<hr>";

 #for loop
 #example 01

 for ( $i = 0; $i<10; $i++){
  echo "I love PHP = {$i} <hr>";
 }

#example 02

for($start = 50; $start >=40; $start-- ){
   echo " I am laravel developere {$start} <hr>";
}

#example 03

for ( $i =1; $i<100; $i++){
  if($i%2==0){
    echo "Loop even value {$i} <hr>";
  }
}

#example 04

for ( $i = 1; $i <= 100; $i++ ){
   if( $i > 50 && $i <= 90 ){
    if($i % 2 == 0){
        echo " I er even Value {$i} <hr>";
    }
   }
}

#example 05

for ( $start = 1; $start <= 1000; $start = $start+2 ){
   if( $start > 100 && $start <= 300 && $start % 11 == 0 ){
        echo " start er Value {$start} <hr>";
    }
   }

#while loop 
#example 01

 $i = 1;
 while ( $i <= 100 ){
   echo "while Loop value = {$i} <hr>";
   $i++;
 }

 #example 02

 $start = 50; 
 while ($start >= 40){
   echo " I am laravel developere {$start} <hr>";
    $start-- ;
}

# Do while loop
  $start = 50; 
  do{
    echo " I am laravel developere {$start} <hr>";
    $start-- ;
  }while($start >= 40);

#Build in fuction

#strlen
$php = "Hi I am PHP";
echo strlen($php);
echo "<hr>";

#str_word_count
$java = "Hi I am Java";
echo str_word_count($java);
echo "<hr>";

#UcFirst
$python = "hi I am Python";
echo UcFirst($python);
echo "<hr>";

#UcWords
$javaScript = "hi i am javaScript";
echo UcWords($javaScript);
echo "<hr>";

#strpos
$react = "hi i am I am 8oing to learn react";
echo strpos($react,"going to learn");
echo "<hr>";

#strpos
$C = "hi I am going to learn C language";
echo substr($C, 8,6);
echo "<hr>";

#str_replace()
$Angular = "hi I am going to learn C language";
echo substr_replace('C', 'Angular', $Angular );
echo "<hr>";

#str_shuffle()
$code= str_shuffle('ABCDE*&&$-+;0uut7tgvv');
echo $code;
echo "<hr>";

#MD5()
$md = 'ABCDEFGHIJKLMNOP';
echo md5($md);
echo "<hr>";

#password_hash
$hash = 'akjjdgfukaxhgyisokkjhg';
echo password_hash($hash, PASSWORD_DEFAULT);
echo "<hr>";

#rand
echo rand(1,9);
echo "<hr>";

#round
$amount = 150.27;
echo round ($amount);
echo "<hr>";

#floor and ceil
$amo = 120.27;
echo ceil ($amo);
echo "<hr>";

$amou = 130.50;
echo floor ($amou);
echo "<hr>";

#PHP Function

#function 01
include_once "./function.php";
info();
echo "<hr>";

#function 02
devs_info('Mst. Sahida Akter', 'Web developer', 24);
echo "<hr>";
devs_info('Asraf', 'Mentor of coderstrust Bangladeesh', 40);
echo "<hr>";
devs_info('Mina', 'Android app developer', 25);
echo "<hr>";
devs_info('Tina', 'Dekstop Application developer', 30);
echo "<hr>";

#function 03

teachers_info ('UITS', 'Machine Learrning Teacher', 2020);
echo "<hr>";
teachers_info ('AUST', 'Artificial Intelligence Teacher', 2010);
echo "<hr>";
teachers_info ('NSU', ' Operating System Teacher', 2000);
echo "<hr>";

# return function 04
agecal ('Smrity', 1998);
echo "<hr>";

# return function 05
echo getBMI(72, 1.574645);
echo "<hr>";

#Array

$foods = ['apple', 'orange', 'banana', 'mango', 'alo'];
var_dump ($foods);
echo '<hr>';
print_r($foods);

$foods = ['apple', 'orange', 'banana', 'mango', 'alo'];
echo "<pre>";
print_r($foods);
echo "</pre>";

$foods = ['apple', 'orange', 'banana', 'mango', 'alo'];
echo $foods [1]. $foods[2];

#Indexed Array
$devs = ['Niloy', 'Robiul', 'Shahidul', 'Arafat', 'Sarif'];
echo "<pre>";
print_r($devs);
echo "</pre>";

#Associated array
$devs_location =[

    'uttara'  =>  'Niloy',
    'banani'  =>   'Robiul',
    'mirpur'  =>   'Badol',
   
 
];

echo "<pre>";
print_r($devs_location);
echo "</pre>";

#Multidimensional array
$developer_location =[

 [
    'Gulshan'  =>  'Sarif',
    'Nilkhet'  =>   'Arafat',
    'Uttara'  =>   'Omar',
   
 ]
];

echo "<pre>";
print_r($developer_location);
echo "</pre>";

#Array ForEach loop
$foods = ['apple', 'orange', 'banana', 'mango', 'alo'];
foreach ($foods as $iteams) {
    echo "{$iteams} <hr>";
}

#Array Data structure
$devs = [

  # 0 index data

  [
    'name'    =>  'Omar Faruk',
    'age'     =>   10,
    'skill'   =>   'PHP Developer',
    'desc'    =>   'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
    'Photo'   =>   'data:image/jpeg;base64,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'
  ],

  # 1 index data

  [
    'name'    =>  'Rabiul Islam',
    'age'     =>   20,
    'skill'   =>   'Men Stack Developer',
    'desc'    =>   'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
    'Photo'   =>   'data:image/jpeg;base64,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'
  ],

  # 2 index data

  [
    'name'    =>  'Aminul Islam',
    'age'     =>   22,
    'skill'   =>   'Python Developer',
    'desc'    =>   'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
    'Photo'   =>   'data:image/jpeg;base64,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'
  ]

  ];

echo "<pre>";
print_r($devs);
echo "</pre>";



?>

