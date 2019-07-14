<?php

function findsum($number) {
	
$array = [1,5,6,8,7,2,4];
$countarr = count($array);

for ($i = 0; $i < $countarr; $i++)
     {
       for ($j = $i+1; $j < $countarr; $j++) 
	   {
		 if($array[$i]+$array[$j] == $number)
		   {
			   echo $array[$i].'+'.$array[$j].' = '.$number.' ';
		   }		
        }
      }
}

findsum(7);