<?php

include 'connect.php';

// Create Team Data ver.2
// Team Order == 킅엘롯기엔넥한두슼삼

$team_table="CREATE TABLE teams (
nalja BIGINT(255) NOT NULL PRIMARY KEY,
ranks VARCHAR(255) NOT NULL
)";

if (mysqli_query($query,$team_table)){
	echo "<Br>TEAM TABLE SUCCESSFULLY CREATED";
}else{
	echo "<br>Error table:".mysqli_error($query);
}

// Create User Data ver.2
// Team Order == 킅엘롯기엔넥한두슼삼

$user_table="CREATE TABLE users (
num INT(6) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(5) NOT NULL,
ranks VARCHAR(255) NOT NULL
)";

if (mysqli_query($query,$user_table)){
	echo"<BR>USER successfully created";
}else{
	echo"<BR>error table:".mysqli_error($query);
}

$user_cha = "CREATE TABLE user_sub (
num BIGINT(255) AUTO_INCREMENT PRIMARY KEY,
nalja BIGINT(255) NOT NULL,
name VARCHAR(5) NOT NULL,
sub BIGINT(255) NOT NULL
)";

if (mysqli_query($query,$user_cha)){
	echo"<BR>USER_CHA successfully created";
}else{
	echo"<br>error table:".mysqli_error($query);
}

//CREATE 

echo"<script>alert('Install complete');</script>";
echo("<script>location.replace('index.php');</script>"); 
mysqli_close($query);
?>