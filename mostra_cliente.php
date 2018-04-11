<?php
	$titulo = "DADOS DA CONTA";

	include("cabecalho.php");
	
	$arquivo = "clientes.xml";
?>
		<h2>BANCO BONDE DA STRONDA</h2>

<?php	
	if(file_exists($arquivo)){
		
		$xml = simplexml_load_file($arquivo);
		
		foreach($xml->cliente as $cliente){
			if(str_replace(" ","",$cliente->nome) == str_replace(" ","",$_SESSION['login'])){
				
				echo"<div id = 'alinha'><span>Nome :" . $cliente->nome . "</span><br/>";
				
				echo"<span>Email :" . $cliente->email . "</span><br/>";
				
				echo"<span>CPF :" . $cliente->cpf . "</span><br/>";
				
				if($cliente->saldo>0){

					echo"<span style = 'color: lightgreen;'>Saldo :" . $cliente->saldo . "</span></div><br/>";
				}else{
					echo"<span>Saldo :" . $cliente->saldo . "</span></div><br/>";
				}
				break;
				
			}
		}
	?>
			
			<div id = "form">
			<form action = "realiza_operacoes.php" method = "post">
			
				<label id = "teste">
					Fazer saque
					<input id = "teste2" type = "number" name = "saque"/>
				</label>
				
				<input type = "submit" value = "Sacar!"/>
			</form>
				
			<form action = "realiza_operacoes.php" method = "post">	
				<label id = "teste">
					Fazer depósito
					<input id = "teste2" type = "number" name = "deposito"/>
				</label>
				
				<input type = "submit" value = "Depositar!" />
				
			</form>
			
<?php
			if(sizeof($xml->cliente)>1){
?>
			
				<form action = "realiza_operacoes.php" method = "post">			
					<label id = "teste">
						Tranferir
						<input id = "teste2" type = "number" name = "transferencia"/>
					</label>
					<label id = "teste">
						Para
						<select id = "teste2" name = "recebedor">
						
							<?php
							
								foreach($xml->cliente as $cliente){ 
								
									if(str_replace(" ","",$cliente->nome) != str_replace(" ","",$_SESSION['login'])){
								
								?>
									
										<option><?=$cliente->nome;?></option>
									
							<?php
									}
								}
							?>
						
						</select>
					</label>
					
					<input type = "submit" value = "Tranferir!"/>

				</form>
				</div>
<?php
			}
?>
			<br />
		
<?php

		}
	include("rodape.php");
?>
