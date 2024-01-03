<?php
echo "<h1>", "higher Order Function </h1>";
echo "<br><br>";

/* Q1  create a function that takes two arguments, one is an array and the other is a number,
then return the index of the given value or return -1 if the element cannot be found.
*/
$arr = [2, 7, 9, 4, 6, 8];
$value = 4;
function my($arr, $value){
    $se = array_search($value, $arr);
    return ($se) ? $se : -1;
};
echo my($arr, $value);

echo "<br><br>";
// Q3- create a function that takes an array of integers 
// and returns a new array with the same integers without the duplicates 

$arr = [2, 4, 8, 4, 6, 8, 8, 5];
function a($arr){
    return array_unique($arr);
};
echo implode(a($arr));
echo "<br> OR <br>";
echo implode(array_unique($arr));
echo "<br> OR <br>";
print_r(a($arr));

echo "<br>  <br>";
// Q4- create a function that takes an array of integers and returns the average of all the numbers in it 
echo (int)(array_sum($arr) / count($arr));

// 5- Write a function that, takes an array of integers as input, iterates over the array, 
// and returns a new array.
//  The returned array should contain the result of raising 2 to the power of the original input element.
// For example,([1,2,3]) returns [2,4,8] because 2 ^ 1 = 2, 2 ^ 2 = 4, and 2 ^ 3 = 8.
// Use for and forEach and then map to solve this question to see the difference between the three ways 
echo "<br>  <br> for ";
$arr = [1, 2, 3, 4, 5, 6];
for ($i = 0; $i < count($arr); $i++) {
    $power = pow(2, $arr[$i]);
    echo "$power _";
}
echo "<br>foreach ";
foreach ($arr as $a) {
    echo pow(2, $a), "_";
};
echo "<br>map ";
function sq($arr)
{
    return pow(2, $arr) . "_";
}
echo implode(array_map("sq", $arr));

// 6- Write a function that takes an array of numbers as input,
//  uses map to return a new array where each element is either the string "even" or the string "odd",
//  based on each value.
// If any element in the array is not a number, the resulting array should have the string "N/A" in its place.
// For example:([1,2,3,"Rawan"]) returns ['odd','even','odd','N/A'].
echo "<br>  <br>";
$arr = [1, 2, 3, 4, 5, 6, "Rawan"];
function st($arr){
    if (is_numeric($arr)) {
        if ($arr % 2 !== 0) {
            echo "odd _";
        } else {
            echo "even _";
        }
    } else {
        echo "N/A _";
    }
}
echo implode(array_map("st", $arr));


// Q7- Write a function named fizzbuzz that takes in an array of numbers.
// Iterate over the array using forEach or map to determine the output based on several rules:
//     - If a number is divisible by 3, add the word "Fizz" to the output array.
//     - If the number is divisible by 5, add the word "Buzz" to the output array.
//     - If the number is divisible by both 3 and 5, add the phrase "Fizz Buzz" to the output array.
//     - Otherwise, add the number to the output array.
//   Return the resulting output array.
echo "<br>  <br>";
$arr = [1, 2, 3, 4, 5, 6, 7, 15];
$new = [];
function fizzbuzz($arr){
    if ($arr % 3 == 0 && $arr % 5 == 0) {
        return "- Fizz Buzz -";
    } else if ($arr % 5 == 0) {
        return "- Buzz -";
    } else if ($arr % 3 == 0) {
        return "- Fizz -";
    } else {
        return $arr;
    }
};
$err = array_map("fizzbuzz", $arr);
echo implode($err);
echo "<br> index 2:: ";
echo ($err[2]);

echo "<br> or foreach <br>";

foreach ($arr as $qrr) {
    if ($qrr % 3 == 0 && $qrr % 5 == 0) {
        $new[] = "- Fizz Buzz -";
    } else if ($qrr % 5 == 0) {
        $new[] = "- Buzz -";
    } else if ($qrr % 3 == 0) {
        $new[] =  "- Fizz -";
    } else {
        $new[] = $qrr;
    }
};
echo implode($new);
echo ("<br> index 2:: " . $new[2]);
