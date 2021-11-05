<?php  
//echo "Hello World!";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>CRUD - Cadastrar</title>
</head>
<body>
	<h1>Cadastrar Usuário</h1>
	<?php
	if(isset($_SESSION['msg']))
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	?>
	<form method="POST" action="processa.php">
		<label>Nome: </label>
		<input type="name" name="nome" placeholder="Digita o nome completo"><br><br>

		<label>Email: </label>
		<input type="email" name="email" placeholder="Digita o seu email"><br><br>
 
		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>
