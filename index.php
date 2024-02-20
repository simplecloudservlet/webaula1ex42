<!-- TODO1: PHP: POO: Crie uma classe MaterialEscolar e instancie objetos -->
<!-- TODO2: PHP: POO: Exiba objetos instanciados da classe MaterialEscolar em uma tabela. -->


<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

	<!-- TODO1 -->
	<?php

	echo '<h1>Comércio Eletrônico</h1>';

	class MaterialEscolar {

		private $nome;
		private $codigo;
		private $email;

		public function __construct($nome1, $codigo1, $email1){
			//A linguagem nao aceita 'variaveis nos parametros' de mesmo nome das 'variaveis de instancia'
			$this->nome = $nome1;
			$this->codigo = $codigo1;
			$this->email = $email1;
		}

		public function getDados(){
			return [$this->nome, $this->codigo, $this->email];
		}

		public function exibir(){
			//Eh necessario usar '$this' para metodos e variaveis
			$dados = $this->getDados();
			
			foreach($dados as $item){
				echo '<h2>' . $item . '</h2>';
			}
		}		
		public function getNome(){
			return $this->nome;
		}
		public function getCodigo(){
			return $this->codigo;
		}
		public function getEmail(){
			return $this->email;
		}

	}

	$lapis = new MaterialEscolar("Lápis", 111, "fornecedor111@utfpr.edu.br");
	//var_dump($lapis);	
	$borracha = new MaterialEscolar("Borracha", 222, "fornecedor222@utfpr.edu.br");
	$caneta = new MaterialEscolar("Caneta", 333, "fornecedor333@utfpr.edu.br");

	echo '<h1>...</h1>';
	/*$lapis->exibir();
	$borracha->exibir();
	$caneta->exibir();
	*/

	?>

	<!-- TODO2 -->
	<table border="1">
		<tr>
			<th>Produto</th>
			<th>Código</th>
			<th>E-mail do Fornecedor</th>
		</tr>
		 
			<?php
				$listaProdutos = [];
				array_push($listaProdutos, $lapis,$borracha,$caneta); 
				foreach($listaProdutos as $item){
					echo '<tr><td>' . $item->getNome() . '</td>';
					echo '<td>' . $item->getCodigo() . '</td>';
					echo '<td>' . $item->getEmail() . '</td></tr>';
				}
			?>
		
	</table>



</body>

</html>