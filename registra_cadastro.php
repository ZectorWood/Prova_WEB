<?php
	if(isset($_POST["nome"])){

		$arquivo = "clientes.xml";
	
		if(!file_exists("clientes.xml")){
			$fp = fopen($arquivo,"w");
			
			$conteudo_inicial = '<?xml version = "1.0"?><clientes></clientes>';
			
			fwrite($fp,$conteudo_inicial);
			
			fclose($fp);
		}
		
		$xml = simplexml_load_file($arquivo);
		
		foreach($xml->cliente as $cliente){
			
			if(str_replace(" ","",$cliente->email)==str_replace(" ","",$_POST["email"])){
				die('Email ja cadastrado! <a href = "cadastro.php">Cadastrar Novamente</a>');
			}
		}
		
		$cpf = $_POST["cpf"];
		$num_digitos_cpf = strlen($cpf);
		
		if(is_numeric($cpf) && $num_digitos_cpf == 11){
		
			if(str_replace(" ","",$cliente->cpf)==str_replace(" ","",$_POST["cpf"])){
				die('CPF ja existente!<a id = "a" href = "cadastro.php">Cadastrar Novamente</a>');
			}
		
			$nova_posicao = sizeof($xml->cliente);
			
			$xml->cliente[$nova_posicao]->nome = $_POST["nome"];
			$xml->cliente[$nova_posicao]->email = $_POST["email"];
			$xml->cliente[$nova_posicao]->senha = $_POST["senha"];
			$xml->cliente[$nova_posicao]->cpf = $_POST["cpf"];
			$xml->cliente[$nova_posicao]->saldo = 0;
			
			$xml->asXML($arquivo);
		}else{
			die('Quantidade de numeros invalida!<a id = "a" href = "cadastro.php">Tente Novamente</a>');
		}
	}
		header("location: index.php");

?>
	</body>