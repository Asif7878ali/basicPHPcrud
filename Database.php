<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'stutest';

$conn = new mysqli($servername, $username , $password, $dbname);

if($conn->connect_error){
    die('Coonection Failed'.$conn->connect_error);
} else{
    // echo 'Connect Succesful';
}