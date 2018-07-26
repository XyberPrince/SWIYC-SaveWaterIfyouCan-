
<html>
		
			<head>
			<link rel="stylesheet" type="text/css" href="reset.css">

			<link rel="stylesheet" type="text/css" href="css1/style1.css">
			<link rel="stylesheet" type="text/css" href="css/style.css"
			</head>
			

			<body style='background-image:url("abc.png");
				background-repeat:no-repeat;
				background-position: center'>
			
<div><h3>SWIYC(Save Water If You Can) </h3></div>
</div>
<div align="Center" id="nav"><ul>
<a href="submit1.php" class="home"><li>BACK</li></a>
<a class="home"><li><?php include "connection.php";

					$sql = "select * from area where id = ".$_REQUEST['id']."";
					$result = mysqli_query($link, $sql); 
					if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
					}
					if(mysqli_num_rows($result)>0){
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
							echo $row['aname'];
					
					?></li></a>
<a href="firstpage.php" class="home"><li>HOME</li></a>
</ul>
</div>
	<div class="container">
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2><?php 
					echo $row['water tank name']; 
				?></h2>
			</div>
			<form  action="check.php"name='f1' method="POST">
				<label for="name">Total Capacity(In Lt.)</label>
				<br/>
					<input type="text" name="tcapacity" id="tc" value=" <?php echo $row['capacity'];  ?> " >
				<br/>
				<label for="name">Current Status(In Lt.)</label>
				<br/>
				<input type="text" name="current" id="ct" value=" <?php echo $row['availablity'];}}} ?> ">
				<br/>
				
				<label for="name">enter no of Lt</label>
				<br/>
				<input type="text" name="fill" id="ft" required>
				<br/>
				<button type="submit" >Confirm</button>
			</form>
			<br/>	
		</div>
	</div>
</body>
</html>
