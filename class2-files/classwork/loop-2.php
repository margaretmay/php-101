<html>
	<head>
		<title>Looping Exercise 2</title>
	</head>
	<body>
		<p>
		<?php
			// Report all PHP errors
			error_reporting(-1);
			
			getAllTimesTablesFrom(1, 12);

			function getAllTimesTablesFrom($start, $end)
			{
				for ($i = $start; $i <= $end; $i++)
				{
					getTimesTable($i, $end);
				}
			}
			
			function getTimesTable($number, $multiplier)
			{
				for($i = 1; $i <= $multiplier; $i++)
				{
					echo $number . ' X ' . $i . ' = ' . $number * $i;
					echo '<br/>';
				}
			}
		?>
		</p>
	</body>
</html>