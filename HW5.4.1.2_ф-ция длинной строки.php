<?php

$my_array = array('sdss', 'gh6gfgfh', '6767', 'dfdsfggdhklkjng');

function strllen($my_array) {
    $longs = ($my_array[0]);
    $i = 1;
    foreach($my_array as $line) {
        if(strlen($line) > strlen($longs)) {
        $longs = ($line);
        $i++;
        } 
    }
    echo $longs;
}
strllen($my_array);

// <?php
// $arr = [];
// for ($i = 1; $i <= 10; $i++) {
// 	$arr[] = $i;
	
// }echo $my_array = $arr;
// // <?php
// // $my_array = [7,5,9,12,4];
// $j = 1;
// function find_max($my_array) { 
// $max = $my_array[0];
//   foreach($my_array as $value) { 
//     if($value > $max) {
//       $max = $value;          	  
//       }
//     }
//     echo $max; 
// } 
// find_max($my_array);