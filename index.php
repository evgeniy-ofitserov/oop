<?php 
// Подключение через PDO

// тип БД и подкл. 'mysql:host=localhost; dbname=wd04-filmoteka-ofitserov

$db = new PDO('mysql:host=localhost;dbname=wd04-filmoteka-ofitserov','root', '');



// Создаем запрос к БД

// $sql = "SELECT * FROM films";


// Выполняем запрос спец.методом query

// $resault = $db->query($sql);

// echo "<h2> Вывод записей из результата по одной: </h2> ";


// // Вывод методом fetch по одному рез. каждой строки

// // $resault->fetch(PDO::FETCH_ASSOC);

// // print_r($resault->fetch(PDO::FETCH_ASSOC));



// // Выводим все фильмы и записываем в переменную $film

// while ($film = $resault->fetch(PDO::FETCH_ASSOC)) {
// 	// print_r($film);

// 	echo "<br><br><br><br><br> ";


// 	echo "Название фильма: " . $film['title'] . "<br>";
// 	echo "Жанр фильма: " . $film['genre'] . "<br>";
// 	echo "Год фильма: " . $film['years'] . "<br>";
// 	echo "Имя пути картинки  " . $film['photo'] . "<br>";

// 	echo "<br><br><br><br><br> ";


// }

echo "<hr/>";

// $sql = "SELECT * FROM films";
// $resault = $db->query($sql);

// // Второй способ (Подключение то же), получаем все данные сразу

// $films = $resault->fetchAll(PDO::FETCH_ASSOC);

// // print_r($resault->fetchAll(PDO::FETCH_ASSOC));


// // Обходим массивом foreach  полученные данные которые в переменной $films 

// foreach ( $films as $film) {
// 	echo "Название фильма: " . $film['title'] . "<br>";
// 	echo "Жанр фильма: " . $film['genre'] . "<br>";
// 	echo "Год фильма: " . $film['years'] . "<br>";
// 	echo "Имя пути картинки  " . $film['photo'] . "<br>";
// 	echo "<hr/>";
// 	echo "<br/>";

// }

echo "<hr/>";



// Третий способ


$sql = "SELECT * FROM films";
$resault = $db->query($sql);

// Обращаемся к объекту и с помощью метода bindColumn. Указываем какие переменные (обращение к БД) нужно создать

$resault->bindColumn('id', $id);
$resault->bindColumn('title', $title);
$resault->bindColumn('genre', $genre);
$resault->bindColumn('years', $years);
$resault->bindColumn('photo', $photo);

echo "<h2> Вывод записей с привязкой данных к переменным </h2>";
	while ($resault->fetch(PDO::FETCH_ASSOC)) {
		echo "ID: {$id}<br>";
		echo "Название: {$title}<br>";
		echo "Жанр: {$genre}<br>";
		echo "Год: {$years}<br>";
		echo "Имя картинки: {$photo}<br>";

		echo "<br><br>";
	}



?>