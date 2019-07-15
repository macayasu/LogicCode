<?php

$n = 10;
$word = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$length = strlen($word)-1;
$randword = '';

for($i=0;$i<$n;$i++)
{
    $random = rand(0,$length);
    $randword .= $word[$random];

}

echo $randword;