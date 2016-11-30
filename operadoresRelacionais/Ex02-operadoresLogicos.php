<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="../_css/estilo.css"/>
<title>Operadores Logicos</title>
</head>
<body>
	<div>
		<?php
		/* Exercicio sobre operadores lógicos
		 * Mostrar se o eleitor é obrigado a votar ou não!
		 */
		
		$anoNascimento = $_GET["ano"];
		$idade = 2016 - $anoNascimento;
		echo "Quem nasceu em $anoNascimento tem idade de $idade<br />";
		
		//Utilizando operador logico "E"
		$tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
		echo  "E dessa forma seu voto e $tipo<br/ >"
		
		?>
	</div>
</body>
</html>