<?php
//Connect username/password for test
$servername = "localhost";
$username = "yasil";
$password = "123456";
$dbname = "baseball";


//connection query
$query = mysqli_connect($servername, $username, $password);

//ping
if (!$query) {
	die ("Connection Failed:" . mysqli_connect_error());
}
echo "<br>MYSQL Connected";

//Create Database
$create = "CREATE DATABASE IF NOT EXISTS baseball";
if (mysqli_query($query,$create)){
	echo "<br>DATABASE baseball created";
} else {
	echo "<br>Error creating database:". mysqli_error($query);
}

$query = mysqli_connect($servername, $username, $password,$dbname);


?>