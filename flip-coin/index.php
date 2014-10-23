<!DOCTYPE html>
<html>
    <head>
<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>Automatically Flip Coins</title>
	</head>
	<body>
            <h2>We will keep flipping a coin as long as the result is heads!</h2>
            <h3>Just Refresh the Browser for more flipping!!</h3>
	<?php
	$flipCount = 0;
	do {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			echo "<div class=\"coin\">H</div>";
		}
		else {
			echo "<div class=\"coin\">T</div>";
		}
	} while ($flip);
	$verb = "were";
	$last = "flips";
	if ($flipCount == 1) {
		$verb = "was";
		$last = "flip";
	}
	echo "<p>There {$verb} {$flipCount} {$last}!</p>";
	?>
    </body>
</html>