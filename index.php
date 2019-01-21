<?php 

// // Задача описать персону ( без ООП )


// // Описываем персону №1

// $person1_name = 'Peter';

// $person1_speciality = 'Programer';

// $person1_age = 25;

// function persone1_hello($name, $spec, $age)
// {
// 	echo "Hello ! My name is $name. I am $spec and $age years old. ";
// }

// persone1_hello($person1_name, $person1_speciality, $person1_age);

// echo '<br><br>';

// // Описываем персону №2

// $person2_name = 'Jane';

// $person2_speciality = 'Designer';

// $person2_age = 27;

// function persone2_hello($name, $spec, $age)
// {
// 	echo "Hello ! My name is $name. I am $spec and $age years old. ";
// }

// persone1_hello($person2_name, $person2_name, $person2_age);
// persone2_hello($person2_name, $person2_name, $person2_age);



// Задача описать персону ( ООП )


// Создаем класс, даем ему название Person

// class Person 
// {
// public $name = "John Doe";					
// public $speciality = "Some spec";			// Свойства класса Person
// public $age = "-";

// }

// // Исходя из класса создаем объект с этими свойствами


// $person1 = new Person;
// $person1->name; 			

// echo $person1->name;					// - Значение  = John Doe
// echo "<br>";
// echo $person1->speciality;			// - Значение  = Some spec
// echo $person1->age;					// - Значение  = -





// Задаем значение переменных объекта, внутри объекта класса Person
// class Person 
// {
// public $name;					
// public $speciality;			// Свойства класса Person
// public $age;

// }

// // Исходя из класса создаем объект с этими свойствами


// $person1 = new Person;
// $person1->name = 'Peter';
// $person1->speciality = 'Designer';
// $person1->age = 27;

// echo $person1->name;					// - Значение  = John Doe
// echo "<br>";
// echo $person1->speciality;	
// echo "<br>";						// - Значение  = Some spec
// echo $person1->age;					// - Значение  = -


// Задаем внутри класса метод (функц.)


// class Person 
// {
// public $name;					
// public $speciality;			// Свойства класса Person
// public $age;



// // Метод класса Person

// public function greeting()
// {
// 	//echo "Hello ! My name is $name. I am $speciality and $age years old. ";	

// 	echo "Hello ! My name is ". $this->name .". I am  ".$this->speciality." and ".$this->age." years old. ";	


// 	echo "<br><br><br><br>";
// 	echo $this->name;	
// 	echo $this->speciality;	
// 	echo $this->age;	
// }
// }

// // Исходя из класса создаем объект с этими свойствами


// $person1 = new Person;
// $person1->name = 'Peter';
// $person1->speciality = 'Designer';
// $person1->age = 27;



// // Обращение к методу

// // $person1->greeting($person1->name,$person1->speciality,$speciality->age);
// $person1->greeting();



// Конструктор запускается в момент создания нового объекта. Создаем конструктор



class Person 
{
public $name;					
public $speciality;			// Свойства класса Person
public $age;


// Cоздаем конструктор



	//Конструктор запускается в момент создания нового объекта.

// public function __construct(){
	
// 	echo "New person just created";


// }



public function __construct($name, $speciality, $age){

	$this->name = $name;
	$this->speciality = $speciality;
	$this->age = $age;


 }



// Метод класса Person

 public function greeting(){
// 	//echo "Hello ! My name is $name. I am $speciality and $age years old. ";	

	echo "Hello ! My name is ". $this->name .". I am  ".$this->speciality." and ".$this->age." years old. ";	


// 	echo "<br><br><br><br>";
// 	// echo $this->name;	
// 	// echo $this->speciality;	
// 	// echo $this->age;	
 }
}

// Исходя из класса создаем объект с этими свойствами


$person1 = new Person('Peter', 'Programmer', 25);   // Передаем параметры конструктора 
// echo $person1->name;
// echo $person1->speciality;
// echo $person1->age;

$person1->greeting();

// $person1->speciality = 'Designer';
// $person1->age = 27;



// Обращение к методу

// $person1->greeting($person1->name,$person1->speciality,$speciality->age);
// $person1->greeting();
echo "<br><br><br>";

$person2 = new Person('Jane', 'Designer', 27);   // Передаем параметры конструктора 
$person2->greeting();



?>