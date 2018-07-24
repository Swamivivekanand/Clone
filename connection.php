<?php
$servername="localhost";
$username="root";
$password="";
$database="practice";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)

{

	die("Connection failed".mysqli_connect_error());
}


$sql="CREATE TABLE IF NOT EXISTS clone
	(id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,

     name VARCHAR(30),
     password VARCHAR(100),
     email VARCHAR(30),
     contact_no VARCHAR(15),
     location VARCHAR(300),
     categories INT(1),
     salt VARCHAR(100),
     reg_date TIMESTAMP
 )";
 
if(mysqli_query($conn,$sql))
{
	    
}
else
{
	$error_message = mysqli_error($conn);
}

?>