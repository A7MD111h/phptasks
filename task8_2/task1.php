<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Logical_Statements</h1>
    <br>
<p>Q1</p>
    <?php
   
    // 1.	Write a PHP script to see if the specified year is a leap year or not.
    // Sample Input: 2013
    // Sample Output: ‘This year is not a leap year’
    
    function isLeapYear($year) {
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            return true;
        } else {
            return false;
        }
    }
    
    $year = 2013;
    if (isLeapYear($year)) {
        echo "This year is a leap year";
    } else {
        echo "This year is not a leap year";
    }

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q2</p>
    <?php
    // Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
    // Sample Input: 27
    // Sample Output: ‘It is summertime!’
    date_default_timezone_set('Europe/London');
    $hourNow=date("H");
    switch ($hourNow){
        case (($hourNow>=5) && ($hourNow<8)):
            print 'It\'s early morning.'; 
            break;
        case (($hourNow>=9) && ($hourNow<=16)):
            print ('Summer time!');
            break;
        default :
            print ("It's late at night.");
            break;

    }
    
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q3</p>
    <?php
    // Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
    // Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
    // Sample Output: ( 2 + 2 ) * 3 = 12
    // Sample Output: ‘It is summertime!’
    function calculate($arrInput=[]){
        if(count($arrInput)<2 || empty($arrInput)){return false;}
        $firstInt=$secondInt=0;$result="";
        foreach($arrInput as $key=>$value){
            switch($key){
                case 'firstInteger':

            }
        }
    }
    
?>

    <?php
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q4</p>
    <?php
    //Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
    // Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
    // Sample Output: ‘false’
    /** Function to check whether two integers are equal or not */
    function compareIntegers ($inputArray) {
        extract($inputArray);
        return (int)$firstInteger === (int)$secondInteger;
        /* Test Cases*/
        # Case-1 : First integer is greater than the Second Integer. Expected output should be false
    }
    
    
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q5</p>
    <?php
    
    // 5.	Write in PHP script to check if the given positive number is a multiple of 3.
    // Sample Input: number = 20
    // Sample Output: ‘false’

    function isMultipleOf3($number) {
        return ($number % 3 === 0) ? 'true' : 'false';
    }
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q6</p>
    <?php
    // 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
    // Sample Input: number = 50
    // Sample Output: ‘true’
    function isInRange($number) {
        return ($number >= 20 && $number <= 50) ? 'true' : 'false';
    }
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q7</p>
    <?php
    // 7.	Write PHP script to find the largest number between the three integers
    // Sample Input: [ 1, 5, 9 ]
    // Sample Output: 9
    
    function findLargestNumber($numbers) {
        return max($numbers);
    }
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>8</p>
    <?php
    // 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
    // a.	For first 50 units – 2.50 JOD/Unit
    // b.	For next 100 units – 5.00 JOD/Unit
    // c.	For next 100 units – 6.20 JOD/Unit
    // d.	For units above 250 – 7.50 JOD/Unit
    function calculateElectricityBill($units) {
        if ($units <= 50) {
            return $units * 2.50;
        } elseif ($units <= 150) {
            return (50 * 2.50) + (($units - 50) * 5.00);
        } elseif ($units <= 250) {
            return (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
        } else {
            return (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
        }
    }
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q9</p>
    <?php
    // Write php script to make a calculator, the calculator should contain the four main operations 

    // e.	Addition
    // f.	Subtraction
    // g.	Multiplication
    // h.	Division
    
    function addition($num1, $num2) {
        return $num1 + $num2;
    }

    function subtraction($num1, $num2) {
        return $num1 - $num2;
    }

    function multiplication($num1, $num2) {
        return $num1 * $num2;
    }

    function division($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Cannot divide by zero!";
        }
    }

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q10</p>
    <?php
    // 10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
    // Sample Input: 15
    // Sample Output: ‘is no eligible to vote’
    function checkEligibilityToVote($age) {
        return ($age >= 18) ? 'is eligible to vote' : 'is not eligible to vote';
    }
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q11</p>
    <?php
    // 11.	Write php script  to check whether a number is positive, negative or zero
    // Sample Input: -60
    // Sample Output: ‘Negative’
    function checkNumber($number) {
        if ($number > 0) {
            return 'Positive';
        } elseif ($number < 0) {
            return 'Negative';
        } else {
            return 'Zero';
        }
    }
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q12</p>
    <?php
    // 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 
    // Sample Inputs: [60,86,95,63,55,74,79,62,50]
    // Sample Output: ‘D’
    // Range	Grade
    // <60	F
    // <70	D
    // <80	C
    // <90	B
    // <100	A
    
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    
</body>
</html>