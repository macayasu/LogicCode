<?php
function genap($num)
{
    $number = $num *2 +1 ;
    for($i=1;$i<$number;$i++)
    {
        if($i%2==0)
        {
            echo $i.',';
        }
    }
}

genap(5);