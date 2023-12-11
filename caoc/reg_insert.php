<?php
include 'connection_config.php';

$stmt = $db_conn->prepare("INSERT INTO user_tbl(username,pword)VALUES(?, ?)");

$parameters = array($_POST['username'], $_POST['password']);

if ($stmt->execute($parameters) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: ", $sql , "<br>";
}
?>