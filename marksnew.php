<?php

var_dump($_POST);
echo "IBIUY";

if($_SERVER['REQUEST_METHOD']=='POST')
{
	echo "POST";
		$name = $_POST['name'];
		$sql= "SELECT * FROM faculty WHERE name='jayaram'";
			$stm1=$_POST['stm1'];
			$st2m1=$_POST['st2m1'];
			$mtm1=$_POST['mtm1'];
			$mt2m1=$_POST['mt2m1'];
	
			$con=mysqli_connect('localhost','root','','mysql');
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
  
			$query="INSERT INTO marks(stm1,st2m1,mtm1,mt2m1)VALUES('$stm1','$st2m1','$mtm1','$mt2m1')";
	
			mysqli_query($con,$query);
			echo("Error description: " . mysqli_error($con));
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
		$name = $_POST['name'];
		$sql= "SELECT * FROM faculty WHERE username = 'gowrinath' ";
			$stm1=$_POST['stm2'];
			$st2m1=$_POST['st2m2'];
			$mtm1=$_POST['mtm2'];
			$mt2m1=$_POST['mt2m2'];
	
			$con=mysqli_connect('localhost','root','','mysql');
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
  
			$query="INSERT INTO marks(stm1,stm2,mtm2,mt2m2)VALUES('$stm2','$st2m2','$mtm2','$mt2m2')";
	
			mysqli_query($con,$query);
			echo("Error description: " . mysqli_error($con));

}
?>