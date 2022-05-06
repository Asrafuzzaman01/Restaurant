<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="restaurant";


// creat connettion//

$conn= new mysqli($servername,$username,$password,$dbname);

// check connection//

if($conn->connect_error)
{

die("connection Failed:".$conn->connect_error);

}

else
	echo "connection successfully";//just for test //















?>