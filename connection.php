<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel";

$conn = new mysqli($servername,$username,$password,$database);

if(!$conn)
{
    die("Connection Failed : " .connect_error);
}
?>