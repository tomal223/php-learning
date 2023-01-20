<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="studentsData" placeholder="Student Data"><br>

        Oranges: <input type="checkbox" name="fruits[]" value="Oranges"> <br>
        Apples: <input type="checkbox" name="fruits[]" value="Apples"> <br>
        Bananas: <input type="checkbox" name="fruits[]" value="Bananas"> <br>
        <br>
        <input type="submit">
    </form>
    
    <br><br>

    <?php

    // $array = ['Tomal', 'Ratul'];
    // $array = array('Tomal', 'Ratul', 'Shakil', 'Tanvir');

    // $array[1] = 'tat';

    // echo $array[1]

    $fruits = $_POST["fruits"];




    for ($i = 0; $i < count($fruits); $i++) {
        if ($i === 0) {
            echo "1. ";
            echo $fruits[$i];
            echo "<br>";
        } elseif ($i >= 1) {
            echo "$i + 1 . ";
            echo $fruits[$i];
            echo "<br>";
        }
    }


    for ($i = 0; $i < count($fruits); $i++) {
        echo "$i. ";
        echo $fruits[$i];
        echo '<br>';
    };


    $texts = array("name" => "Towhozib Ahmed Tomal", "ID" => "908537", "Age" => "18", "Country" => "Bangladesh");

    echo $texts[$_POST["studentsData"]];

    ?>




</body>

</html>