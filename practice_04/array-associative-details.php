<?php
$foods = array(
    "vagitables" => "Potato, Tomato, Been, Brinjal",
    "fruits"   => "Apple, Guava, Pulm, Mango, Jackfruit",
    "drinks" => "Tea, Coffee, Milk",
    "fastfood" => "Pizza, Burger, Sandwitch"
);

echo $foods['fruits'];
echo "\n=================\n";

$foods['fastfood'] = $foods['fastfood'].", Cake";
echo $foods['fastfood'];
echo "\n=================\n";

foreach($foods as $keys=>$values){
    echo $keys."\n";
}
echo "\n=================\n";

foreach($foods as $keys=>$values){
    echo $values."\n";
}
echo "\n======== for loop =========\n";

$count = count($foods);
$keys = array_keys($foods);
for($i=0;$i<$count;$i++){
    $key = $keys[$i];
    echo $foods[$key]."\n";
}