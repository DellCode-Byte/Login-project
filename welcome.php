<?php
	session_start();
	if(!isset($_SESSION["email"]) && !isset($_SESSION["password"]))
	{
	header('Location: Login.php');
	exit();
	}
?>

<html>
	<head>
		<title>Menu Page</title>
		<script type="text/javascript">
			function logout(){
			var choice = confirm("Do you really want to log out?");
				if(choice==true)
				window.location = "logout.php";
			}
		</script>
	</head>
	<body>
		<h2>Members Page</h2>
		<p>Some Text Here</p>
		<p>Another Text Here</p>
		<input type="button" value="Log Out" onclick="logout()">
	</body>
</html>
