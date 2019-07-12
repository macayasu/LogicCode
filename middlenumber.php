<?php

function getMiddle() {

	$arr= [1,3,5,7,9];
	$arrcount = count($arr);
	
	$arrmid = round(($arrcount-1) / 2);
	
	print_r($arr[$arrmid]);
	
	
}

getMiddle();