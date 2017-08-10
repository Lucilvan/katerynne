<?php
	//function cadastrar(){
		$hostname_MySql = "us-cdbr-iron-east-05.cleardb.net";  // Servidor
		$database_MySql = "heroku_c727691b4562fa0"; // banco de dados
		$username_MySql = "b9a404ee30fcc5"; // Usuario
		$password_MySql = "5201fd8c";  // senha
		/*$hostname_MySql = "localhost";  // Servidor
		$database_MySql = "clienteskaterynnebruzzi"; // banco de dados
		$username_MySql = "root"; // Usuario
		$password_MySql = "";  // senha*/
		$con=mysqli_connect($hostname_MySql,$username_MySql,$password_MySql,$database_MySql);

		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		// escape variables for security
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$dtNasc = $_POST['dtNasc'];
		$bairro = $_POST['bairro'];

		$sql="INSERT INTO clientes (nome, telefone, dtNasc, bairro)
		VALUES ('$nome', '$telefone', '$dtNasc', '$bairro')";

		if (!mysqli_query($con,$sql)) {
		  die('Error: ' . mysqli_error($con));
		}
		echo "Cliente cadastrado com sucesso!";
		header("Location: site.html");
		mysqli_close($con);
	//}
?>