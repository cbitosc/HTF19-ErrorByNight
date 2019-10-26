<?php
	$name=$_POST['name'];
	$fid=$_POST['fid'];
	$subject1=$_POST['subject1'];
	$subject2=$_POST['subject2'];
	$subject3=$_POST['subject3'];
	$phno=$_POST['phno'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root','','mysql');
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo $email;
	$query="INSERT INTO faculty(name,fid,subject1,subject2,subject3,phno,email,password) VALUES ('$name','$fid','$subject1','$subject2','$subject3','$phno','$email','$password')";
	
	mysqli_query($con,$query);
	  echo("Error description: " . mysqli_error($con));
?>