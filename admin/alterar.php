<?php
include_once("conexao.php");
	$result = "SELECT * FROM processos WHERE = '".$_GET['id']."'";
	$consultar = mysqli_query($conn, $result);

	$resultado = mysqli_fetch_assoc($consultar);

echo "<table  align='center' style='font-family:Arial'>";
	echo "<form method='POST' action='cadastro_votacao.php'>"; 
	echo "<input type='hidden' name='id' value='".$resultado['id']."'>";

	echo "<tr>";  
	  echo "<td> <p> Nome da Processo: </p> </td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>";
	   echo "<textarea name='nome_votacao' cols='50' rows='5' align='justify' 
	   style='text-transform: capitalize' value='".$resultado['nome']."'> </textarea>";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";  
	  echo "<td align='right'> Quantidade Total de Votos: 
	  <input type='number' name='total_votos' min='1' max='99' 
	  	value='".$resultado['qnt_voto']."'> </td>"; 
	echo "</tr>";

	echo "<tr align='right'>";  
	  echo "<td> <input type='reset' name='Limpar' value='Limpar'>
	  <input type='submit' name='Enviar' value='Enviar'> </td>";
	echo "</tr>";
	echo "</form>";
echo "</table>"; 

echo "<p align='right'> <a href='painel.php'> Voltar </a> </p>";

?>