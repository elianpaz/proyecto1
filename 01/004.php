<?php  
require('002.php');
	$enfermedad=$_POST['enfermedades'];
	$sintomas=$_POST['sintomas'];
	$guardar="INSERT INTO sye(enfermedades, sintomas)VALUES('$enfermedad', '$sintomas')";
	$query=mysqli_query($conn,$guardar);
	if ($query) {
	sleep(5);
	header('location:http://localhost/xampp/proyecto1/01/003.php');
	exit();
	mysqli_close($conn);
	}else{
	sleep(5);
	header('location:http://localhost/xampp/proyecto1/01/001.php');
	exit();	
	mysqli_close($conn);	
		}
		?>