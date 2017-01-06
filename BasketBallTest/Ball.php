<?php

class Ball
{
	/**
	*
	* Add two given values together and divide by 2
	*
	*/
   	public function calc_avg($ab,$hits)
	{
		if ($ab == 0)
		{
			$avg = "0.000";
		}
		else
		{
			$avg = $hits/$ab;
		}
		return $avg;
	}

	

}
?>