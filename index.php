<?php
	$titulo = "BONDE DA STRONDA";

	include("cabecalho.php");
	
	if(!isset($_SESSION["login"])){
?>
		<h2>Acesse sua Conta!</h2>
		<div id = "form">
		
		<form action = "autenticacao.php" method = "post" >
		
			<label>
				Email:
			<input type = "text" name = "email" required = "required" />
			</label><br />
			<label>
				Senha:
			<input type = "password" name = "senha" required = "required" />
			</label><br />
			<label>
			<input type = "submit" value = "Logar!" />
			</label><br />
			<p>Não possui conta? <a id = "a" href = "cadastro.php">Cadastre-se</a></p>
		
		</form>

<?php
	}else{
		header("location: mostra_cliente.php");
	}

	include("rodape.php");
?>