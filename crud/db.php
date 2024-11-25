<?php
$SERVER_name="localhost";
$user_name="root";
$password="";
$database="blogging_website";

$connection = new mysqli($SERVER_name,$user_name,$password,$database);

if($connection->connect_error){
    die("".$connection->connect_error);
}


?>