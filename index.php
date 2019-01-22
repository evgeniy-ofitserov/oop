<?php 
// Подключение через PDO
// тип БД и подкл. 'mysql:host=localhost; dbname=wd04-filmoteka-ofitserov

// Создаем объект

 $db = new PDO('mysql:host=localhost;dbname=mini-site','root', '');


// // 1. Выборка без защиты от SQL инъекций

// $name = 'Joker';
// $password = '777';

// // Делаем запрос в БД и записываем все в переменную sql

// $sql = "SELECT * FROM users WHERE name ='{$name}' AND password = '{$password}' LIMIT 1";
// $result = $db->query($sql);

// echo "<h2>Выборка записи без защиты от SQL инъекций:</h2>";
// // print_r( $result->fetch(PDO::FETCH_ASSOC) );



// // проверяем методом rowCount (возвращает количество строк, которые были затронуты в ходе запроса)
// if ($result->rowCount() == 1) {

// 	$user =  $result->fetch(PDO::FETCH_ASSOC);
// 	echo "Имя пользователя {$user['name']} <br>";
// 	echo "Пароль пользователя {$user['password']}";
// }




// echo "<br><br><br><br><br>";
// echo "<hr/>";


// // 2. Выборка без защиты от SQL инъекций РУЧНОЙ РЕЖИМ 

// echo "<h2>Выборка записи c защитой от SQL инъекций - (РУЧНОЙ РЕЖИМ!!!):</h2>";

// $username = 'Joker';
// $password = '777';

// // Метод quote защищает от пробелов

// $username = $db->quote($username);
// // strtr - Экранирует символы, записывает их в строчку
// $username = strtr($username, array('_' => '\_','%' => '\%') );


// $password = $db->quote($password);
// $password = strtr($password, array('_' => '\_','%' => '\%') );


// $sql = "SELECT * FROM users WHERE name ='{$name}' AND password = '{$password}' LIMIT 1";
// $result = $db->query($sql);


// if ($result->rowCount() == 1) {

// 	$user =  $result->fetch(PDO::FETCH_ASSOC);
// 	echo "Имя пользователя {$user['name']} <br>";
// 	echo "Пароль пользователя {$user['password']}";
// }

// echo "<br>";


// echo "<h2>Выборка записи c защитой от SQL инъекций - (АВТОМАТИЧЕСКИЙ РЕЖИМ!!!):</h2>";


// Создаем запрос, где подготавливаем наши переменные :username, :password

// $sql = "SELECT * FROM users WHERE name = :username AND password = :password LIMIT 1";

// Создаем переменную, которая подготавливает запрос. Есть метод prepare


// $stmt = $db->prepare($sql);

// $username = 'Joker';
// $password = '777';

// подставляем полученные данные в наш sql запрос.Вызываем метод bindValue

// $stmt->bindValue(':username',$username);
// $stmt->bindValue(':password',$password);

// Получаем готовый запрос методом execute (массив ассоц.);
// $stmt->execute();

// вариант 2 без bindValue

//  $stmt->execute(array(':username' => $username, ':password' => $password));

// $stmt->bindColumn('name', $name);
// $stmt->bindColumn('email', $email);

// echo "<h3> Выборка записи с авт.защитой от SQL - инъекций</h3>";

// $stmt->fetch();

// echo "Имя пользователя {$name} <br>";
// echo "Пароль пользователя {$email}";



// Другой вариант

$sql = "SELECT * FROM users WHERE name = ? AND password = ? LIMIT 1";

// подготавливаем SQL запрос 

$stmt = $db->prepare($sql);


$username = 'Joker';
$password = '777';

$username = htmlentities($username);
$password = htmlentities($password);

$stmt->bindValue(1, $username);
$stmt->bindValue(2, $password);

// Получаем готовый запрос методом execute (массив ассоц.);
$stmt->execute();
$stmt->bindColumn('name', $name);
$stmt->bindColumn('email', $email);


echo "<h3> Выборка записи с авт.защитой от SQL - инъекций</h3>";

$stmt->fetch();

echo "Имя пользователя {$name} <br>";
echo "Пароль пользователя {$email}";

?>