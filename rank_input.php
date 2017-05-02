<?php
include 'connect.php';
//Recieve TEAM RANK DATA
$one =	$_GET["ONE"];
$two =	$_GET["TWO"];
$three=	$_GET["THREE"];
$four =	$_GET["FOUR"];
$five =	$_GET["FIVE"];
$six =	$_GET["SIX"];
$seven=	$_GET["SEVEN"];
$eight =$_GET["EIGHT"];
$nine = $_GET["NINE"];
$ten =	$_GET["TEN"];
$ranking = array("",$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten);

//Recieve data type
$data_type = $_GET["data_type"];

/*  Trim data
	Team Order => 킅엘롯기엔넥한두슼삼
	Algorithm => Find Team->Lable Ranking->Place in Order
*/

$rkt = array_search("KT",$ranking);
$rlg = array_search("LG",$ranking);
$rlt = array_search("LT",$ranking);
$rki = array_search("KI",$ranking);
$rnc = array_search("NC",$ranking);
$rnx = array_search("NX",$ranking);
$rhw = array_search("HW",$ranking);
$rdo = array_search("DO",$ranking);
$rsk = array_search("SK",$ranking);
$rsm = array_search("SM",$ranking);

$pre_input = $rkt.$rlg.$rlt.$rki.$rnc.$rnx.$rhw.$rdo.$rsk.$rsm;
//replace 10 with t
$input_ranking = str_replace("10","t",$pre_input);

/* Insert Team Rank Data into Table
	substr()
	https://www.w3schools.com/php/func_string_substr.asp
*/
if ($data_type == "teamrank_input"){
	$game_date = $_GET["nalja"];
	
	if(!$query) {
		die ("<br>Connection failed:".mysqli_connect_error());
	}

	$sql = "INSERT INTO teams (num,nalja,ranks)
	VALUES ('','".$game_date."','".$input_ranking."')";

	if (mysqli_query($query,$sql)) {
		echo "<br>New record created successfully";
	}else{
		echo"<br>Error: ".$sql."<br>".mysqli_error($query);
	}

	/*  Algorithm for extracting subtracted value.
	System will check whether there is at least one user in the DB table.
	If so, system will automatically insert user ranking - team ranking into a new table installed.
	*/
	//Check for users and teams to retrieve all data
	$game_date = $_GET["nalja"];
	$sql1="SELECT * FROM users";
	$r_sql1 = mysqli_query($query,$sql1);
	$sql2="SELECT * FROM teams WHERE nalja='$game_date'";
	$r_sql2 = mysqli_query($query,$sql2) or die (mysqli_error());


		if (mysqli_num_rows($r_sql2) > 0 ){
			while ($row = mysqli_fetch_assoc($r_sql2)){
				if (mysqli_num_rows($r_sql1) > 0 ){
					while($usr = mysqli_fetch_assoc($r_sql1)){
						//Withdraw all substrings from rank record
						$cal_array = array( substr($row["ranks"],0,1),substr($usr["ranks"],0,1),
											substr($row["ranks"],1,1),substr($usr["ranks"],1,1),
											substr($row["ranks"],2,1),substr($usr["ranks"],2,1),
											substr($row["ranks"],3,1),substr($usr["ranks"],3,1),
											substr($row["ranks"],4,1),substr($usr["ranks"],4,1),
											substr($row["ranks"],5,1),substr($usr["ranks"],5,1),
											substr($row["ranks"],6,1),substr($usr["ranks"],6,1),
											substr($row["ranks"],7,1),substr($usr["ranks"],7,1),
											substr($row["ranks"],8,1),substr($usr["ranks"],8,1),
											substr($row["ranks"],9,1),substr($usr["ranks"],9,1));
						//search and replace T with 10
						$x=0;
						while ($x <= 19){
							if ($cal_array[$x] == "t"){
								$cal_array[$x] = str_replace("t","10",$cal_array[$x]);
							}
						$x++;
						}
						//Add all the abs
						$cha = abs($cal_array[0]-$cal_array[1])+
							   abs($cal_array[2]-$cal_array[3])+
							   abs($cal_array[4]-$cal_array[5])+
							   abs($cal_array[6]-$cal_array[7])+
							   abs($cal_array[8]-$cal_array[9])+
							   abs($cal_array[10]-$cal_array[11])+
							   abs($cal_array[12]-$cal_array[13])+
							   abs($cal_array[14]-$cal_array[15])+
							   abs($cal_array[16]-$cal_array[17])+
							   abs($cal_array[18]-$cal_array[19]);
						$sql3 = "INSERT INTO user_sub (nalja,name,sub)
						VALUES ('$game_date','".$usr["name"]."','$cha')";
						if (mysqli_query($query,$sql3)){
							echo "<br>user_sub successfully recorded";
						}else{
							echo"<br>error:".mysqli_error($query);
						}
					}
				}else{
						echo "<br>No Users in Table. Register Yasilmo Members first.";
					}
			}
		}
	



}

/* Insert User Data into Table
*/

if ($data_type == "user_input" ){

	//Recieve USER DATA
	$username = $_GET["name"];
	if(!$query){
		die ("Connection Failed:".mysqli_connect_error());
	}

	$sql = "INSERT INTO users (num,name,ranks)
	VALUES ('','".$username."','".$input_ranking."')";
	if (mysqli_query($query,$sql)){
		echo"User Data Input Success";
	}else{
		echo"Error:".$sql."<br>".mysqli_error($query);
	}


}






//echo("<script>location.replace('index.php');</script>"); 
mysqli_close($query);
?>