<?php 

function piramida($num)
{
for ($i=0; $i<$num; $i++)        
{ 
for ($k=$num; $k>$i; $k--) 
{   
echo '&nbsp;';   
} 
for($j=0;$j<$i;$j++)   
{    
echo '*';   
}    
echo '<br/>'; 
} 
}

piramida(9);