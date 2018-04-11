<html>
	<?php
	
		session_start();
	
	?>
	<head>
		<title>Index</title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "estilos.css" />
	</head>
	<body>
		<img src = "img/bambam.jpg" />
		<h1>BANCO BONDE DA STRONDA</h1>
		<img  src = "img/leo.jpg" />
<?php
	if(isset($_SESSION["login"])){
		echo '<a id = "sair" href = "sair.php">Logout</a>';
	}
?>
