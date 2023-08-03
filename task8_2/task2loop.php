<?php
//task1
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}
?>
<?php
//task2
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo $total;
?>

<?php
//task3
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j <= $i) {
            echo $i . " ";
        } else {
            echo $j . " ";
        }
    }
    echo PHP_EOL;
}
?>
<?php
//task4
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j == $i) {
            echo $i . " ";
        } else {
            echo "0 ";
        }
    }
    echo PHP_EOL;
}
?>
<?php
//task5
function factorial($number) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

$number = 5;
echo factorial($number);
?>

<?php
//task6
function fibonacci($n) {
    $fibonacci_sequence = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci_sequence[$i] = $fibonacci_sequence[$i - 1] + $fibonacci_sequence[$i - 2];
    }
    return implode(", ", $fibonacci_sequence);
}

$n = 10;
echo fibonacci($n);
?>
<?php
//task7
$text = "Orange Coding Academy";
$count = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] == 'c' || $text[$i] == 'C') {
        $count++;
    }
}
echo $count;
?>
<?php
//task8
echo '<table cellpadding="3px" cellspacing="0px">';
for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        echo '<td>' . $i . ' * ' . $j . ' = ' . ($i * $j) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
<?php
//task9
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 === 0) {
        echo "Fizz ";
    } elseif ($i % 5 === 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}
?>
<?php
//task10
$n = 5;
$num = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo PHP_EOL;
}
?>
<?php
//task11
$size = 5;
$letters = range('A', 'Z');

for ($i = 0; $i < $size; $i++) {
    for ($j = $size - 1; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 0; $k <= $i; $k++) {
        echo $letters[$k] . " ";
    }
    echo PHP_EOL;
}

for ($i = $size - 2; $i >= 0; $i--) {
    for ($j = $size - 1; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 0; $k <= $i; $k++) {
        echo $letters[$k] . " ";
    }
    echo PHP_EOL;
}
?>