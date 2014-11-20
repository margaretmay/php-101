<html>
	<head>
		<title>My Packing Helper</title>
	</head>
	<body>
		<p>
		<?php
			$numTravelDays = 5;
			$numPairsOfSocksPerDay = 2;
			
			echo 'Total pairs of socks needed: ' . getTotalSocks($numTravelDays, $numPairsOfSocksPerDay);
			
			function getTotalSocks($days, $pairsPerDay)
			{
				return $days * $pairsPerDay;
			}
		?>
		</p>
	</body>
</html>