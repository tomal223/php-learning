<?php

require './functions.php';
// require './database.php';

// require './router.php';





// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// } 

// foreach ($posts as $post) {

//     echo $post['title'];

// }

$dsn = "mysql:host=localhost;port=3306;dbname=myApp;charset=utf8mb4";

$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $value) {
    echo $value['id'] . " " . $value['title'] . "<br/>";
}  