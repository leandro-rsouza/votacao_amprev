<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Amprev Votação </title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
</head>
<body>

<div style="border: 1; border-color: black;">
<?php
	if(isset($_SESSION['incorret'])){
		echo "<p align='center'>" .$_SESSION['incorret']. "</p>";
		unset($_SESSION['incorret']);
	}
?>
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

</div>
</body>
</html>