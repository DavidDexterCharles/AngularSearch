<?php

	function fun(){
		$x = array();
		for($y = 1; $y <= 100; $y++){
			$temp['num'] = $y;
			$temp['sqr'] = $y*$y;
			$temp['cube'] = $y*$y*$y;
			array_push($x, $temp);
		}

		return json_encode($x);
	}

	echo fun();

?>