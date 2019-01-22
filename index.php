<?php 
// Подключение через PDO
// тип БД и подкл. 'mysql:host=localhost; dbname=wd04-filmoteka-ofitserov
// Создаем объект

 $db = new PDO('mysql:host=localhost;dbname=mini-site','root', '');

 // Готовим запрос 

 $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";

 // Подготавл. запрос
 $stmt = $db->prepare($sql);

$username = "Flash";
$useremail = "flash@gmail.com";
$userpass = "7777";

// Обрабатываем запрос 

$stmt->bindValue(':name', $username);
$stmt->bindValue(':email', $useremail);
$stmt->bindValue(':password', $userpass);


// Выполняем запрос

$stmt->execute();

echo "<p>Было затронуто строк: ". $stmt->rowCount()."</p><br>";

echo "<p>ID вставленной записи: ". $db->lastInsertID()."</p>";














 
?>