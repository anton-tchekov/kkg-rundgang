<?php
require("../head.php");
?>

<div id="imgcont">
	<img src="outside.png" id="plan">
	<?php

$markers = array(
	(object)array("x" => 390, "y" => 430, "text" => "", "color" => "rgba(  0,   0, 255, 1.0)", "link" => "../plan/"),
	(object)array("x" => 605, "y" => 415, "text" => "", "color" => "rgba(255,   0, 255, 1.0)", "link" => "../view/?ref=outside&image="),
	(object)array("x" => 545, "y" => 195, "text" => "", "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=outside&image=sportplatz"),
	(object)array("x" => 415, "y" => 630, "text" => "", "color" => "rgba(255,   0, 255, 1.0)", "link" => "../view/?ref=outside&image="),
	(object)array("x" => 295, "y" => 220, "text" => "", "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=outside&image=steinplatz"),
	(object)array("x" => 680, "y" => 380, "text" => "", "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=outside&image=schulgarten"),
	(object)array("x" => 450, "y" => 235, "text" => "", "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=outside&image=schule_oben"),
);

for($i = 0; $i < count($markers); ++$i)
{
	echo "<a href=\"" . $markers[$i]->link . "\">";

	echo "<div class=\"marker\" style=\"top: " .
		($markers[$i]->y + 75) . "px; left: " .
		($markers[$i]->x + 10) . "px; background-color: " .
		$markers[$i]->color . ";\">";

	echo "<div class=\"center\" style=\"top: " .
		15 . "px; left: " .
		15 . "px;\">";

	echo "</div>";
	echo "</div>";

	echo "</a>";

	echo "<div class=\"label\" style=\"top: " .
		($markers[$i]->y + 28) . "px; left: " .
		$markers[$i]->x . "px;\">" . $markers[$i]->text . "</div>";
}

	?>
</div>

</body>
</html>

