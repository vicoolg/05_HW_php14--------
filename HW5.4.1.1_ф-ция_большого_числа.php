<?php
$arr = [];
for ($i = 1; $i <= 10; $i++) {
	$arr[] = $i;
	
}echo $my_array = $arr;
$j = 1;
function find_max($my_array) { 
$max = $my_array[0];
  foreach($my_array as $value) { 
    if($value > $max) {
      $max = $value;          	  
      }
    }
    echo $max; 
} 
find_max($my_array);