<?php

$bin = "101100011010";
$split = str_split($bin);
$jml = strlen($bin);
$a = '01';
$b = '10';

$c = '11';
$d = '00';
$counta = 0;
$countb = 0;

for($i=0;$i<=$jml-1;$i++)
{
	
	$plus = $split[$i].$split[$i+1];
	$countc = $counta;
	$countd = $countb;
	
	if($plus == $a)
	{
		$counta +=1;
	}
	else if($plus == $b)
	{
		$countb +=1;
    }
    
	else if($plus == $c)
	{
		$countc = 0;
		$countd = 0;
	}
	else if($plus == $d)
	{
		$countc = 0;
		$countd = 0;
	}
}
	
if($counta > $countb)
{
	echo 'a'.$counta;
}
else if($countb > $counta)
{
	echo 'b'.$countb;
}