<?php
if( isset($_POST['uname']) and isset($_POST['pwd']) ) {
		include('config.php'); //code is given below (used for database connection)
		$user=$_POST['uname'];
		$pass=$_POST['pwd'];
 
		$ret=mysqli_query( $conn, "SELECT * FROM faculty WHERE email='$user' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
		if(!$row) {
			header("Location: loginnew.php");
		}
		else {
	        session_start();
	        $_SESSION['user']=$user;
			header('location:stex.php');
		}
}
?>
<html>
<head><title>Login</title>
</head>
<body>
 
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<input type="text" name="uname" placeholder="Email ID or Username" required autofocus />
	<input type="password" name="pwd" placeholder="Password" required /> 
	<input type="submit" value="Login" />
</form>
 
</body>
</html>