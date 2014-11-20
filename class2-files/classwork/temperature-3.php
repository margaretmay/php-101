<?php

	// Report all PHP errors
	error_reporting(-1);

	$temp = 20;
	echo doTemperatureDecision($temp);
	
	function doTemperatureDecision($temperature)
	{
		if ($temperature > 0 && $temperature < 30)
		{
			return 'Wear a coat and a hat!';
		}
		
		else
		{
			return 'Wear whatever you want!';
		}
	}
?>