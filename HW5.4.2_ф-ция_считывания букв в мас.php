<?php
$ar = array('sdss', 'gh6gfgfh', '6767', 'dfdsfggdhklkjng');
$my_array = $ar[0];
var_dump($my_array);
$my_array1 = str_split($my_array);
print_r($my_array1);
var_dump(array_count_values($my_array1));
