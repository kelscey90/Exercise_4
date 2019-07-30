<?php
echo'Exercise 4-1';
$cars = array("Kia", "Toyota", "Mazda");
$fruits = array("Orange", "Apple", "Mango");
$temporary = $cars;
$cars = $fruits;
$fruits = $temporary;
echo "<br>Cars<br>";
print_r($cars);
echo "<br>Fruits<br>";
print_r($fruits);
?>

<?php
echo'<br><br>Exercise 4-2';
$person = array(
	"first_name" => array("Kelscey"),
	"last_name" => array("Ortiz")
);

echo "<br>Original<br>";
echo $person['first_name'][0]. " " . $person['last_name'][0];
echo "<br>Swapped<br>";
echo $person['last_name'][0]. " " . $person['first_name'][0];
?>

<?php
echo'<br><br>Exercise 4-3<br>';
$numbers = array("5", "3", "4", "10", "23");
print_r($numbers);
$count = count($numbers);
for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($numbers[$i] > $numbers[$j]) {
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }
    }
}
echo "<br>Ascending<br>";
print_r($numbers);

for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($numbers[$i] < $numbers[$j]) {
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }
    }
}
echo "<br>Descending<br>";
print_r($numbers);
?>