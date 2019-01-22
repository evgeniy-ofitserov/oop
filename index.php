<?php 
// Подключение через PDO
// тип БД и подкл. 'mysql:host=localhost; dbname=wd04-filmoteka-ofitserov
// Создаем объект

// Удаление данных

 $db = new PDO('mysql:host=localhost;dbname=mini-site','root', '');

 // Готовим запрос на удаление

$sql = "DELETE FROM users  WHERE name = :name";
$stmt = $db->prepare($sql);


$username = "New Flash";
$stmt->bindValue(':name', $username);
$stmt->execute();


echo "Было затронуто строк: ". $stmt->rowCount()." ";





?>