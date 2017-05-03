
<!DOCTYPE html>
<html>
<body>

<?php
$onetext="red";
$twotext="redgreenblue";
$a=array($onetext=>'1',"green"=>'2',"blue"=>'3');
//echo array_search("red",$a);
echo $a[$onetext];
$y = str_replace($onetext,$a[$onetext],$twotext);
echo "<br>".$y;
//$b = "2147483647";
//echo abs(substr($b,2,1)-substr($b,3,1)-substr($b,4,1));
?>

</body>
</html>