
<?php include "connection.php";

	$sql = "select * from area where aname = '".$_POST['aname']."'";    
	$result = mysqli_query($link, $sql); 
	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}
	if(mysqli_num_rows($result)>0){
		?>
		<html>
		
			<head>
			<link rel="stylesheet" type="text/css" href="reset.css">

			<link rel="stylesheet" type="text/css" href="css1/style1.css">
			<link rel="stylesheet" type="text/css" href="css/style.css"
			</head>
			

			<body style='background-image:url("abc.png");
				background-repeat:no-repeat;
				background-position: center'	>
			<div>
			<h3>SWIYC(Save Water If You Can) </h3></div>
			<div align="Center" id="nav" ><ul>
			</ul>
			</div>
			<?php
			if ($result->num_rows > 0) { ?>
				<p style ='text-transform: uppercase;'> <?php echo $_POST['aname'];?></p> 
				<table>
				<tr>
				<th>Tank Id</th>
				<th>Water Tank Name</th>
				<th>Storage Capacity (In Lt.)</th>
				<th>Current Status(In Lt.)</th>
				<th>Apply</th>
				</tr>
				<?php
				while($row = $result->fetch_assoc()) {
					echo '<tr><td>'. $row['id']. '</td><td>' . $row['water tank name']. '</td><td>' . $row['capacity'] .'</td><td>' . $row['availablity'].'</td><td> <button class="button" type="button" id="button" OnClick="select1('. $row['id']. ')">Fill</button></td></tr>';
				}
			}
			
			?>
			</table>


			</body>
		</html>
		<script>
	function select1(id){
		window.location="http://localhost/swiyc/request2.php?id= " + id;
	}
</script>

		<?php
	}
	else{
		header('Location:/swiyc/firstpage.php?f=1');
	}
	?>