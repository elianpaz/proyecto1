<?php 
require('002.php');
$dato1=$_POST['enfermedades'];
$dato2=$_POST['sintomas'];
$ql="INSERT INTO precarga(enfermedades, sintomas) VALUES ('$dato1', '$dato2')";
$ch=mysqli_query($conn,$ql);
if ($ch) {
	sleep(3);
	header('location:http://localhost/xampp/proyecto1/01/003.php');
	exit();
	mysqli_close($conn);
}else{
	error_reporting();
	exit();
	mysqli_close($conn);
}
?>