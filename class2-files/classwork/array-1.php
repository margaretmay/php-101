<html>
	<head>
		<title>Test Page</title>
	</head>
	<body>
		<p>
		<?php
			$favoriteFoods = array(
				'Maggie' => 'cheese',
				'Gerry' => 'chocolate',
				'Mr. Snazzy Snazz Pants' => 'brussel sprouts',
			);
			
			echo ($favoriteFoods['Mr. Snazzy Snazz Pants']);
			echo ($favoriteFoods['Gerry']);
		?>
		</p>
	</body>
</html>