<?php

function Jajargenjang($num)
{
    for($i=0;$i<$num;$i++)
    {
        for($j=$num;$j>=$i;$j--)
        {
        echo '&nbsp;';
        }
        for($k=$num;$k>0;$k--)
        {
        echo '#';
        }
        echo '<br>';
    }
}

Jajargenjang(9);

