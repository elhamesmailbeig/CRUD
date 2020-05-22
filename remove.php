<?php

$db=mysqli_connect('localhost','root','','test');
if($db == false){
    echo "Error ! cant not connect to database";
    exit;
}

$id = $_REQUEST["id"];

$result=$db->query("DELETE FROM users WHERE id=$id ");
if($result == false){
    echo "Error ! the query is not correct ";
    echo $db->error;
    exit;
}

header("location:index.php");
exit;




