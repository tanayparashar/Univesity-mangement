<?php
    session_start();
    ?>
    <?php
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
    $user=($_SESSION["USERid"]);
  
    $sql="SELECT * FROM course WHERE FacultyId='$user'";
    $result = $link->query($sql);


if ($result->num_rows > 0) {
    foreach($result->fetch_assoc() as $row) { // browse each records
	  echo $row;
	  echo"-----";
    }
} 
else {
    echo "no result";
}
?>