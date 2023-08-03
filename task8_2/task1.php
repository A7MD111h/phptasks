<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    <p>Q</p>
    <?php

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