<!-- TODO1: PHP: POO: Ilustre um exemplo de Heranca-->


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
			return [$this->nome, $this->codigo, $this->email, $this->getCor(), $this->getTamanho()];
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

	final class Produto extends MaterialEscolar {

		private $cor;
		private $tamanho;
		public function __construct($nome1, $codigo1, $email1, $cor1, $tamanho1){

			//Construtor da superclasse
			parent::__construct($nome1, $codigo1, $email1);

			$this->cor = $cor1;
			$this->tamanho = $tamanho1;
		}
		public function getCor(){
			return $this->cor;
		}
		public function getTamanho(){
			return $this->tamanho;
		}

	}


	echo '<h1>...</h1>';

	?>

	<!-- TODO2 -->
	<table id="tabela">
		<tr>
			<th>Produto</th>
			<th>Código</th>
			<th>E-mail do Fornecedor</th>
			<th>Cor</th>
			<th>Tamanho</th>
		</tr>
		 
			<?php
				$listaProdutos = [];

				//Polimorfismo
				$produto = new Produto("Lápis", 111, "fornecedor111@utfpr.edu.br","preto","10");
				array_push($listaProdutos, $produto);
				
				$produto = new Produto("Borracha", 222, "fornecedor222@utfpr.edu.br","verde","20");
				array_push($listaProdutos, $produto);

				$produto = new Produto("Caneta", 333, "fornecedor333@utfpr.edu.br", "azul", "30");
				array_push($listaProdutos, $produto);

				foreach($listaProdutos as $item){
					echo '<tr><td>' . $item->getNome() . '</td>';
					echo '<td>' . $item->getCodigo() . '</td>';
					echo '<td>' . $item->getEmail() . '</td>';
					echo '<td>' . $item->getCor() . '</td>';
					echo '<td>' . $item->getTamanho() . '</td></tr>';
				}
			?>
		
	</table>



</body>

</html>