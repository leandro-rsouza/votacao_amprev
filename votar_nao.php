<?php
session_start();
include_once("conexao.php");
//Verificar se está vindo a variável id pela URL
if(isset($_GET['id'])){
	if(isset($_COOKIE['voto_cont'])){
		$_SESSION['msg'] = "<span style='color: red'>Você já votou!</span>";
		header("Location: votar.php");
	}else{
	include_once("voto_cont.php");
	$result = "UPDATE processos SET qnt_voto_nao=qnt_voto_nao + 1
	WHERE id ='".$_GET['id']."'"; 
	$resultado = mysqli_query($conn, $result);
	}
}