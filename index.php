<?php 

// Подключаемся к БД РБ

require "db.php";
// Создание новых записей 

$course = R::dispense('course');

// Значение 

$course->title = "Курс по реакт";


// Сохраняем в БД

R::store($course);


// Создаем новый БИН. новую запись в нашу БД

$course->tuts = 10;
$course->price = 10000;

$course->homeworks = 8;
$course->homeworks = 8;
$course->level = 'Для новичков';

R::store($course);





















?>