<html>
	<head>
		<title>Function Fun!</title>
	</head>
	<body>
		<p>
		<?php

			print('"1" . "2" = ' . concatParameters("1", "2"));
			print('<br/>');
			echo '"1" + "2" = ' . addParameters("1", "2");
			
			function concatParameters($str1, $str2)
			{
				return $str1 . $str2;
			}
			
			function addParameters($num1, $num2)
			{
				return $num1 + $num2;
			}
			
		?>
		</p>
	</body>
</html>