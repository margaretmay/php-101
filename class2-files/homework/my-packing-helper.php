<html>
	<head>
		<title>My Packing Helper</title>
	</head>
	<body>
		<p>
		<?php
			// Data
			$numTravelDays = 5;
			$numPairsOfSocksPerDay = 2;
			$tripInfo = array(
				'Destination' => 'Orlando, Florida',
				'Date Trip Begins' => 'January 9, 2015',
				'Number of Days' => 5,
				'Mode of transit' => 'Flying',
				'Purpose' => 'Vacation',
			);

			// View
			echo 'Trip Info: <br/>';
			echo displayTripInfo($tripInfo);
			echo '<br/>';
			echo getTripLengthCommentary($tripInfo['Number of Days']);
			echo '<br/><br/>';
			echo 'Total pairs of socks needed: ' . getTotalSocks($numTravelDays, $numPairsOfSocksPerDay);
			echo '<br/><br/>';
			
			// Library functions
			function getTripLengthCommentary($numberOfDays)
			{
				if ($numberOfDays > 7)
				{
					return 'Wow! This will be a long trip';
				}
				else if ($numberOfDays <= 5 && $numberOfDays >= 3)
				{
					return 'This will be a good amount of time to be away.';
				}
				else
				{
					return 'This will be a whirlwind trip!';
				}
			}
			
			function displayTripInfo($tripInfo)
			{
				foreach ($tripInfo as $key => $value)
				{
					echo $key . ': ' . $value . '<br/>';
				}
			}
			
			function getTotalSocks($days, $pairsPerDay)
			{
				return $days * $pairsPerDay;
			}
		?>
		</p>
	</body>
</html>