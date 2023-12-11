<?php
$db_host = "localhost";
$db_name = "registration_db";
$db_user = "michael";
$db_pass = "mikey_28!";

try{

    $db_conn = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user, $db_pass);

    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOExeption $e){

    echo $e->getMessage();
}
?>
