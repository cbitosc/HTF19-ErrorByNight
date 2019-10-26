<html>
<head>
<script>
button {
    background: red;
    cursor: pointer;
}
</script>
</head>
<body>
<?php
$rows=61;

$cols=10;
echo "<h1 align='center'><u>Student marks list</u></h1>";
echo "<h2>Faculty Name:</h1>";
echo "<h2>Faculty Subject:</h1>";


echo "<center>";

echo "<table border='1'>";

	echo"<tr>";
	echo"<th>Roll Number</th>";
	echo"<th>slip test1</th>";
	echo"<th>slip test 2</th>";
	echo"<th>avg slip test</th>";
	echo"<th>mid 1</th>";
	echo"<th>mid 2</th>";
	echo"<th>avg mid</th>";
	echo"<th>lab internal 1</th>";
	echo"<th>lab internal 2</th>";
	echo"<th>lab internal </br> avg</th>";
	echo"</tr>";

for($i=1;$i<$rows;$i++)

{
echo "<tr>";
for($j=0;$j<$cols;$j++)
{
	if($j==0)
	{
		$sql=" "1601188620".$i
	}
	else
		echo "<td><INPUT TYPE='TEXT' size='10'/></td>";
}

echo "</tr>";

}

echo "</table>";
echo "<br/>";
echo "<br/>";
echo "<button class='button' style='background-color:#4169E1'> SUBMIT </button> </center>";

?>
</BODY>
</HTML>