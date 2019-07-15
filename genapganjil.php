<?php 

function findodd($number) {
	
	if($number%2 == 1)
	{
		echo 'Odd number';
	
	}
	else if ($number%2 == 0 )
	{ 
		echo 'Even Number';
	}
	
}

findodd(4);