<html>
<head>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>

</head>
<body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
<div style='margin:0 auto;padding:15px;border:1px solid;border-color:e2e2e2;width:700px;height:1000px;background-color:ffffff;border-radius: 5px;'>
  <ul class='nav nav-tabs'>
    <li role='presentation' class='active'><a href='#'>내기 현황</a></li>
    <li role='presentation'><a href='#'>점수 추이</a></li>
    <li role='presentation' class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
        관리자 <span class='caret'></span></a>
        <ul class='dropdown-menu'>
        <li role='presentation'><a href='#' data-toggle='modal' data-target='#adduser'>야싫모 멤버 추가</a></li>
        <li role='presentation'><a href='#' data-toggle='modal' data-target='#addgame'>경기 추가</a></li>
        </ul>
</div>


<!-- USER ADD MODAL -->
<div class='modal fade' id='adduser' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <h4 class='modal-title' id='myModalLabel'>야싫모 인원 추가하기</h4>
      </div>
      <div class='modal-body'>
        <form action='/ysm/rank_input.php' method='get' class='form-horizontal'>
  <input type='hidden' name ='data_type' value='user_input'>
    <div class='form-group'>
      <div class='col-xs-3'>
        <label for='name'>이름 </label><input type='text' name='name' class='form-control' id='ex1' placeholder='나진원'>
      </div>
    </div>
   
 
  <br><div class='panel panel-default'>
    <div class='panel-heading'><lable for='forecast'>예측 순위</lable></div>
  <!--킅엘롯기엔넥한두슼삼-->
  <table class="table table-condensed">
  <tr>
    <th> <lable for='1'>1위&nbsp;&nbsp;</lable></th>
    <th>
    <select name='ONE' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
    </th>
    </tr>
 
  <tr>
    <th> <lable for='2'>2위&nbsp;&nbsp;</lable></th>
    <th>
    <select name='TWO' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
    </th>
    </tr>
  <tr>
    <th> <lable for='3'>3위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='THREE' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
    </th>
    </tr>
   <tr>
    <th> <lable for='4'>4위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='FOUR' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
        </th>
    </tr>
  <tr>
    <th> <lable for='5'>5위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='FIVE' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
      </th>
    </tr>
   <tr>
    <th> <lable for='6'>6위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='SIX' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
          </th>
    </tr>
   <tr>
    <th> <lable for='7'>7위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='SEVEN' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
    </th>
    </tr>
     <tr>
    <th> <lable for='8'>8위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='EIGHT' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
      </th>
    </tr>
   <tr>
    <th> <lable for='9'>9위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='NINE' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
        </th>
    </tr>
   <tr>
    <th> <lable for='10'>10위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='TEN' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
          </th>
    </tr>
    </table>
    </div>

      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>닫기</button>
        <button type='submit' class='btn btn-primary'>멤버 추가하기</button>
        </form>

      </div>
    </div>
  </div>
</div>

<!--GAME RESULT MODAL-->
<div class='modal fade' id='addgame' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <h4 class='modal-title' id='myModalLabel'><b>경기 결과 추가하기</b></h4>
      </div>
      <div class='modal-body'>
        <form action='/ysm/rank_input.php' method='get' class='form-horizontal'>
  <input type='hidden' name ='data_type' value='user_input'>
    <div class='form-group'>
      <div class='col-xs-3'>
        <label for='gamedate'>경기 날짜 </label><input type='text' name='name' class='form-control' id='ex1' placeholder='20170503'>
      </div>
    </div>
   
 
  <br><div class='panel panel-default'>
    <div class='panel-heading'><lable for='forecast'><b>최종 순위</b></lable></div>
  <!--킅엘롯기엔넥한두슼삼-->
  <table class="table table-condensed">
  <tr>
    <th> <lable for='1'>1위&nbsp;&nbsp;</lable></th>
    <th>
    <select name='ONE' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
    </th>
    </tr>
 
  <tr>
    <th> <lable for='2'>2위&nbsp;&nbsp;</lable></th>
    <th>
    <select name='TWO' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
    </th>
    </tr>
  <tr>
    <th> <lable for='3'>3위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='THREE' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
    </th>
    </tr>
   <tr>
    <th> <lable for='4'>4위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='FOUR' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
        </th>
    </tr>
  <tr>
    <th> <lable for='5'>5위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='FIVE' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
      </th>
    </tr>
   <tr>
    <th> <lable for='6'>6위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='SIX' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
          </th>
    </tr>
   <tr>
    <th> <lable for='7'>7위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='SEVEN' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
    </th>
    </tr>
     <tr>
    <th> <lable for='8'>8위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='EIGHT' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
      </th>
    </tr>
   <tr>
    <th> <lable for='9'>9위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='NINE' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
        </th>
    </tr>
   <tr>
    <th> <lable for='10'>10위&nbsp;&nbsp;</lable></th>
    <th>
      <select name='TEN' class='form-control input-sm' id='sel1'>
      <option value=''> 팀 선택하기</option>
      <option value='KT'>KT 위즈</option>
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
          </th>
    </tr>
    </table>
    </div>

      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>닫기</button>
        <button type='submit' class='btn btn-primary'>경기결과 등록</button>
        </form>

      </div>
    </div>
  </div>
</div>
</body>

</html>