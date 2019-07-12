<?php

function Diamond($num)
{
    for($i=0;$i<$num;$i++)
    {  
    for($k=$num;$k>$i;$k--)
    {  
    echo '&nbsp;';  
    }  
    for($j=0;$j<$i;$j++)
    {  
    echo '*&nbsp;';  
    }  
    echo '<br>';  
    }  
    for($i=$num;$i>0;$i--)
    {  
    for($k=$num;$k>$i;$k--)
    {  
    echo '&nbsp;';  
    }  
    for($j=0;$j<$i;$j++)
    {  
    echo '*&nbsp;';  
    }  
    echo '<br>';  
    }  
}

Diamond(10);