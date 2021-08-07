<?php
echo readfile("C:\OpenServer\domains\localhost\words.txt"); // name file words.txt
$array = file('words.txt');  // возвращает содержимое как массив строк
$file1 = fopen('number.txt', 'w'); // создаем файл для записи
$i = 1;
foreach($array as $line) {
        echo "$line\n";
        if($i % 2) {
            fwrite($file1, $line); // записываем данные
        $i++;
        
        } unset($array);

    } 

    fclose($file1);  // закрывает файл



