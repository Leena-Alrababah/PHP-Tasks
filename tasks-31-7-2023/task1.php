<?php
// 1.	Write a PHP script to see if the specified year is a leap year or not.

// Sample Input
$year = 2013;

// Check if it's a leap year
if (($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0)) {
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}

echo "<br>---------------------------------<br>";
// 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’

$temperature = 27;

// Check the season based on the temperature
if ($temperature < 20) {
    echo "It is winter!";
} else {
    echo "It is summertime!";
}

echo "<br>---------------------------------<br>";
// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
// Sample Input: [   =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12

$firstInteger = 2;
$secondInteger = 2;

if ($firstInteger == $secondInteger) {
    $result = ($firstInteger + $secondInteger)*3;
    echo "($firstInteger + $secondInteger)*3 = $result";
}else {
    $result = ($firstInteger + $secondInteger);
    echo "($firstInteger + $secondInteger) = $result";
}


echo "<br>---------------------------------<br>";
// 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’
$firstInteger = 10;
$secondInteger = 10;

if ($firstInteger + $secondInteger == 30) {
    echo $firstInteger + $secondInteger;
} else {
    echo "false";
}


echo "<br>---------------------------------<br>";
// 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’
$number = 20;

if ($number > 0 && $number % 3 == 0){
    echo "true";
}else {
    echo "false";
}


echo "<br>---------------------------------<br>";
// 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’
$number = 50;

if ($number <= 50 && $number >= 20) {
    echo "true";
} else {
    echo "false";
}


echo "<br>---------------------------------<br>";
// 7.	Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9
$numbers = [ 1,5,9 ];

// Find the largest number in the array
$largestNum = max ($numbers);
echo $largestNum;



echo "<br>---------------------------------<br>";
// 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit

function calculateElectricityBill($units) {
    $totalBill = 0;

    // Calculate for the first 50 units
    if ($units <= 50) {
        $totalBill = $units * 2.50;
    } elseif ($units <= 150) {
        // Calculate for the next 100 units
        $totalBill = 50 * 2.50 + ($units - 50) * 5.00;
    } elseif ($units <= 250) {
        // Calculate for the next 100 units
        $totalBill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
    } else {
        // Calculate for units above 250
        $totalBill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
    }

    return $totalBill;
}

// Sample Input
$givenUnits = 120;

// Calculate the bill
$billAmount = calculateElectricityBill($givenUnits);

// Output
echo "Your monthly electricity bill is: $billAmount JOD";




echo "<br>---------------------------------<br>";
// 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’

function check ($age) {
    if ($age < 18 ) {
        echo "is no eligible to vote";
    } else {
        echo "is eligible to vote";
    }
}

$age = 23;
echo check ($age);



echo "<br>---------------------------------<br>";
// 10.	Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’

function check2 ($num){
if ($num < 0){
    echo "Negative";
} elseif ($num == 0) {
    echo "Zero";
} else {
    echo "Positive";
}
}

// $num = 23;
// echo check2 ($num);
echo check2 (-60);



echo "<br>---------------------------------<br>";
// 11.	Write php script to make a calculator, the calculator should contain the four main operations 

// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division

function calculator ($num1 , $num2) {
    $addition = $num1 + $num2;
    echo "$num1 + $num2 = $addition";
    echo "<br>";

    $subtraction = $num1 - $num2;
    echo "$num1 - $num2 = $subtraction";
    echo "<br>";

    $multiplication = $num1 * $num2;
    echo "$num1 * $num2 = $multiplication";
    echo "<br>";

    if ($num2 == 0) {
        return "Error: Cannot divide by zero!";
    } else {
    $division = $num1 / $num2;
    echo "$num1 / $num2 = $division";
    }

}

echo calculator (4,0);





echo "<br>---------------------------------<br>";
// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’








