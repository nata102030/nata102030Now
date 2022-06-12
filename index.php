<?php
$title='Главная';
require 'blocks/header.php'; 
//include 'blocks/header.php';
//include_once 'blocks/header.php'; //один раз подключать на странице


    ?>

<h1>Главная</h1>


<?php

echo date('F t') .'<br>';
echo date('m-l H:i:s') .'<br>';
echo date('m-l H:i:s', strtotime('+1 Hour')) .'<br>';
echo date('m-l H:i:s', strtotime('-1 Week -2 Day -3 Hour')) .'<br>';

//print_r($_GET);

//******************************** */

$list = [44, 8, 0, -2, 8, 1];
unset($list[2]);//удаление
$list = array_values($list); //обновление ключей
print_r($list);
echo '<br>';

sort($list); //сортировка
print_r($list) ;
echo '<br>';

echo in_array(8, $list); //поиск по значению
$arr = array_splice($list, 3, count($list)); //обрезание массива от и до
var_dump($arr) ;
echo '<br>';

$arr1 = [2, 9, 5];
$arr2 = [4, 8];
$arr3 = array_merge($arr1, $arr2); //объединение массивов
print_r($arr3) ;
echo '<br>';

$x = '10';
echo gettype($x) .'<br>'; //тип данных
echo is_numeric($x) .'<br>'; //тип данных true
echo is_integer($x) .'<br>'; //тип данных fols

$str = 'ghj@kl';
echo strpos($str, '@'); // проверка имеется ли символ в строке

$word = 'ddd sss, idfg ssu';
$arr_word = explode(' ', $word); //разбитие строки на элементы
print_r($word);
echo '<br>';
echo implode(' | ', $arr_word); //соединение массива в одну строку


require 'blocks/footer.php'; 
?>