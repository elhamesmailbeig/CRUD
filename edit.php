<?php

    $db=mysqli_connect('localhost','root','','test');
    if($db == false){
        echo "Error ! cant not connect to database";
        exit;
    }

    $db->query("SET NAMES 'utf8'");


    $id = $_REQUEST["id"];
    $firstname=$_REQUEST["firstname"];
    $lastname=$_REQUEST["lastname"];
    $age=$_REQUEST["age"];

    if(isset($_REQUEST["submit"])){

        $result=$db->query("UPDATE users SET 
                                   firstname='$firstname',lastname='$lastname',age=$age WHERE id=$id");

        if($result == false){
            echo "Error ! the query is not correct ";
            exit;
        }

        header("location:index.php");
        exit;
    }



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label>firstname</label>
        <input type="text" name="firstname" value="<?= $firstname ?>">
    </div>
    <div>
        <label>lastname</label>
        <input type="text" name="lastname" value="<?= $lastname ?>">
    </div>
    <div>
        <label>age</label>
        <input type="text" name="age" value="<?= $age ?>">
    </div>
    <input type="submit" value="submit user" name="submit">
</form>
</body>
</html>
