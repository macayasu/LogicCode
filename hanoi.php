<?php

function hanoi ($num)
{
    $a = '1,4,2,5,4,5,6,3';
    $b = '';
    $c = '';
if ($num == 1)
{
echo 'Pindahkan piring dari '.$a.'ke '.$c;
}
else {
    hanoi ($num-1 , a,c,b);
    hanoi (1 , a,b,c);
    hanoi ($num-1 , b,a,c);
}

hanoi(10);

}