<?php

$host="127.29.12.43";
$user="root";
$pass="password";
$db="chat";

$con=mysqli_connect($host,$user,$pass,$db);

//if(!$con)
//{
//	print("Not Connected<br>".mysqli_error());

//}
//else
//{
//	echo("Connected");
//}

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




?>
