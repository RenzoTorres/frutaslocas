<!DOCTYPE html>
<?php
	session_start();
	$jugada=array();
	$jugadapc=array();
	$jugada[1]=$_SESSION['jugada1'];
	$jugada[2]=$_SESSION['jugada2'];
	$jugada[3]=$_SESSION['jugada3'];
	$saldo=$_SESSION['saldo'];
	$jugadapc=array('1','2','3','4','5','6','7','8','9','10');
	shuffle($jugadapc);
	$aciertos=0;
	$frutasganadoras=array();
	$frutas=array('','Naranja','Papaya','Manzana','Durazno','Kiwi','Sandia','Pera','Piña','Mandarina','Limon');
	
	if($saldo<10){
		Header('Location:index.php?er=2');
		exit();
	}
	for($j=1;$j<=3;$j++){
		for($i=1;$i<=3;$i++){
			if($jugada[$j]==$jugadapc[$i]){
				$aciertos=$aciertos+1;
				$frutasganadoras[$aciertos]=$frutas[$jugada[$j]];
			}
		}
	}
	$saldo=$saldo-10;
	if($aciertos==2){
		$saldo=$saldo+30;
	}
	if($aciertos==3){
		$saldo=$saldo+50;
	}
	$_SESSION['saldo']=$saldo;
?>
<html>
<body>
	</br>
	<p>Usted jugó:</p>
	<?php echo $frutas[$jugada[1]] ?> </br>
	<?php echo $frutas[$jugada[2]] ?> </br>
	<?php echo $frutas[$jugada[3]] ?> </br>
	<p>La computadora jugó:</p>
	<?php echo $frutas[$jugadapc[1]] ?> </br>
	<?php echo $frutas[$jugadapc[2]] ?> </br>
	<?php echo $frutas[$jugadapc[3]] ?> </br>
	<p>Usted acertó: <?php echo $aciertos ?></p>
	<?php
	for($i=1;$i<=$aciertos;$i++){
		echo $frutasganadoras[$i];?>***</br><?php
	}
	?>
	<p>Saldo restante: <?php echo $saldo ?> </p>
	<a href="index.php">Volver a jugar</a>
</body>
</html>