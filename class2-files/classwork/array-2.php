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
			
			foreach ($favoriteFoods as $name => $food) {
				echo 'My friend ' . $name . ' likes ' . $food . '.<br />';
			}
		?>
		</p>
	</body>
</html>