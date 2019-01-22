<?php 
// Подключение через PDO
// тип БД и подкл. 'mysql:host=localhost; dbname=wd04-filmoteka-ofitserov
// Создаем объект

// Обновление данных

 $db = new PDO('mysql:host=localhost;dbname=mini-site','root', '');

 // Готовим запрос 

//  $sql = "UPDATE users SET name = :name WHERE id = :id";


// обновить несколько строчек в бд
$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";


$stmt = $db->prepare($sql);

$username = "New Flash";

$useremail = "plaha@ya.ru";


$id = '11';

$stmt->bindValue(':name', $username);
$stmt->bindValue(':email', $useremail);

$stmt->bindValue(':id', $id);
$stmt->execute();

echo "Было затронуто строк: ". $stmt->rowCount()." ";









 
?>