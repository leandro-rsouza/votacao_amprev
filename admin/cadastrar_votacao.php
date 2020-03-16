<?php
session_start();
include_once("conexao.php");
include_once("verify_login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title> Cadastro </title>
</head>
<body>
	<h1> Cadastrar Processo de Votação </h1> <hr>
<fieldset>

	<?php
		if(isset($_SESSION['cadastrado'])){
			echo "<p align='center'> " .$_SESSION['cadastrado']." </p>";
			unset($_SESSION['cadastrado']);
		}
	?>
	
<table  align="center" style="font-family:Arial">
	<form method="POST" action="cadastro_votacao.php"> 
	<tr>  
	  <td> <p> Nome da Processo: </p> </td>
	</tr>

	<tr>
	<td>
	   <textarea name="nome_votacao" cols="50" rows="5" align="justify" 
	   style='text-transform: capitalize'> </textarea>
	</td>
	</tr>

	<tr>  
	  <td align="right"> Quantidade Total de Votos: 
	  <input type="number" name="total_votos" min="1" max="99"> </td> 
	</tr>

	<tr align="right">  
	  <td> <input type="reset" name="Limpar" value="Limpar">
	  <input type="submit" name="Enviar" value="Enviar"> </td>
	</tr>
	</form>
</table> 

<p align="right"> <a href="painel.php"> Voltar </a> </p>

</fieldset>
</body>
</html>
