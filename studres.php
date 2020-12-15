<?php
	//Start session
	session_start();
	

	//Connect to mysql server
	$link = mysqli_connect('localhost','root','',"imsproj");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysqli_select_db($link,'imsproj');
	if(!$db) {
		die("Unable to select database");
	}
	
	
	//Sanitize the POST values
	$enrl=$_SESSION["enrl"];

	
	echo $enrl;

	$qry="SELECT * FROM Student WHERE Enrollment='$enrl'";
	$result=mysqli_query($link,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			foreach($result->fetch_assoc() as $row) { // browse each records
                echo $row;
                echo"-----";
              }
			session_write_close();
			
			exit();
		}else {
			//Login failed
			
			exit();
		}
	}else {
		die("Query failed");
	}
?>