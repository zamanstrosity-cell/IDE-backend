<?php 

$lengthInInch = 4;

$lengthInCm = $lengthInInch * 2.5;


echo "Length $lengthInInch inches is $lengthInCm centimeters";

echo "<br>";
echo "<br>";


$number = 5;
$evenCheckText = "";
if($number % 2 == 0){
    $evenCheckText = "Number is Even";
}else {
    $evenCheckText = "Number is Odd";
}

echo "$evenCheckText";

echo "<br>";
echo "<br>";


$fizzBuzz = 32;
$fizzBuzzText = "";
if($fizzBuzz % 3 == 0) {
    $fizzBuzzText .= "Fizz";
}
if($fizzBuzz % 5 == 0){
    $fizzBuzzText .= "Buzz";
}
if($fizzBuzz % 3 !== 0 && $fizzBuzz !== 5){
    $fizzBuzzText = $fizzBuzz;
}

echo "$fizzBuzzText";



echo "<br>.........................<br>";

$first = "Omar";
$last = "Mansour";
$gender = "m";

switch($gender){
    case "m":
        echo "Hello Mr. $first $last";
        break;
    case "f":
        echo "Hello Ms. $first $last";
        break;
    default: 
        echo "Hello $first $last, I don't know your gender";
        break;
}

echo "<br>..........................<br>";

$numOne = 10;
$numTwo = 3;
$operator = "%";
$res = 0;

switch($operator){
    case "+":
        $res = $numOne + $numTwo; 
        echo "$numOne + $numTwo = $res";
    break;
    case "-":
        $res = $numOne - $numTwo; 
        echo "$numOne - $numTwo = $res";
    break;
    case "*":
        $res = $numOne * $numTwo; 
        echo "$numOne x $numTwo = $res";
    break;
    case "/":
        $res = $numOne / $numTwo; 
        echo "$numOne / $numTwo = $res";
    break;
    case "%":
        $res = $numOne % $numTwo; 
        echo "$numOne % $numTwo = $res";
    break;
    default:
        echo "Unknown operation";
    break;
}



echo "<br><br>...........................<br><br>";


$totalMarks = 56;

if($totalMarks >= 90){
    echo "A";    
}else if($totalMarks >= 80){
    echo "B";
}else if($totalMarks >= 70){
    echo "C";
}else if($totalMarks >= 60){
    echo "D";
}else{
    echo "F";
}