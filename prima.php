<?php
function prima($num)
{
    $number = $num *2 +1 ;
    for($i=1;$i<$number;$i++)
    {
        $k = 0;
        for($j=1;$j<=$i;$j++)
        {
            if($i%$j==0)
            {
                $k++;
            }
        }

        if($k ==2) 
        {
         echo $i.',';
        }
}
}

prima(5);