<?php
	$sname=$_POST['sname'];
	$rollno=$_POST['rollno'];
	$branch=$_POST['branch'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root','','mysql');
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo $email;
	$query="INSERT INTO student(sname,rollno,branch,mobile,email,password)VALUES('$sname','$rollno','$branch','$mobile','$email','$password')";
	
	mysqli_query($con,$query);
	  echo("Error description: " . mysqli_error($con));
?>