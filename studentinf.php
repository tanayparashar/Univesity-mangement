
<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<title>
Check Student Record
</title>
    
    <style type="text/css">
      body {
		background-color = #D6ACE6;
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
	  form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}
    </style>
    <link href="main/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
<h1>Check Student Record</h1>
    <div class="container-fluid">
      <div class="row-fluid">
		<div class="span4">
		</div>
	
</div>
<div id="login">
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<form action="login.php" method="post">

			
		<br>

		
<div class="input-prepend">
		<input style="height:40px;" type="text" name="Enrollment" Placeholder="Enrollment" required/><br>
</div>

         </form>
         <div class="qwe">
		 <button class="btn btn-large btn-primary btn-block pull-right" onclick="window.open('/UnivManagement/studres.php')" type="submit"><i class="icon-signin icon-large"></i> View Student</button>
</div>
<php?
session_start();
$var=$_POST['Enrollment'];
$_SESSION["enrl"];
?>
</div>
</div>
</div>
</div>
</body>
</html>
