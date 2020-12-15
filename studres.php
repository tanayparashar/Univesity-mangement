
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
	$enrl = ($_POST['enrollment']);
	
	
	
	$_SESSION["enrollid"]=$enrl;
	//Create query
	$qry="SELECT * FROM Student WHERE Enrollment='$enrl'";
	$result=mysqli_query($link,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			header("location:showstudentinfo.php");
			exit();
		}else {
			//Login failed
			header("location:showstudentinfo.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>