<?php
	$m1=$_POST['marks1'];
	$m2=$_POST['marks2'];
	$m3=$_POST['marks3'];
	$m4=$_POST['marks4'];
	
	$con=mysqli_connect('localhost','root','','mysql');;
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
	$query="INSERT INTO student(marks1,marks2,marks3,marks4)VALUES('$m1','$m2','$m3','$m4')";
	
	mysqli_query($con,$query);
	  echo("Error description: " . mysqli_error($con));
?>