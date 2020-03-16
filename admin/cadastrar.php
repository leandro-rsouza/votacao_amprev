<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Cadastro </title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
</head>

<fieldset>
	<?php
		if(isset($_SESSION['status_cadastro'])){
			echo "<p align='center'>" .$_SESSION['status_cadastro']. "</p>";
			unset($_SESSION['status_cadastro']);
		}
		else if(isset($_SESSION['usuario_existe'])){
			echo "<p align='center'>" .$_SESSION['usuario_existe']. "</p>";
			unset($_SESSION['usuario_existe']);
		}
	?>
<h2 align="center"> Cadastro de Usuários </h2>
	<table align="center">
	<form method="post" action="cadastro.php">
		<tr align="right">
			<td> Nome Completo: </td>
			<td> <input type="text" name="nome"> </td>
		</tr>
		<tr align="right">
			<td> Usuário: </td>
			<td> <input type="text" name="usuario"> </td>
		</tr>

		<tr align="right">
			<td> Senha: </td>
			<td> <input type="password" name="senha"> </td>
		</tr>
		<tr align="right">  
			<td> </td>
		  	<td> <input type="reset" name="Limpar" value="Limpar">
		 	<input type="submit" name="Enviar" value="Enviar"> </td>
		</tr>
	</form>
	</table>
	<p align="right"> <a href="painel.php"> Voltar </a></p>
</fieldset>
</body>
</html>