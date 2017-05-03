<?php
include 'connect.php';
//Recieve TEAM RANK DATA (BOTH FOR USER AND TEAM DATA)
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

//ranking for user info
$ranking = array("",$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten);

/*  Ranking for everyday game results.
	The ranking algorithm differs from user data due to same ranking (i.e. LG and Lotte might be on the same 6th place)
	Eventually the system will recieve manually written rankings from the index.php form and insert it in the TABLE after trimming the data.
*/
//Recieve data type
$data_type = $_GET["data_type"];

//Recieve TEAM RANK DATA (Manually recorded)
if ($data_type == "teamrank_input"){
$ran_one = $_GET["1"];
$ran_two = $_GET["2"];
$ran_three = $_GET["3"];
$ran_four = $_GET["4"];
$ran_five = $_GET["5"];
$ran_six = $_GET["6"];
$ran_seven = $_GET["7"];
$ran_eight = $_GET["8"];
$ran_nine = $_GET["9"];
$ran_ten = $_GET["10"];

//Trim Data for Everyday Ranking
$game_ranking = array( $one => $ran_one,
					   $two => $ran_two,
					   $three => $ran_three,
					   $four => $ran_four,
					   $five => $ran_five,
					   $six => $ran_six,
					   $seven => $ran_seven,
					   $eight => $ran_eight,
					   $nine => $ran_nine,
					   $ten => $ran_ten,);

$text_ranking = "KTLGLTKINCNXHWDOSKSM";
$search = array ($one, $two, $three, $four, $five, $six, $seven, $eight, $nine, $ten);
$replace = array ($game_ranking[$one],$game_ranking[$two],$game_ranking[$three],$game_ranking[$four],$game_ranking[$five],$game_ranking[$six],$game_ranking[$seven],$game_ranking[$eight],$game_ranking[$nine],$game_ranking[$ten]);
$new_ranking = str_replace($search,$replace,$text_ranking);
$everyday_input = str_replace("10","t",$new_ranking);
echo "inputtextis:".$everyday_input;
}


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

				$sql = "INSERT INTO teams (nalja,ranks)
				VALUES ('".$game_date."','".$everyday_input."')";

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
					echo $cal_array[$x];
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

	//Add user_sub data for the latest date

	$sql = "SELECT * FROM teams WHERE nalja=(SELECT max(nalja) FROM teams)";
	$result = mysqli_query($query,$sql);
	$sql2 = "SELECT * FROM users WHERE name='$username'";
	$result2 = mysqli_query($query,$sql2) or die (mysqli_error($query));

	while ($row = mysqli_fetch_assoc($result)){
		while ($row2 = mysqli_fetch_assoc($result2)){
			$cal_array = array( substr($row["ranks"],0,1),substr($row2["ranks"],0,1),
								substr($row["ranks"],1,1),substr($row2["ranks"],1,1),
								substr($row["ranks"],2,1),substr($row2["ranks"],2,1),
								substr($row["ranks"],3,1),substr($row2["ranks"],3,1),
								substr($row["ranks"],4,1),substr($row2["ranks"],4,1),
								substr($row["ranks"],5,1),substr($row2["ranks"],5,1),
								substr($row["ranks"],6,1),substr($row2["ranks"],6,1),
								substr($row["ranks"],7,1),substr($row2["ranks"],7,1),
								substr($row["ranks"],8,1),substr($row2["ranks"],8,1),
								substr($row["ranks"],9,1),substr($row2["ranks"],9,1));
			//search and replace T with 10
			$x=0;
			while ($x <= 19){
				if ($cal_array[$x] == "t"){
					$cal_array[$x] = str_replace("t","10",$cal_array[$x]);
				}
				echo $cal_array[$x];
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

			$sql3 = "INSERT INTO user_sub (num,nalja,name,sub) VALUES ('','".$row['nalja']."','$username','".$cha."')";
			$result3 = mysqli_query($query,$sql3);
		}
	}




}






//echo("<script>location.replace('index.php');</script>"); 
mysqli_close($query);
?>