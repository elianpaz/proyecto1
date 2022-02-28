<?php
require('002.php');
$pass=$_POST['aceptar'];
$paas=95629;
if ($pass=$paas) {
 	$id=$_POST['enviar'];
 	$mq="SELECT * FROM precarga WHERE id=$id";
    $qr=mysqli_query($conn,$mq);
    while ($datos=mysqli_fetch_array($qr)) {
    	$enfermedad=$datos['enfermedades'];
    	$sintomas=$datos['sintomas'];
    }
    	$aut="INSERT INTO sye(id, enfermedades, sintomas) VALUES('$id', '$enfermedad', '$sintomas')";
    	$rq=mysqli_query($conn,$aut);
    	if ($rq) {
    		$del="DELETE FROM precarga WHERE id=$id";
    		$que=mysqli_query($conn,$del);
    		if ($que) {
    		mysqli_close($conn);
    		header('location:http://localhost/xampp/proyecto1/01/006.php');
    		exit();
    	
    		}else{echo "error";}
    	}else{ echo "hubo un error";}
}else{
     	mysqli_close();
     	header('location:http://localhost/xampp/proyecto1/01/006.php');
     	exit();
     	
     	
     }
  



?>