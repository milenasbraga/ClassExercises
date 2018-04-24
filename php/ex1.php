<html>
	<head>
		<title>Exercício 01</title>
	</head>
	<body> 
	
		<form action=ex1.php method="post">
			<table>
				<tr> 
					<td>Valor Inicial: </td> 
					<td> <input type="number" name="inicio" /><br /> </td>		
				</tr>
				<tr>
					<td>Valor Final: </td>
					<td> <input type="number" name="fim" /><br /> </td>
				</tr>
			</table>
			<input type="submit" name="submit" value=Contar! />
		</form>
		
		<?php
			if (isset($_POST['inicio']) && isset($_REQUEST['fim']))
			{
				$a = $_POST['inicio'];
				$b = $_REQUEST['fim'];
				echo "Valor inicial: $a <br>" ;
				echo "Valor final: $b <br>" ;
				
				if ($a > $b)
					echo"<br><b>Erro!</b> Valor inicial maior que valor final";
				else {
					while ($a <= $b)
					{
						echo "<br>Mostrando " .$a;
						$a++;
					}
				}
			}
		?>
		
	</body>
</html> 
