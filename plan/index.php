<?php
require("../head.php");
?>

<div id="imgcont">
	<img src="plan.png" id="plan">
	<?php

$markers = array(
	(object)array("x" => 400, "y" => 350, "text" => "Aula",          "small" => false, "color" => "rgba(255,   0, 255, 1.0)", "link" => "../view/?ref=plan&image="),
	(object)array("x" => 400, "y" => 600, "text" => "Pausenhalle",   "small" => false, "color" => "rgba(  0,   0,   0, 1.0)", "link" => "../view/?ref=plan&image=pausenhalle"),
	(object)array("x" => 610, "y" => 350, "text" => "Bibliothek",    "small" => false, "color" => "rgba(255,   0, 255, 1.0)", "link" => "../view/?ref=plan&image="),
	(object)array("x" => 610, "y" => 425, "text" => "Kantine",       "small" => false, "color" => "rgba(255,   0, 255, 1.0)", "link" => "../view/?ref=plan&image="),
	(object)array("x" => 215, "y" => 375, "text" => "Hörsaal",       "small" => false, "color" => "rgba(255, 255,   0, 1.0)", "link" => "../view/?ref=plan&image="),
	(object)array("x" =>  60, "y" => 580, "text" => "Klausurraum",   "small" => false, "color" => "rgba(255, 255,   0, 1.0)", "link" => "../view/?ref=plan&image="),
	(object)array("x" => 658, "y" => 270, "text" => "Computerraum",  "small" => false, "color" => "rgba(255,   0, 128, 1.0)", "link" => "../view/?ref=plan&image=computerraum"),
	(object)array("x" =>  60, "y" => 200, "text" => "Chemieraum",    "small" => false, "color" => "rgba(  0,   0, 255, 1.0)", "link" => "../view/?ref=plan&image=chemieraum"),
	(object)array("x" => 218, "y" => 485, "text" => "Physikraum",    "small" => false, "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=plan&image=physikraum"),
	(object)array("x" => 215, "y" => 285, "text" => "Biologieraum",  "small" => false, "color" => "rgba(  0, 200,   0, 1.0)", "link" => "../view/?ref=plan&image=bioraum"),
	(object)array("x" => 360, "y" =>  50, "text" => "Klasse 12",     "small" => false, "color" => "rgba(  0, 255, 255, 1.0)", "link" => "../view/?ref=plan&image=klassenraum"),
	(object)array("x" => 465, "y" =>  50, "text" => "",              "small" => false, "color" => "rgba(  0, 255, 255, 1.0)", "link" => "../view/?ref=plan&image=oberstufenraum"),
	(object)array("x" =>  70, "y" => 685, "text" => "Musikraum",     "small" => false, "color" => "rgba(255, 128,   0, 1.0)", "link" => "../view/?ref=plan&image="),
	(object)array("x" => 760, "y" => 330, "text" => "Schulhof",      "small" => false, "color" => "rgba(  0,   0,   0, 1.0)", "link" => "../outside/"),

	(object)array("x" => 286, "y" => 200, "text" => "",              "small" => true,  "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=plan&image=gang3"),
	(object)array("x" => 286, "y" => 400, "text" => "",              "small" => true,  "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=plan&image=gang4"),
	(object)array("x" => 286, "y" => 600, "text" => "",              "small" => true,  "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=plan&image=gang5"),
	(object)array("x" => 515, "y" => 200, "text" => "",              "small" => true,  "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=plan&image=gang0"),
	(object)array("x" => 515, "y" => 400, "text" => "",              "small" => true,  "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=plan&image=gang1"),
	(object)array("x" => 515, "y" => 600, "text" => "",              "small" => true,  "color" => "rgba(255,   0,   0, 1.0)", "link" => "../view/?ref=plan&image=gang2"),
);

for($i = 0; $i < count($markers); ++$i)
{
	if($markers[$i]->small)
	{
		echo "<a href=\"" . $markers[$i]->link . "\">";

		echo "<div class=\"marker2\" style=\"top: " .
			($markers[$i]->y + 75) . "px; left: " .
			($markers[$i]->x + 10) . "px; background-color: " .
			$markers[$i]->color . ";\">";

		echo "<div class=\"center2\">";

		echo "</div>";
		echo "</div>";

		echo "</a>";
	}
	else
	{
		echo "<a href=\"" . $markers[$i]->link . "\">";

		echo "<div class=\"marker\" style=\"top: " .
			($markers[$i]->y + 75) . "px; left: " .
			($markers[$i]->x + 10) . "px; background-color: " .
			$markers[$i]->color . ";\">";

		echo "<div class=\"center\">";

		echo "</div>";
		echo "</div>";

		echo "</a>";

		echo "<div class=\"label\" style=\"top: " .
			($markers[$i]->y + 75 + 28) . "px; left: " .
			($markers[$i]->x + 10) . "px;\">" . $markers[$i]->text . "</div>";
	}
}

	?>

</div>

</body>
</html>

