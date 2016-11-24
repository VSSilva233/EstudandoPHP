<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../_css/estilo.css"/>
		<title>Funções Matemáticas</title>
	</head>
<body>
	<div>
		<?php
		$v1 = $_GET["x"];
		$v2 = $_GET["y"];
		echo"<h2> Valores recebidos: $v1 e $v2</h2>";
		
		//Função ABS(valor absoluto)
		echo"O valor absoluto de $v2 e " . abs($v2);
		
		//Função POW(potenciação)
		echo"<br />O valor da potencia $v1<sup>$v2</sup> e " . pow($v1,$v2);
		
		//Função SQRT(Raiz quadrada)
		echo"<br />A raiz de $v1 e " . sqrt($v1);
		
		//Funç
		?>
		
	</div>
</body>
</html>