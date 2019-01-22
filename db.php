<?php

require "libs/rb-mysql.php";

// Подключаеся с помощью библиотеки RedBean
$res = R::setup( 'mysql:host=localhost;dbname=school',
'root', '' );

if ($res) {
    echo "OK";
}else {
    echo "NO!";
}


?>