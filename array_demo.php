<h2>Practice of Array</h2>
<?php 
 //indexed array
// $array = [1,3,5,60]; 
// echo $array[3]; //fetch data with index
// echo "<br>";
// echo "Length of the array is: " . count($array) . "<br>";
// Normal for loop
// for($i = 0; $i< count($array); $i++) {
//     echo $array[$i] . "<br>";
// }

// Foreach loop
// echo "Print from foreach loop";
// foreach ($array as $item) {
//     echo $item . "<br>";
// }

// Associative Array:
// $person = ["name" => "Saddam", "age" => 30];
// echo "Name: " .  $person["name"] . " age: " . $person["age"]

// Multidimensional Indexed Array
// $multi_arry = [
//     [2,3, 4,5],
//     ["Saddam", "Pune"]
// ];
// echo $multi_arry[0][2] . "<br>";
// echo "Name: " . $multi_arry[1][0] . "<br>City: " . $multi_arry[1][1];

// Another way to create array in php
$nums = array(2,3,45,6); //indexed array
echo $nums[3];
// echo "<br>";
// $prices = array("Java" => 22, "Python" => 220, "PHP" => 200);
// echo $prices["Python"], "\n";
// echo $prices["PHP"];
// echo "<br>";
// Addting data to an array
$nums[3] = 30;
$nums[5] = 50;
$nums[10] = 40; 
echo count($nums);
echo "<br>";
foreach($nums as $num) {
    echo $num . " ";
}

$items = [
    "Pen" => ["color" => "red", "price => 10"],
    "Pencil" => ["color" => "blue", "price => 20"],
    "Notebook" => ["color" => "Black", "price => 18"]
];
echo "<br>";
echo "Number of items in the array: " . count($items);
echo "<br>";
echo $items["Pencil"]["color"];

?>