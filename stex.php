<html>
	<body>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <link href="css/mystyle.css" rel="stylesheet">
		<body style="background-color:;">
        <div class="row" style="background-color:#6A5ACD;">
                <div class="col-md-2">
                <center><img src="download.png" width="110" height="115"></a>
                   </center>
            </div>
            <div class="col-md-12">
                <h3 style="color:black;font-weight: bold;text-shadow:0 0 3px #FF0000;font-size:30px"><center>MARKS</center>
                    <br>
                 </h3>
		<?php
		echo "<center><form action='marksnew.php' method='post'>";
		echo "SLIP1:<input type='text' name='stm1'/></br></br>";
		echo "SLIP2:<input type='text' name='st2m1'/></br></br>";
		echo "MID1:<input type='text' name='mtm1'/></br></br>";
		echo "MID2:<input type='text' name='mt2m1'/></br></br></br>";
	
		echo "<button>Submit</button>";
		echo "</form></center>";
        ?>
	</body>
</html>