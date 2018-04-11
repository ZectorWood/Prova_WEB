<html>
	<?php
	
		session_start();
		
		if(isset($titulo)&&$titulo=="DADOS DA CONTA"){
?>
		<head>
			<title><?=$titulo;?></title>
			<meta charset = "UTF-8" />
			<link rel = "stylesheet" type = "text/css" href = "estilos.css" />
		</head>
		<body>
				<div id = "contorno">
<?php		
			if(isset($_SESSION["login"])){
				echo '<a id = "sair" href = "sair.php">Logout</a>';
			}
			
		}else{
	?>
	<head>
		<title><?=$titulo;?></title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "estilos.css" />
	</head>
	<body>
		<section id = "fundo">
		<section>
		<img src = "img/bambam.jpg" align = "left" />
		</section>
		<section>
		<img  src = "img/leo.jpg" align = "right" />
		</section>
		<h1>BANCO BONDE DA STRONDA</h1>
		
<?php
			
		}
?>
