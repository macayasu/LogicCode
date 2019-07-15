<?php
function palindrom($word)
{
    $palindrome = $word;
    $split = str_split($palindrome);
    $jml   = strlen($palindrome);
	$b = '';
	
    for ($i=0; $i <= ($jml-1); $i++) { 
     
	if($split[$i] == $split[($jml-1)-$i])
	 {
		$b .= '1';
	 }
	else {
		$b .= '0';		
    }
    }

	if (strpos($b, '0') !== false) {
    echo 'false';
	}
	else {
	echo 'true';	
	}			
}


palindrom('asul');