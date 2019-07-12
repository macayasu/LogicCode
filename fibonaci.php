<?php

function fibonaci ($num)
{
$now=1;
$before=0;
  
echo "$before $now";
 
for ($i=0; $i<$num; $i++)
{

  $output = $now + $before;
  echo " $output";
  
  $before = $now;
  $now = $output;
}}

fibonaci(10);

 