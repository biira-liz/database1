<?php

$host ='localhost';
$user = 'root'; 
$password = ''; 
$database = 'contact';

$conn = new mysqli($host, $user, $password, $database); 

if ($conn->connect_error ){
 die("Connection failed" . $conn->connection_error);
}   

?>