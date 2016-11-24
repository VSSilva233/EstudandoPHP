<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../_css/estilo.css"/>
		<title>Operadores em PHP</title>
	</head>
<body>
	<div>
		<?php
		$num1 = 18;
		$num2 = 10;
		
		
		//Soma
		//Exemplo Um
		$resultado = $num1 + $num2;
		echo "A soma entre $num1 e $num2 e igual a $resultado<br />";
		
		//Exemplo Dois
		echo "A soma vale ".($num1+$num2)."<br />";
		
		//Subtracao
		echo "A subtracao vale ".($num1-$num2)."<br />";
		
		//Multiplicacao
		echo "A multiplicacao vale ".($num1*$num2)."<br />";
		
		//Divisao
		echo "A divisao vale ".($num1/$num2)."<br />";
		
		//Modulo
		echo "O modulo vale ".($num1%$num2)."<br />";
		
		//Media
		$media = ($num1 + $num2) / 2;
		echo"<br /> A media vale $media";
		
		
		
		
		?>
		
	</div>
</body>
</html>