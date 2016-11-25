<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../_css/estilo.css"/>
		<title>Operadores de Atribuição</title>
	</head>
<body>
	<div>
		<?php
		/*Exercicio 01, sobre operadores de atribuições
		Receber preco do produto e dar aumento de 10% no valor dele!
		*/
		$preco = $_GET["preco"];
		echo "O preco do produto recebido e R$ " . number_format($preco, 2);
		
		//Exemplo sem operador
		$preco = $preco + ($preco*10/100);
		echo "<br /> E o novo preco com 10% de aumento sera R$ " . number_format($preco, 2);
		
		//Exemplo Aumento com operador
		$preco += $preco*10/100;
		echo "<br /> E o novo preco com 10% de aumento sera R$ " . number_format($preco, 2);
		
		//Exemplo Desconto com operador
		$preco -= $preco*10/100;
		echo "<br /> E o novo preco com 10% de desconto sera R$ " . number_format($preco, 2);
		
		?>
		
	</div>
</body>
</html>