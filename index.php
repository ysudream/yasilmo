<html>
<head><meta http-equiv='Content-Type' content='text/html;charset=utf-8'></head>
<body>
<script>
	function user_display(){
		document.getElementById('1').style.display='block';
		document.getElementById('2').style.display='none';
	}
	function teamrank_display(){
		document.getElementById('1').style.display='none';
		document.getElementById('2').style.display='block';
	}
</script>
<!--navigation button-->
<input type=button value='야싫모 멤버 입력' onclick='user_display()'>
<input type=button value='팀 랭킹 입력' onclick='teamrank_display()'>


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
<div class='display_ranking' id='3'>


</div>

</body>
<html>
