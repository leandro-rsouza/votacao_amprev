<?php
	setcookie('voto_cont', $_SESSION['usuario_admin'], time() + 1);

	$result_processo = "UPDATE processos SET qnt_voto=qnt_voto + 1
	WHERE id ='".$_GET['id']."'"; 
	$resultado_processo = mysqli_query($conn, $result_processo);

	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<span style='color: green'>Voto recebido com sucesso!</span>";
		header("Location: painel.php");
	}else{
		$_SESSION['msg'] = "<span style='color: red'> Erro ao Votar!</span>";
		header("Location: painel.php");
	}
?>