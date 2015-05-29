<html>
	<head>
		<title>Aula 02</title>
	</head>
	<body>
		
		<form name="form" action="Exercicio01.php" method="post">
				Usuario: <input type="text" name="user">
				<input type="submit" name="enviar" value="Enviar">
		</form>
		
		<?php
			date_default_timezone_set('America/Sao_Paulo');
			$hora = date('H');
			$minutos = date('i');
			$user = "Pelé";
			
			if($user == "Pelé" && $hora == 23 && $minutos == 00){
				echo "Boa noite Pelé !";
			}else{
				if($user == "Pelé" && $hora == 09 && $minutos == 34){
					echo "Bom dia Pelé !";
				}else{
					echo "funcionou";
				}
			}			
		
		?>
		
	</body>
</html>