
<?php include "connection.php";

	$sql = "select * from login where username = '".$_POST['username']."' AND password = '".$_POST['password']."'";    
	$result = mysqli_query($link, $sql); 
	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}
	if(mysqli_num_rows($result)==1){
		header('Location:/swiyc/firstpage.php');
	}
	else{
		header('Location:/swiyc/index.php?f=1');
	}
	mysqli_close($link);
	die();
?>

