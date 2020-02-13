<?php
	session_start();
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Amprev Votação </title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
</head>
<body style="font-family:Arial">
<p> <b style="font-size: 21pt"> AMPREV </b> <br> Amapá Previdência </p>
<hr> <br> <br> 	

<div>

<fieldset>
<h2 align="center"> LOGIN </h2>
<table align="center">
<form method="POST" action="login.php">
	<tr>	
		<td  align="right"> Usuário: </td>
		<td> <input type="text" name="usuario" size="10"> </td>
	</tr>

	<tr>
		<td align="right"> Senha: </td>
		<td> <input type="password" name="senha" size="10"> </td>
	</tr>

	<tr align="right">  
	  	<td> </td>
	  	<td> <input type="submit" name="Entrar" value="Entrar"> </td>
	</tr>
</form>
</table>

</fieldset>

</div>
</body>
</html>