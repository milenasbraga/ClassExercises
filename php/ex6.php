<html>
	<head>
		<title>Exercício 06</title>
	</head>
	<body>
		<form action=ex6.php method="post">
			<table>
				<th> 
					<h3>Defina sua tabela toda coloridinha</h3>
				</th>
				<tr> 
					<td>Linhas: </td> 
					<td> <input type="number" name="linha" /><br /> </td>		
				</tr>
				<tr>
					<td>Coluna: </td>
					<td> <input type="number" name="coluna" /><br /> </td>
				</tr>
			</table>
			<input type="submit" name="submit" value=Montar tabela! />
		</form>
		<?php
			if (isset($_POST['linha']) && isset($_POST['coluna']))
			{
				$linha  = $_POST['linha'];
				$coluna = $_POST['coluna'];
				
				$letras = "0123456789ABCDEF";
				$cor    = "#";
				
				echo "<table>";
				for($i = 0; $i < $linha; $i++)
				{
					echo "<tr>";
					for($j = 0; $j < $coluna; $j++)
					{
						for($k = 0; $k < 6; $k++)
						{
							$index = rand(0,15);
							$cor .= $letras[$index];
						}
						echo "<td>", "<font color =" . $cor . "> ▓ </td> </font>"; 
						$cor = "#";
					}
					echo "</tr>";
				}
				echo "</table>";
			}
		?> 
	</body>
</html>
