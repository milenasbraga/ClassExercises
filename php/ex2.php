<html>
	<head>
		<title>Exercício 02</title>
	</head>
	<body>
		<form action=ex2.php method="post">
			<table>
				<th>
					<h3>
						Ordene 3 números
					</h3>
				</th>
				<tr> 
					<td>Números: </td> 
					<td> <input type="number" name="numero1" /><br /> </td>							
				</tr>
					<tr> 
					<td> </td> 
					<td> <input type="number" name="numero2" /><br /> </td>		
				</tr>
				<tr> 
					<td> </td> 
					<td> <input type="number" name="numero3" /><br /> </td>		
				</tr>
			</table>
			<input type="submit" name="submit" value=Ordenar! />
		</form>
		
		<?php
			if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']))
			{
				$number1 = $_POST['numero1'];
				$number2 = $_POST['numero2'];
				$number3 = $_POST['numero3'];
				
				echo "<table>";
				if ($number1 < $number2){;
					if($number2 < $number3)
					{
						echo "<tr> <td> Primeiro termo: </td> <td>" . $number1 . "</td> </tr>" ;
						echo "<tr> <td> Segundo termo: </td> <td>" . $number2 . "</td> </tr>" ;
						echo "<tr> <td> Terceiro termo: </td> <td>" . $number3 . "</td> </tr>" ;
					}
					else if($number1 < $number3)
					{
						echo "<tr> <td> Primeiro termo: </td> <td>" . $number1 . "</td> </tr>" ;
						echo "<tr> <td> Segundo termo: </td> <td>" . $number3 . "</td> </tr>" ;
						echo "<tr> <td> Terceiro termo: </td> <td>" . $number2 . "</td> </tr>" ;
					}
					else
					{
						echo "<tr> <td> Primeiro termo: </td> <td>" . $number3 . "</td> </tr>" ;
						echo "<tr> <td> Segundo termo: </td> <td>" . $number1 . "</td> </tr>" ;
						echo "<tr> <td> Terceiro termo: </td> <td>" . $number2 . "</td> </tr>" ;
					}
				}
				else {
					if($number2 < $number3){
						if ($number1 < $number3)
						{
							echo "<tr> <td> Primeiro termo: </td> <td>" . $number2 . "</td> </tr>" ;
							echo "<tr> <td> Segundo termo: </td> <td>" . $number1 . "</td> </tr>" ;
							echo "<tr> <td> Terceiro termo: </td> <td>" . $number3 . "</td> </tr>" ;
						}
						else
						{	
							echo "<tr> <td> Primeiro termo: </td> <td>" . $number2 . "</td> </tr>" ;
							echo "<tr> <td> Segundo termo: </td> <td>" . $number3 . "</td> </tr>" ;
							echo "<tr> <td> Terceiro termo: </td> <td>" . $number1 . "</td> </tr>" ;
						}
					}
					else
					{
						echo "<tr> <td> Primeiro termo: </td> <td>" . $number3 . "</td> </tr>" ;
						echo "<tr> <td> Segundo termo: </td> <td>" . $number2 . "</td> </tr>" ;
						echo "<tr> <td> Terceiro termo: </td> <td>" . $number1 . "</td> </tr>" ;
					}
				}
				echo "</table>";
			}
		?> 
	</body>
</html> 
