<?php
$host="localhost";
$username="root";
$password= null;
$dbname= "discuss";
$conn = new mysqli($host,$username,$password,$dbname);

if ($conn->connect_error) {
    die("not connected with". $conn->connect_error);
}

?>