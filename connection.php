<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "section";

$con= mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die("Could not connect :".mysqli_connect_error());
}
?>