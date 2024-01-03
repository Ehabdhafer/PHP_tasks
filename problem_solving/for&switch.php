<?php
// Q1 Evaluate each of the following expressions and show the value
// 1. ‐9*3                                    -27
// 2. “value is “ + 50                        value is50
// 3. 17 % 5                                  2
// 4. 5 % 17                                  5
// 5. 5/10                                    0.5
// 6. (4 == 4)                                true
// 7. (4 != 5)                                true
// 8. (7 <= 8)                                true
// 9. echo ceil($x) - floor($x)               1

echo "<br>";
// Q2 : Read in two numbers and display them in ascending order.
$x = 12;
$y = 8;

if ($x > $y) {
    echo "$x <br> $y";
} else {
    echo "$y <br> $x";
}

// Q3 Read in two numbers and display the larger
echo "<br>";
echo $x > $y ? "large is $x" : "large is $y";

// Q4 Read two numbers and display their sum. 
echo "<br>";
echo $x + $y;

echo "<br><br>";

// Q5 If you have a “num” variable,  Your task is to print:

// - ONE, if it is equal to 1 .
// - TWO, if it is equal to 2.
// - THREE, if it is equal to 3 .
// - FOUR, if it is equal to 4.
// - FIVE, if it is equal to 5.
// - SIX, if it is equal to 6 .
// - PLEASE TRY AGAIN, if there is none of the above.
$z = 8;
switch ($z) {
    case $z == 1:
        echo "first";
        break;
    case $z == 2:
        echo "second";
        break;
    case $z == 3:
        echo "third";
        break;
    case $z == 4:
        echo "fourth";
        break;
    case $z == 5:
        echo "fifth";
        break;
    case $z == 6:
        echo "sixth";
        break;
    default:
        echo "PLEASE TRY AGAIN";
        break;
}

// Q6 Use a loop to display the numbers 0 through 5
echo "<br><br>";
for ($i = 0; $i <= 5; $i++) {
    echo "$i   ";
}
// Q7 Use a loop to display the numbers in the range 0…20 that are multiples of 3. 
echo "<br><br>";
for ($i = 0; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        echo "$i _";
    } else {
        continue;
    }
}

// Q8 an integer, then display the sum of the integers from 0 through the number entered.  
// For example, if you enter 10, then display 55 which is the sum of   0 + 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10

echo "<br><br>";
$a = 10.95;
$b = ceil(0);
for ($i = 0; $i <= $a; $i++) {
    $b += $i;
}
echo $b;

// Q9 an integer, then display the average of the integers from 0 through the number entered.For example, 
//if you enter 10,then display 5 which is the average of   (0 + 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10)/11.
echo "<br><br>";
$c = 12;
$e = ceil(0);
for ($i = 0; $i <= $c; $i++) {
    $e += $i;
}
echo (int)($e / ($c + 1));

error_log("hello $c");
