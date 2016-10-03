 <?php

echo "<table style='width:100%'>";
echo "<tr><td></td>";
for($x = 1; $x <= 100; $x++)
{
	echo "<td>" . $x . "</td>";
}
echo "</tr><tr>";
for($i = 1; $i <= 100; $i++)
{
	echo "<td>" . $i . "</td>";
	for($j = 1; $j <= 100; $j++)
	{
		echo "<td>" . $i * $j . "</td>";
	}
	echo "</tr><tr>";
}
echo "</tr></table>";
?>
