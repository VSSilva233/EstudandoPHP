<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="../_css/estilo.css"/>
<title>Operadores Relacionais/title>
</head>
<body>
<div>
	<?php
	/* Exercicio 01 de operadores relacionais
	 * Mostrar a situa��p de um aluno, de acordo com sua m�dia obtida.
	 */
	
	$notaUm = $_GET["n1"];
	$notaDois = $_GET["n2"];
	$media = ($notaUm+$notaDois)/2;
	echo "A media entre $notaUm e $notaDois e $media<br />";
	
	//Apresentando situa��o direto com concatena��o
	echo "A situacao do aluno e ".(($media<6)?"REPROVADO!<br />":"APROVADO!<br />");
	
	//Situa��o do aluno
	$situacao = ($media<6)?"REPROVADO!":"APROVADO!";
	echo "A situacao do aluno e $situacao <br />"
	?>
		
</div>
</body>
</html>