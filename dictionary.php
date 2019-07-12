<?php
  
  function dictionary ($word) {
    $dict = ['pro','gram','merit','program','it','programmer'];
    $results = array();
   
    foreach ($dict as $value) {
        if(preg_match('/'.$value.'/',$word))
        {
        // if (strpos($value, $kata) !== false)  {
            $results[] = $value; 
            }
         
    }
    if( empty($results) ) {
        echo 'Ga ada di kamus bro!.'; 
    }
    else {
        echo implode(',', $results); 
    }
  }

  dictionary('sasas');