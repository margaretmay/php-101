<html>
	<head>
		<title>Looping Exercise 1</title>
	</head>
	<body>
		<p>
		<?php
			// Report all PHP errors
			error_reporting(-1);
			
			getTimesTable(9, 12);

			function getTimesTable($number, $multiplier)
			{
				for($i = 1; $i <= $multiplier; $i++)
				{
					echo $i * $multiplier;
					echo '<br/>';
				}
			}
		?>
		</p>
	</body>
</html>