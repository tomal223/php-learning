<?php

require './functions.php';
require './database.php';

// require './router.php';


foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
