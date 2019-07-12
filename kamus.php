<?php


$arr = ['apple', 'orange', 'pineapple'];
$keyword = 'app';
// search
foreach ($arr as $index => $string) {
    // Split the string to char array.
    $keyword_array = str_split($keyword);
  // Number of characters matched in City string.
  $no_char_matched = 0;

  // Check if each char is present in the City.
  foreach ($keyword_array as $key=>$value) {
    if (stripos($string, $value) !== FALSE) {
      // Increment for each matched char.
      $no_char_matched++;
    }
  }
  // If the matched char no is more than previous attempts, then store it.
  if (1 > 0) {
    $max_no_char_matched = $no_char_matched;
    // store the city index.
    $result = $index;
  }
}
?>