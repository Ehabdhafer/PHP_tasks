<?php
echo "<h1>", "Callback </h1>";
echo "<br><br>";

// Ex7: Use forEach to  Return all the names in the array, then return second index in the array
//   [“Rawan", "Jafar", "Hind", "Muhammad", "Esraa", “Dareen”] using loops.
$name = ["Rawan", "Jafar", "Hind", "Muhammad", "Esraa", "Dareen"];
foreach ($name as $n) {
    echo $n, " ";
    $rr[] = $n;
};
echo "<br> $rr[2] <br>";
// var_dump($rr);

// ---------------------------------------------
// for Ex8,9,10

$newSeries = [
    [
        "id" => 70111470,
        "title" => "Die Hard",
        "boxart" => "http://cdn-0.nflximg.com/images/2891/DieHard.jpg",
        "uri" => "http://api.netflix.com/catalog/titles/movies/70111470",
        "rating" => 4.0,
        "bookmark" => [],
    ],
    [
        "id" => 654356453,
        "title" => "Bad Boys",
        "boxart" => "http://cdn-0.nflximg.com/images/2891/BadBoys.jpg",
        "uri" => "http://api.netflix.com/catalog/titles/movies/70111470",
        "rating" => 5.0,
        "bookmark" => ["id" => 432534, "time" => 65876586],
    ],
    [
        "id" => 65432445,
        "title" => "The Chamber",
        "boxart" => "http://cdn-0.nflximg.com/images/2891/TheChamber.jpg",
        "uri" => "http://api.netflix.com/catalog/titles/movies/70111470",
        "rating" => 4.0,
        "bookmark" => [],
    ],
    [
        "id" => 675465,
        "title" => "Fracture",
        "boxart" => "http://cdn-0.nflximg.com/images/2891/Fracture.jpg",
        "uri" => "http://api.netflix.com/catalog/titles/movies/70111470",
        "rating" => 5.0,
        "bookmark" => ["id" => 432534, "time" => 65876586],
    ]
];

echo $newSeries[2]["id"] . " " . $newSeries[2]["title"];
echo "<br><br>";
//Q8 Project an array of series into an array of {id, title} pairs using forEach()
foreach ($newSeries as $p) {
    $pairs[] = ["id" => $p["id"], "title" => $p["title"]];
}
var_dump($pairs);

// Q9 Use map() now to implement the same previous functionality
echo "<br><br>";
echo "Using array_map :<br><br>";
function pair($ps)
{
    return ["id" => $ps["id"], "title" => $ps["title"]];
}
var_dump(array_map("pair", $newSeries));

// Q10  Use filter() to return the series with a rating under 5 
echo "<br><br>";
echo "Using array_filter :<br><br>";
function rate($r)
{
    return $r["rating"] < 5;
};
var_dump(array_filter($newSeries, "rate"));


// Q11  Use reduce()  function to return the longest string in an array of strings.
// ["Java", "JavaScript", "Python", "C++", "PHP"]
echo "<br><br>";
echo "Using Reduce <br><br>";
$array = ["Java", "JavaScript", "Python", "C++", "PHP"];
function red($acc, $current)
{
    if (strlen($acc) > strlen($current)) {
        return $acc;
    } else if (strlen($acc) < strlen($current)) {
        return $current;
    }
}
echo array_reduce($array, "red");

// Q12

$pokemonData = [
    [
        "game_index" => 76,
        "version" => [
            "name" => "red",
            "url" => "https://pokeapi.co/api/v2/version/1/",
        ],
    ],
    [
        "game_index" => 76,
        "version" => [
            "name" => "blue",
            "url" => "https://pokeapi.co/api/v2/version/2/",
        ],
    ],
    [
        "game_index" => 76,
        "version" => [
            "name" => "yellow",
            "url" => "https://pokeapi.co/api/v2/version/3/",
        ],
    ],
    [
        "game_index" => 132,
        "version" => [
            "name" => "gold",
            "url" => "https://pokeapi.co/api/v2/version/4/",
        ],
    ],
    [
        "game_index" => 132,
        "version" => [
            "name" => "silver",
            "url" => "https://pokeapi.co/api/v2/version/5/",
        ],
    ],
    [
        "game_index" => 132,
        "version" => [
            "name" => "crystal",
            "url" => "https://pokeapi.co/api/v2/version/6/",
        ],
    ],
    [
        "game_index" => 132,
        "version" => [
            "name" => "ruby",
            "url" => "https://pokeapi.co/api/v2/version/7/",
        ],
    ],
    [
        "game_index" => 132,
        "version" => [
            "name" => "sapphire",
            "url" => "https://pokeapi.co/api/v2/version/8/",
        ],
    ],
    [
        "game_index" => 132,
        "version" => [
            "name" => "emerald",
            "url" => "https://pokeapi.co/api/v2/version/9/",
        ],
    ],
    [
        "game_index" => 132,
        "version" => [
            "name" => "firered",
            "url" => "https://pokeapi.co/api/v2/version/10/",
        ],
    ],
    [
        "game_index" => 132,
        "version" => [
            "name" => "leafgreen",
            "url" => "https://pokeapi.co/api/v2/version/11/",
        ],
    ],
    [
        "game_index" => 132,
        "version" => [
            "name" => "diamond",
            "url" => "https://pokeapi.co/api/v2/version/12/",
        ],
    ],
];

// Q12  Create a function displayName that, given the pokemon data, below,
//  uses reduce to return an array containing the names of the characters.
echo "<br><br>";
echo "Using Reduce <br>";

function displayName($acc, $cur)
{
    $acc[] = ["name" => $cur["version"]["name"]];
    return $acc;
}

$result = array_reduce($pokemonData, "displayName");

print_r($result);
echo "<br><br>Using foreach<br> ";

foreach ($pokemonData as $f) {
    $a[] =  ["name" => $f["version"]["name"]];
}
print_r($a);
