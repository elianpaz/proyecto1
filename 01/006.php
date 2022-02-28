<?php require('002.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Revisación</title>
</head>
<body>
	<div>
		<h1>Centro de chequeo</h1>
		<a href="http://localhost/xampp/proyecto1/01/001.php">INICIO</a>
	</div>
	<?php
	$mq="SELECT * FROM precarga";
	$qr=mysqli_query($conn,$mq);
		while ($datos=mysqli_fetch_array($qr)) {
	?>
	<div>
	<tr>
		<?php
		$enfermedad1=$datos['enfermedades'];
		$sintoma=$datos['sintomas'];
		$id=$datos['id']; ?>
		<p>ENFERMEDAD: <?php echo $enfermedad1;?>
		<p>SINTOMAS: <?php echo $sintoma;?>
		<p>ID: <?php echo $id;?>&nbsp<form method="POST" action="007.php"><input type="password" name="aceptar" placeholder="Aceptar">&nbsp<input type="submit" name="enviar" value="<?php echo $id; ?>"></form></p>
	</tr>
	</div>
	<?php } ?>
</body>
</html>