<html>
	<head>
		<title>My Packing Helper 2</title>
	</head>
	<body>
		<p>
		<?php
			$numTravelDays = 5.5;
			$numPairsOfSocksPerDay = 2;
			
			echo 'Total pairs of socks needed: ' . getTotalSocks($numTravelDays, $numPairsOfSocksPerDay);
			
			function getTotalSocks($days, $pairsPerDay)
			{
				return ceil($days) * $pairsPerDay;
			}
		?>
		</p>
	</body>
</html>