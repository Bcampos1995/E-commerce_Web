<?php 

include 'conecta_mysql.inc';

$nome 			 = $_POST['nome'];
$sobrenome 		 = $_POST['sobrenome'];
$email  	 	 = $_POST['email'];
$telefone  		 = $_POST['telefone'];
$senha  	 	 = $_POST['senha'];

$sql = "INSERT INTO Cadastro VALUES";
$sql .= "('$nome','$sobrenome', '$email', '$telefone', '$senha')";

if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

