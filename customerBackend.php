<?php

$email = $_POST["email"];
$pass = $_POST["pass"];
$sleepQuant = $_POST["sleepQuant"];
$timeQuant = $_POST["timeQuant"];
$distractQuant = $_POST["distractQuant"];
$shipChoice = $_POST["ship"];
$shipCost = 0;
$shipName = "7 Day";
if ($shipChoice == "7"){
	$shipCost = 0;
}else if($shipChoice == "3"){
	$shipCost = 5;
	$shipName = "3 Day";
}else{
	$shipCost = 50;
	$shipName = "Overnight";
}
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
echo "<center><h3>Welcome " . $email . " Password: " . $pass . "</h3>";
echo "<table><tr id='headers'><td>Item</td><td>Cost</td><td>Quantity Ordered</td><td>Total</td></tr>";
echo "<tr><td>More Time to Finish Project</td><td>$15</td><td>" . $timeQuant . "</td><td>$" . ($timeQuant * 15) . "</td></tr>";
echo "<tr><td>More Sleep to Finish Project</td><td>$20</td><td>" . $sleepQuant . "</td><td>$" . ($sleepQuant * 20) . "</td></tr>";
echo "<tr><td>Fewer Distractions</td><td>$35</td><td>" . $distractQuant . "</td><td>$" . ($distractQuant * 35) . "</td></tr>";
echo "<tr><td>Shipping: " . $shipName . "</td><td></td><td></td><td>$" . $shipCost . "</td></tr>";
echo "<tr id='total'><td>Total Cost: </td><td></td><td></td><td>$" . ($timeQuant * 15 + $sleepQuant * 20 + $distractQuant * 35 + $shipCost) . "</td></tr></table></center>";

?>