<?php

$file_array = file("words.txt"); //читаем файл в массив, чтоб найти колличество строк 
$handle = fopen('words.txt', "r"); // Открываем файл в режиме чтения
$new_file = fopen('numbers.txt', 'w+'); // Открываем файл в режиме чтения и записи

$sum = 0;
while (!feof($handle)) {  //проверка, не закончился ли файл
    $str = fgets($handle);  //чтение из файла
    echo strlen($str), "\n"; //выводим длину каждой строки
    echo $str, "\n"; 
        $sum = $sum + strlen($str);
    echo $sum, "\n";
} 
fclose($handle);     
$count = count( $file_array);  // кол-во строк
echo $count, "\n";   
$average_str = (round($sum /$count)); // вычисляем среднюю длину строки с округлением
    echo $average_str, "\n";
echo $file_array;

        $i = 1;
        foreach ($file_array as $elem) { 
            $str_len = strlen($elem);
            if($str_len > $average_str) {
                echo $str_len;
            fwrite($new_file, $elem);  // записываем строки,которые больше средней длины
            $i++;
            }
        }
    