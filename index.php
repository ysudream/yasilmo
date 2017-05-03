<html>
<head><meta http-equiv='Content-Type' content='text/html;charset=utf-8'></head>
<body>
<script>
	function user_display(){
		document.getElementById('1').style.display='block';
		document.getElementById('2').style.display='none';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='none';

	}
	function teamrank_display(){
		document.getElementById('1').style.display='none';
		document.getElementById('2').style.display='block';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='none';
	}
	function userrank_display(){
		document.getElementById('1').style.display='none';
		document.getElementById('2').style.display='none';
		document.getElementById('3').style.display='block';
		document.getElementById('4').style.display='none';
	}
	function userrank_history(){
		document.getElementById('1').style.display='none';
		document.getElementById('2').style.display='none';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='block';
	}
</script>
<!--navigation button-->
<input type=button value='야싫모 멤버 입력' onclick='user_display()'>
<input type=button value='팀 랭킹 입력' onclick='teamrank_display()'>
<input type=button value='내기 현황' onclick='userrank_display()'>
<input type=button value='점수 추이' onclick='userrank_history()'>



<div class='user_input' id='1' style='display:none;'>
	<form action='/ysm/rank_input.php' method='get'>
	<input type='hidden' name ='data_type' value='user_input'>
	이름 <input type='text' name='name'>
	<br>예측 순위
	<!--킅엘롯기엔넥한두슼삼-->
	<br><b>1</b>
		<select name='ONE'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br> <b>2</b>
		<select name='TWO'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br> <b>3</b>
	  	<select name='THREE'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br> <b>4</b>
	  	<select name='FOUR'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br> <b>5</b>
	  	<select name='FIVE'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br> <b>6</b>
	  	<select name='SIX'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br> <b>7</b>
	  	<select name='SEVEN'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br> <b>8</b>
	  	<select name='EIGHT'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br> <b>9</b>
	  	<select name='NINE'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br> <b>10</b>
	  	<select name='TEN'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>

	 <br><input type='submit' value='확인'>
	</form>
</div>
<div class='teamrank_input' id='2' style='display:none;'>

	<form action='/ysm/rank_input.php' method='get'>
	<input type='hidden' name ='data_type' value='teamrank_input'>
	경기날짜 <input type='text' name='nalja'>
	<!--킅엘롯기엔넥한두슼삼-->
	<br><input type='text' size='2' name='1'>
		<select name='ONE'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br><input type='text' size='2' name='2'>
		<select name='TWO'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br><input type='text' size='2' name='3'>
	  	<select name='THREE'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br><input type='text' size='2' name='4'>
	  	<select name='FOUR'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br><input type='text' size='2' name='5'>
	  	<select name='FIVE'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br><input type='text' size='2' name='6'>
	  	<select name='SIX'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br><input type='text' size='2' name='7'>
	  	<select name='SEVEN'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br><input type='text' size='2' name='8'>
	  	<select name='EIGHT'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br><input type='text' size='2' name='9'>
	  	<select name='NINE'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	<br><input type='text' size='2' name='10'>
	  	<select name='TEN'>
	  	<option value=''> TEAM SELECT</option>
	    <option value='KT'>KT 위저드</option>
	    <option value='LG'>LG 트윈스</option>
	    <option value='LT'>롯데 자이언츠</option>
	    <option value='KI'>기아 타이거스</option>
		<option value='NC'>NC 다이노스</option> 
		<option value='NX'>넥센 히어로즈</option>
		<option value='HW'>한화 이글스</option>
		<option value='DO'>두산 베어스</option>
		<option value='SK'>SK 와이번스</option>
	  	<option value='SM'>삼성 라이온즈</option>
	  </select>
	  <br><input type='submit' value='확인'>

	</form>
</div>
<div class='display_ranking' id='3' style='display:none;'>

	<?php
	include 'connect.php';
	 
	/*  This Algorithm will display who will buy chicken or beer.
		The system will first off scan the number of users and numerize it into a variable. That will be the quantity for records being pulled out from user_sub table.
	*/
	//pull number of users from user table
	$sql = "SELECT COUNT(*) FROM users";
	$result = mysqli_query($query,$sql);
	$user_num= mysqli_fetch_assoc($result);
	//make ranking table

	$sql2 = "SELECT * FROM user_sub ORDER BY nalja DESC, sub ASC LIMIT ".$user_num['COUNT(*)'];
	$result = mysqli_query($query,$sql2);

	if (mysqli_num_rows($result)>0){
		//output data
		while ($row = mysqli_fetch_assoc($result)){
			
			echo "<br><div>".$row['name']."</div><div>점수</div><div>".$row['sub']."</div>";
		} 
	}else{
		echo "결과값이 없습니다.";
	}


	
 /*
 Display Current KBO Ranking (Manually Recorded)
 */
 	$sql5 = "SELECT * FROM teams WHERE nalja=(SELECT max(nalja) FROM teams)";
 	$tr5 = mysqli_query($query,$sql5);
 	$sql6 = "SELECT * FROM teams WHERE nalja=(SELECT max(nalja) FROM teams)";
 	$tr6 = mysqli_query($query,$sql6);
 	
 	while ($row6 = mysqli_fetch_assoc($tr6)){
 		echo"<table style='border: 1px solid;'><tr><th>최근 입력 날짜:".$row6['nalja']."</th></tr><tr><th>순위</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>";
 	}
 	echo"<tr><th></th>";
 	while ($row7 = mysqli_fetch_assoc($tr5)){

 
 		$rkt =	substr($row7["ranks"],0,1); if ($rkt == "t") {$rkt ='10';}
		$rlg =	substr($row7["ranks"],1,1); if ($rlg == "t") {$rlg ='10';}
		$rlt =	substr($row7["ranks"],2,1); if ($rlt == "t") {$rlt ='10';}
		$rki =	substr($row7["ranks"],3,1); if ($rki == "t") {$rki ='10';}
		$rnc =	substr($row7["ranks"],4,1); if ($rnc == "t") {$rnc ='10';}
		$rnx =	substr($row7["ranks"],5,1); if ($rnx == "t") {$rnx ='10';}
		$rhw =	substr($row7["ranks"],6,1); if ($rhw == "t") {$rhw ='10';}
		$rdo = 	substr($row7["ranks"],7,1); if ($rdo == "t") {$rdo ='10';}
		$rsk =	substr($row7["ranks"],8,1); if ($rsk == "t") {$rsk ='10';}
		$rsm =	substr($row7["ranks"],9,1); if ($rsm == "t") {$rsm ='10';}

		$showran_array = array ($rkt => "KT 위즈",$rlg=>"LG 트윈스",$rlt=>"롯데 자이언츠",$rki=>"기아 타이거스",$rnc=>"NC 다이노스",$rnx =>"넥센 히어로즈",$rhw=>"한화 이글스",$rdo=>"두산 베어스",$rsk=>"SK 와이번즈",$rsm=>"삼성 라이온즈");
		
		ksort($showran_array);
		$m=1;
		while ($m<=10){
			echo "<th>".$showran_array[$m]."</th>";
			$m++;
		}
 	}
 	echo"</tr></table><br>";

/*
 Display Member's ranking forecast
*/
	$sql4 = "SELECT * FROM users";
	$tr4 = mysqli_query($query,$sql4);
	echo"<table style='border: 1px solid;'><tr><th>순위</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>";
	while ($row5 = mysqli_fetch_assoc($tr4)){
		//Widthraw rank record
		
		$rkt =	substr($row5["ranks"],0,1); if ($rkt == "t") {$rkt ='10';}
		$rlg =	substr($row5["ranks"],1,1); if ($rlg == "t") {$rlg ='10';}
		$rlt =	substr($row5["ranks"],2,1); if ($rlt == "t") {$rlt ='10';}
		$rki =	substr($row5["ranks"],3,1); if ($rki == "t") {$rki ='10';}
		$rnc =	substr($row5["ranks"],4,1); if ($rnc == "t") {$rnc ='10';}
		$rnx =	substr($row5["ranks"],5,1); if ($rnx == "t") {$rnx ='10';}
		$rhw =	substr($row5["ranks"],6,1); if ($rhw == "t") {$rhw ='10';}
		$rdo = 	substr($row5["ranks"],7,1); if ($rdo == "t") {$rdo ='10';}
		$rsk =	substr($row5["ranks"],8,1); if ($rsk == "t") {$rsk ='10';}
		$rsm =	substr($row5["ranks"],9,1); if ($rsm == "t") {$rsm ='10';}

		$showrank_array = array ($rkt => "KT 위즈",$rlg=>"LG 트윈스",$rlt=>"롯데 자이언츠",$rki=>"기아 타이거스",$rnc=>"NC 다이노스",$rnx =>"넥센 히어로즈",$rhw=>"한화 이글스",$rdo=>"두산 베어스",$rsk=>"SK 와이번즈",$rsm=>"삼성 라이온즈");
		
		ksort($showrank_array);
		echo "<tr><th>".$row5['name']."</th>";
		$x=1;
		while ($x<=10){
			echo "<th>".$showrank_array[$x]."</th>";
			$x++;
		}

	}

		echo"</table>";
?>
</div>
<?php
include 'connect.php';

$sql = "SELECT * FROM user_sub GROUP BY nalja";
$tr = mysqli_query($query,$sql);

echo"
<div class='ranking_traits' id='4' style='display:none;'>
	<div><!--space for line chart--></div>		
	<table style='border:1px solid;'>
	<tr><th>날짜</th>";
while ($row2 = mysqli_fetch_assoc($tr)){
	echo"<th>".$row2['nalja']."</th>
	";}
	echo"</tr><tr>";
$sql2 = "SELECT * FROM user_sub GROUP BY name";
$tr2 = mysqli_query($query,$sql2);
while ($row3 = mysqli_fetch_assoc($tr2)){
	echo"<th>".$row3['name']."</th>";
	$sql3 = "SELECT * from user_sub where name='".$row3['name']."'";
	$tr3 = mysqli_query($query,$sql3);
	while ($row4 = mysqli_fetch_assoc($tr3)){
		echo"<th>".$row4['sub']."</th>";
	}
	echo"</tr>";
}

?>
</div>
</body>
<html>
