<?php
	session_start();
	if(isset($_POST['jugada1'])){
		if($_SESSION['saldo']<10){
			Header('Location:index.php?er=2');
			exit();
		}
		if($_POST['jugada1']==$_POST['jugada2'] || $_POST['jugada1']==$_POST['jugada3'] || $_POST['jugada3']==$_POST['jugada2']){
			Header('Location:index.php?er=1');
			exit();
		}
		$_SESSION['jugada1']=$_POST['jugada1'];
		$_SESSION['jugada2']=$_POST['jugada2'];
		$_SESSION['jugada3']=$_POST['jugada3'];
		Header('Location:jugar.php');
	}
	
	
	
?>