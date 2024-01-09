<?php
echo "<h1>Map-Filter-Reduce</h1>";
// Questions from this website "https://www.crocoder.dev/blog/map-filter-reduce-exercises/"
$input = [1, 2, 3, 4, 5];
echo "Q1 output ==>> ";
function re($r)
{
    return pow($r, 2);
}
print_r(array_map("re", $input));
// ----------------------------------------------------
echo "<br><br>Q2 output ==>> ";
$input = [1, -4, 12, 0, -3, 29, -150];
function even($acc, $curr)
{
    if ($curr > 0) {
        $acc += $curr;
    }
    return $acc;
}
echo array_reduce($input, "even");
// --------------------------------------------------------
echo "<br><br>Q3 output ==>> ";
$input = [12, 46, 32, 64];
echo array_sum($input) / count($input);
// --------------------------------------------------------
echo "<br><br>Q4 output ==>> ";
$input = "George Raymond Richard Martin";
function f($name)
{
    $words = explode(" ", $name);
    $i = array_map(function ($word) {
        return $word[0];
    }, $words);
    $first = implode("", $i);
    return $first;
}
echo f($input);
// --------------------------------------------------------
echo "<br><br>Q5 output ==>> ";
$input = [
    [
        'name' => 'John',
        'age'  => 13,
    ],
    [
        'name' => 'Mark',
        'age'  => 56,
    ],
    [
        'name' => 'Rachel',
        'age'  => 45,
    ],
    [
        'name' => 'Nate',
        'age'  => 67,
    ],
    [
        'name' => 'Jennifer',
        'age'  => 65,
    ],
];
function th($ac){
    $aa =array_column($ac,'age');
    $re[] =  [min($aa),max($aa),(max($aa)-min($aa))];
    return($re) ;
}
print_r(th($input));
// --------------------------------------------------------
echo "<br><br>Q6 output ==>> ";
$input = "Every developer likes to mix kubernetes and javascript";
//  Result must be "E3y d7r l3s to mix k8s and j8t";
$words = explode(" ", $input);
// print_r($words);
$as =[];
foreach ($words as $d) {
    if(strlen($d) > 4){
    array_push($as,$d[0],strlen($d)-2,$d[-1]," ");
}else{
    array_push($as,$d," ");
}
}
echo implode($as);
