<html>
	<head>
		<title>Function Exercise</title>
	</head>
	<body>
		<p>
		<?php
			function getName($firstName, $lastName)
			{
				return $firstName . $lastName;
			}
			
			echo getName('Maggie', 'May');
		?>
		</p>
	</body>
</html>