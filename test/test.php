<?php
$car1 = "Volvo";
$car2 = "BMW";
$car3 = "SAAB";
//$cars=array("Volvo","BMW","SAAB"); 
$cars = array($car1, $car2, $car3);
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

//$count = count($cars);
//for ($i=0; $i < $count; $i++) { 
//	echo $cars[$i];
//	echo "<br>";
//}

$age = array("pater" => "35","wangshuai" => "21", "zym" => "22");
//echo "pater is " . $age["pater"] . " years old.";
//foreach ($age as $key => $value) {
//	echo "Key = " . $key . ", Value = " . $value;
//	echo "<br>";
//}
$bage = array
	(
	"happy",$age
	);
asort($age);

$cars = array
  (
  $age,
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
echo json_encode($cars);
?>