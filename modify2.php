<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>
</title>
<body background="3.jpg">
<?php
	include "connection.php";
	
 $sql="UPDATE iud SET  `COMPANY NAME`='".$_POST['ncname']."', MODELNO='".$_POST['nmno']."' where `COMPANY NAME` = '".$_POST['cname']."' AND MODELNO='".$_POST['mno']."'";
			$result = mysqli_query($link, $sql);
			echo"<center><h3>Update Successfully...</h3></center>";







			$sql="select * from iud";
		$result = mysqli_query($link, $sql);
		if($result->num_rows>0){
			echo"<center>";
			echo "<table class=\"t\" >";
				echo"<tr>";
			echo"</br><th>COMPANY NAME:</th> <th> MODELNO:</th>";
			echo "</tr>";
			while($row=$result->fetch_assoc()){
				
				echo"<tr>";
				echo"<th>".$row["COMPANY NAME"]."</th> <th>".$row["MODELNO"]."</th>";
				echo "</tr>";
				

			}

			echo "</table>";
			echo "</center>";
		}
		else{
			echo "0 results";
		}	
			?>