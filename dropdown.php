<html>
<head>
<title> DropDown </title>
</head>
<body>
<?php
	$num1=$_GET["txtnum1"];
	$num2=$_GET["txtnum2"];
	$ope=$_GET["dropdown"];
	if($ope=="+")
		echo "The sum of the numbers".$num1." & ".$num2." is ".($num1+$num2)."<br>";
	else if($ope=="-")
		echo "The difference of the numbers".$num1." & ".$num2." is ".($num1-$num2)."<br>";
	else if($ope=="*")
		echo "The multiplication of the numbers".$num1." & ".$num2." is ".($num1*$num2)."<br>";
	else if($ope=="/")
		echo "The division of the numbers".$num1." & ".$num2." is ".($num1/$num2)."<br>";
	else
		echo "Did Not Selected any option<br>";
?>
</body>
</html>