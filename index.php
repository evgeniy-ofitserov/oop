<?php 

// Подключаемся к БД РБ

require "db.php";

// Удаление данных

$courses = R::load('course', 1);
R::trash($courses);




?>