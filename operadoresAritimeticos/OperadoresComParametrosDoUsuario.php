<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../_css/estilo.css"/>
		<title>Operadores em PHP</title>
	</head>
<body>
	<div>
		<?php
		/*Enviado Parametros do Usuario atraves da URL(GET)
		Exemplo de URL: 
		http://localhost/EstudandoPHP/operadoresAritimeticos/OperadoresComParametrosDoUsuario.php?num1=20&num2=10 
		Parametros localizado no final da url em ?num1=20&num2=10
		*/
		$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];
		
		echo"<h2>Valores recebidos: $num1 e $num2</h2>";
		
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