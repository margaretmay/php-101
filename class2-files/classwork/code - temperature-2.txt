<?php

	// Report all PHP errors
	error_reporting(-1);

	$temp = 20;
	echo doTemperatureDecision($temp);
	
	function doTemperatureDecision($temperature)
	{
		if ($temperature < 0)
		{
			return 'Stay inside!';
		}
		else if ($temperature < 30)
		{
			return 'Wear a coat and a hat!';
		}
		else if ($temperature < 50)
		{
			return 'Wear a coat!';
		}
		else
		{
			return 'Wear whatever you want!';
		}
	}
?>