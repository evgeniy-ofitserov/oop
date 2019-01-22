<?php 

// Подключаемся к БД РБ

require "db.php";


// Обновляем данные в БД

// Получение одного курса

$courses = R::load('course', 32);

// print_r($courses);

// echo "ID" . $courses->id . "<br>";
// echo "Название" . $courses->title . "<br>";


echo "</hr>";

// Обновляем данные

$courses->title = "Курс по пикапу";
$courses->tuts = 30;
$courses->price = 1025;
$courses-> = 1025;


// Сохраняем данные

R::store($courses);


// БД Обновлена



?>