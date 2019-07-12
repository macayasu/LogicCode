<?php
function palindrom($word)
{
    $palindrome = $word;
    $split = str_split($palindrome);
    $jml   = strlen($palindrome);
    $nama = "";
    for ($i=($jml-1); $i >= 0; $i--) { 
     $nama .= $split[$i];
    }
    if (strtolower($palindrome)==strtolower($nama)) {
     echo "Kata <strong>$palindrome</strong> adalah Palindrom";
    }else{
     echo "Kata <strong>$palindrome</strong> bukan palindrom";
    }
   
}
palindrom('papa');
   ?> 

