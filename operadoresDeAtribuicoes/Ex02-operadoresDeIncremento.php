<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="../_css/estilo.css"/>
<title>Operadores de incremento</title>
</head>
<body>
<div>
	<?php
	/*Exercicio 02, sobre operadores de incremento
	 Mostrar qual foi o ano anterior e posterior ao ano atual!
	*/
	$anoAtual = $_GET["ano"];
	echo "<br />O ano atual e $anoAtual";
	
	//Ano anterior (decremento)
	echo"<br />Ano anterior e " . --$anoAtual;
	
	//Ano posterior (incremento)
	echo"<br />Ano superior e " . ++$anoAtual;
	
	
	?>
		
</div>
</body>
</html>