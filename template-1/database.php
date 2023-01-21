<?php
   
// Connect to database 

// class Person
// {
//     public $name;
//     public $age;

//     public function breathe()
//     {
//         echo $this->name . ' is Breathing';
//     }

// }

// $person = new Person;
// $person->name = 'Towhozib Ahmed';
// $person->age = '19';

// dd($person->breathe());


$dsn = "mysql:host=localhost;port=3306;dbname=myApp;charset=utf8mb4";

$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare("SELECT * FROM posts where id = 1");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// dd($posts); 
 