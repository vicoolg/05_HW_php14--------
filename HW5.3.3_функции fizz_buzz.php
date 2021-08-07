<?php
$hander = fopen ('number.txt',"r");
$fizz = fgets ($hander);
$buzz = fgets ($hander);
$next = fgets ($hander);
$next_file = fopen('numbers2', "w");

function getFB(int $fizz, int $buzz, int $next) {
$i = 1;
while($i <= $next) { 
    echo (($i % $fizz==0) and ($i % $buzz==0))  ?  "FB ":
        ($i % $fizz==0 ? "F ":
        ($i % $buzz==0 ? "B ": "$i "));
    $i++;
    }
}
function fileRW() {
    $read = file_get_contents('number.txt');
        echo $read;
        


}
