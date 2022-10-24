<?php

// Menggunakan in_array() karena sifat membandingkan objek di PHP 5 memungkinkan kita melakukannya. 
// Memanfaatkan perilaku perbandingan objek ini mengharuskan array hanya berisi objek, tetapi tampaknya itulah yang terjadi di sini.

$merged = array_merge($arr, $arr2);
$final  = array();

foreach ($merged as $current) {
    if ( ! in_array($current, $final)) {
        $final[] = $current;
    }
}

var_dump($final);