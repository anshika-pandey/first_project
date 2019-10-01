<?php
$servername = "localhost";
$username ="anshika";
$password = "1234";
$dbname = "te";
$userid=$_GET['user'];
$pwd=$_GET['pwd'];
$email=$_GET['email'];
$phone=$_GET['mob'];
echo $phone;
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO signup (Username,password,mobile,email)
VALUES('$userid','$pwd','$phone','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>