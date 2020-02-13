<?php
session_start();
include_once("conexao.php");
include_once("verify_login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title> Votacao </title>
	</head>
	<body>
		<h1 style="font-family:Arial"> Lista de Processos em Votação </h1>
		<a href='cadastrar_votacao.php'> Cadastrar Processo de Votação </a>
		<a href='cadastrar.php'> Cadastrar Usuario Administrador </a><br><br><hr>
		<?php
		echo "<h3>" .$_SESSION['usuario_admin']. "</h3>";
		echo "<a href='logout.php'> Sair </a>";
		//Pesquisar os processos
		if(isset($_SESSION['msg'])){
			echo "<br>" .$_SESSION['msg']."<br> <br>";
			unset($_SESSION['msg']);
		}
		$result_processo = "SELECT * FROM processos";
		$resultado_processo = mysqli_query($conn, $result_processo);
		
		while($row_processo = mysqli_fetch_assoc($resultado_processo)){
		echo "<table border='1' cellpadding='7' cellspacing='0' align='center'  style='font-family:Arial; font-size: 12pt'>";
		echo "<tr  align='center'  height='50'>";	
			echo "<td> Número do Processo:  </td>";
			echo "<td> Processo em Votação:  </td>";
			echo "<td> Sim: </td>";
			echo "<td> Não: </td>";
			echo "<td> Abstenções: </td>";
			echo "<td> Quantidade de Votos: </td>";
		echo "</tr>";

		echo "<tr align='center' height='60'>";
			echo "<td width='50'>" .$row_processo['id']. "</td>";
			echo "<td width='280' align='justify'>" 
			.$row_processo['nome']. "</td>";
			echo "<td width='75'>" .$row_processo['qnt_voto_sim']. "</td>";
			echo "<td width='75'>" .$row_processo['qnt_voto_nao']. "</td>";
			echo "<td width='75'>" .$row_processo['abstencoes']. "</td>";
			echo "<td width='50'>" .$row_processo['qnt_voto']. "</td>";
		echo "</tr>";
		echo "</table> <br>";

		echo "<table align='center' cellpadding='3' cellspacing='0' style='font-family:Arial; font-size: 12pt'>";
		echo "</tr>";
			echo " <th> Votar: </th>";
			echo " <td> <a href='votar_sim.php?id=".$row_processo['id']."'> Sim </a> </td>";
			echo " <td> <a href='votar_nao.php?id=".$row_processo['id']."'> Não </a> </td>";
			echo " <td> <a href='votar_abs.php?id=".$row_processo['id']."'> Abstenção </a> </td>";
		echo "</tr>";
		echo "</table> <br> <hr>";
		}
		?>
	</body>
</html>