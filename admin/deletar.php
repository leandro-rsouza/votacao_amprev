<?php
session_start();
include_once("conexao.php");
	$result = "DELETE FROM processos WHERE id = '".$_GET['id']."'";
	$apagar = mysqli_query($conn, $result);

	if(mysqli_affected_rows($conn)){
		$_SESSION['apagado'] = "<span style='color: green'> Processo de Votação Deletado! </span>";
		header("Location: painel.php");
	}else{
		$_SESSION['apagado'] = "<span style='color: red'> Erro Ao Deletar Processo! </span>";
		header("Location: painel.php");
	}
?>