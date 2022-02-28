<?php require('002.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Biblioteca de Diagnosticos</h1>
	<h2>
	<a href="http://localhost/xampp/proyecto1/01/001.php">Recargar</a>&nbsp
	<a href="">Perfil</a>&nbsp
	<a href="http://localhost/xampp/proyecto1/01/003.php">Colabora con nosotros</a>
	</h2>
	<h3>
	<form method="POST" action="">
		<input type="text" name="buscador" placeholder="sintomas o enfermedades" autocomplete="off" style="text-transform: lowercase;">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	</h3>
<?php
 if (isset($_POST['enviar'])) {
	$buscar=$_POST['buscador'];
	$precarga=42606341;
	if ($buscar=$precarga) {
		header('location:http://localhost/xampp/proyecto1/01/006.php');
		mysql_close($conn);
	}else{
	$query ="SELECT * FROM sye WHERE enfermedades LIKE '%$buscar%' OR sintomas LIKE '%$buscar%'";
	$query2=mysqli_query($conn,$query);
	while ($datos=mysqli_fetch_array($query2)) {
		?>
		<span style="text-transform: uppercase">
			<?php  
		echo $datos['enfermedades'].':&nbsp'; echo $datos['sintomas'].'&nbsp<br>';
		?>
		</span>
		<?php
	}
}
} ?>
<table>
	<tr>
		
	</tr>
</table>
</body>
</html>