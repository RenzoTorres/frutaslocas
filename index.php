<!DOCTYPE html>
<?php
	session_start();
	$mensaje='';
	if(isset($_GET['er'])){
		if($_GET['er']==1){
			$mensaje='Debe seleccionar frutas diferentes';
		}
		if($_GET['er']==2){
			$mensaje='Usted se quedó sin saldo :/';
		}
	}
	if(isset($_SESSION['saldo'])){
		$saldo=$_SESSION['saldo'];
	}
	else{
		$saldo=100;
		$_SESSION['saldo']=$saldo;
	}
?>

<html>
<h1> Adivina las frutas! </h1>
Saldo: <?php echo $saldo ?>
<form action="validar.php" method="post">
	<select name="jugada1">
		<option value="1">Naranja</option>
		<option value="2">Papaya</option>
		<option value="3">Manzana</option>
		<option value="4">Durazno</option>
		<option value="5">Kiwi</option>
		<option value="6">Sandia</option>
		<option value="7">Pera</option>
		<option value="8">Piña</option>
		<option value="9">Mandarina</option>
		<option value="10">Limon</option>
	</select>
	<select name="jugada2">
		<option value="1">Naranja</option>
		<option value="2">Papaya</option>
		<option value="3">Manzana</option>
		<option value="4">Durazno</option>
		<option value="5">Kiwi</option>
		<option value="6">Sandia</option>
		<option value="7">Pera</option>
		<option value="8">Piña</option>
		<option value="9">Mandarina</option>
		<option value="10">Limon</option>
	</select>
	<select name="jugada3">
		<option value="1">Naranja</option>
		<option value="2">Papaya</option>
		<option value="3">Manzana</option>
		<option value="4">Durazno</option>
		<option value="5">Kiwi</option>
		<option value="6">Sandia</option>
		<option value="7">Pera</option>
		<option value="8">Piña</option>
		<option value="9">Mandarina</option>
		<option value="10">Limon</option>
	</select>

	<input type="submit" ></br>
	<b><?php echo $mensaje ?></b>
	
</form>
</html>