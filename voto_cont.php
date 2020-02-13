<?php

	setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() + 1);

	$result_processo = "UPDATE processos SET qnt_voto=qnt_voto + 1
	WHERE id ='".$_GET['id']."'"; 
	$resultado_processo = mysqli_query($conn, $result_processo);
	
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<span style='color: green'>Voto recebido com sucesso!</span>";
		header("Location: votar.php");
	}else{
		$_SESSION['msg'] = "<span style='color: red'> Erro ao votar! </span>";
		header("Location: votar.php");
	}
	
?>