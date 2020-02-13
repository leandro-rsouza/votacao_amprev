<?php
session_start();
include_once("conexao.php");
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
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		//Pesquisar os processos
		$result_processo = "SELECT * FROM processos";
		$resultado_processo = mysqli_query($conn, $result_processo);
		
		while($row_processo = mysqli_fetch_assoc($resultado_processo)){
		echo "<table border='1' cellpadding='7' cellspacing='0' align='center'  style='font-family:Arial; font-size: 12pt'>";
		echo "<tr  align='center'  height='50'>";	
			echo "<th> Número do Processo:  </th>";
			echo "<th> Processo em Votação:  </th>";
		echo "</tr>";

		echo "<tr align='center' height='60'>";
			echo "<td width='50'>" .$row_processo['id']. "</td>";
			echo "<td width='280' align='justify' style='text-transform: capitalize'>" 
			.$row_processo['nome']. "</td>";
		
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