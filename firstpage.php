<html>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">

<link rel="stylesheet" type="text/css" href="css1/style1.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>


<body style='background-image:url("abc.png");
	background-repeat:no-repeat;
	background-position: center'	>
<div>
<h3>SWIYC(Save Water If You Can) </h3></div>
<div align="Center" id="nav" ><ul>
</ul>
</div>
<h1>
<?php
if (!empty($_GET['f']))
{
	echo "<h1>OOPS!! Area not found...</h1>";
}
?>
</h1>
<form action="submit1.php" method="POST">

	<div class="container">
		<div class="top">
			
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Select Area</h2>
			</div>
			<label for="username">Name</label>
			<br/>
			<input type="text" name="aname" id="aname">
			<br/>
			<button type="submit">Go</button>
			<br/>
			 
			
		</div>
	</div>

</form>


</body>
</html>
