<?php 

// Подключаемся к БД РБ

require "db.php";
//Получаем все данные из таблицы  courses

$courses = R::find('course');

// print_r($courses);

foreach ($courses as $course) {
    // print_r($courses);
    echo "ID: ".$course->id."<br>";
    echo "Название: ".$course->title."<br>";
    echo "Кол-во уроков: ".$course->tuts."<br>";
    echo "Уровень: ".$course->level."<br>";
    echo "<hr>";
}


?>