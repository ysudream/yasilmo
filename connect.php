<?

//Connect
$servername = "localhost";
$username = "";
$password = "";

//connection query
$query = new mysqli($servername, $username, $password);

//ping
if ($query->connection_error) {
	die ("Connection Failed:" . $conn->connection_error);
}
echo "connected";


//Create Database

$create = "CREATE DATABASE baseball";
if ($query->query($create)) === TRUE ){
	echo "DATABASE baseball created";
} else {
	echo "Error creating database:". $query->error;
}

// Create Team Data ver.2
// Team Order == 킅엘롯기엔넥한두슼삼

$team_table="CREATE TABLE IF NOT EXISTS teams (
num INT(6) AUTO_INCREMENT PRIMARY KEY,

)
"


//Create User and Team Table
$table = "CREATE TABLE users (
num INT(6) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20) NOT NULL,
team VARCHAR(20) NOT NULL,
ranks VARCHAR(10) NOT NULL
)";

$team_table = "CREATE TABLE teams (
num INT(6) AUTO_INCREMENT PRIMARY KEY,
team VARCHAR(20) NOT NULL,
ranks INT(10) NOT NULL
)";

if ($query->query($table)) === TRUE ){
echo "user table successfully created";
}else{
echo "Error creating table:" .$query->error;
}

if ($query->query($team_table)) === TRUE ){
echo "team table successfully created";
}else{
echo "Error creating table:" .$query->error;
}

//Insert Team Data

function teaminfo ($tn,$tr){
	$teaminsert = "INSERT INTO teams (team, ranks)
	VALUES ('".$tn."'), ('".$tr."')";
		if ($query->query($teaminsert) === TRUE){
		echo "team inserted successfully";
		}else{
		echo "team insert error".$query->error;
		}
	}
//im not gonna use arrays fuck you
teaminfo ("킅","");
teaminfo ("엘","");
teaminfo ("롯","");
teaminfo ("기","");
teaminfo ("엔","");
teaminfo ("넥","");
teaminfo ("한","");
teaminfo ("두","");
teaminfo ("슼","");
teaminfo ("삼","");

//Insert User Data
function userinfo ($un,$ut,$utr){
	$teaminsert = "INSERT INTO users (name, team, ranks)
	VALUES ('".$un."'), ('".$ut."'),('".$utr."')";
		if ($query->query($teaminsert) === TRUE){
		echo "user inserted successfully";
		}else{
		echo "user insert error".$query->error;
		}
	}

$listteams = array ("킅","엘","롯","기","엔","넥","한","두","슼","삼");
$ml = array ("10","6","")

$query->close();
?>