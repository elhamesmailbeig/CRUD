<?php

$db=mysqli_connect('localhost','root','','test');
if($db == false){
    echo "Error ! cant not connect to database";
    exit;
}

$db->query("SET NAMES 'utf8'");

$firstname = isset($_POST["firstname"])?$_POST["firstname"]:null;
$lastname = isset($_POST["lastname"])?$_POST["lastname"]:null;
$age =isset($_POST["age"])?$_POST["age"]:null;

if(isset($_POST["submit"])){

    $result=$db->query("INSERT INTO users(firstname,lastname,age) VALUES ('$firstname','$lastname',$age)");
    if($result == false){
        echo "Error ! the query is not correct ";
        echo $db->error;
        exit;
    }

    header('location:index.php');
}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label>firstname</label>
            <input type="text" name="firstname">
        </div>
        <div>
            <label>lastname</label>
            <input type="text" name="lastname">
        </div>
        <div>
            <label>age</label>
            <input type="text" name="age">
        </div>
        <input type="submit" value="submit user" name="submit">
    </form>
</body>
</html>
