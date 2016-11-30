<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="../_css/estilo.css"/>
<title>Operadores Relacionais</title>
</head>
<body>
	<div>
		<?php
		
		//Operador Unário
		$num1 = $_GET["n1"];
		$num2 = $_GET["n2"];
		$tipo = $_GET["opcao"];
		echo"Os valores foram $num1 e $num2 <br />";
		//Se tipo igual a soma então some, senão multiplique
		$resultado = ($tipo == "soma")?$num1+$num2:$num2*$num1;
		echo"O resultado sera $resultado <br />";
		
		//Igual e identico
		$a = 3;
		$b = "3";
		
		//Igual(==)
		$resultado = ($a == $b)?"SIM":"NAO";
		echo"As variaveis A e B sao iguais?  $resultado <br />";
		
		//Identico(===)
		$resultado = ($a === $b)?"SIM":"NAO";
		echo"As variaveis A e B sao identicas?  $resultado <br />";
		?>
	</div>
</body>
</html>