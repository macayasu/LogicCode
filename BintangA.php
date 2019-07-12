<?php
// example code

function BintangA($num)
{
for( $i=$num;$i>0;$i--){
for($j=$num;$j>$i;$j--){
echo '*';
}

echo '<br>';
}

}

BintangA(5);
