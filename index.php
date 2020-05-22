<?php

    $db=mysqli_connect('localhost','root','','test');
    if($db == false){
        echo "Error ! cant not connect to database";
        exit;
    }

    $db->query("SET NAMES 'utf8'");

    $result=$db->query("SELECT * FROM users");
    if($result == false){
        echo "Error ! the query is not correct ";
        exit;
    }

    $users=$result->fetch_all(MYSQLI_ASSOC);


    echo "<table border='1'>";
        echo "<tr>";
            echo "<th>"."firstname"."</th>";
            echo "<th>"."lastname"."</th>";
            echo "<th>"."age"."</th>";
            echo "<th>"."Edit"."</th>";
            echo "<th>"."Delete"."</th>";
        echo "</tr>";

        foreach ($users as $user){
            echo "<tr>";
                echo "<td>"."{$user['firstname']}"."</td>";
                echo "<td>"."{$user['lastname']}"."</td>";
                echo "<td>"."{$user['age']}"."</td>";
                echo "<td>"."<a  href='edit.php?
                                    id={$user['id']}&
                                    firstname={$user['firstname']}&
                                    lastname={$user['lastname']}&
                                    age={$user['age']}'>Edit</a>"."</td>";
                echo "<td>"."<a  href='remove.php?id={$user['id']}'>Delete</a>"."</td>";
            echo "</tr>";
        }

    echo"</table>";

?>


