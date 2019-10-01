<?php
$servername = "localhost";
$username ="anshika";
$password = "1234";
$dbname = "te";
$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  
	$user=$_GET['username'];
	$pass=$_GET['pass'];
	$q="select * from signup where username='$user' and password='$pass'";
	
     $result=mysqli_query($conn,$q);
	 if($result==FALSE)
		 echo "wrong";
	 else{
      echo "hello ".$user;
	   session_start();
	   $_session["user"]=$user;
	   $_session["password"]=$pass;
	 }
  	  
		
	

?>
<html>
<head>
</head>
<body>
<br>
<form name="f" action= "payment.php" method="post">
<input type = "submit" value="pay">
</form>
</body>
</html>