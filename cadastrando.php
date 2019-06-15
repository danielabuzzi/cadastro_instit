<html>
<body>
<?php

//conexao externa com o banco

$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname, $user, $password, $database) or die (mysqli_error());


if(!$conexao){
	print "falha na conexão com o banco";
}

?>

<?php
//recuperar todos os dados digitados no cadastro

include_once("cadastro.html");

$nome=$_POST['nome'];
$cnpj=$_POST['cnpj'];
$tipo_inst=$_POST['tipo_inst'];
$logradouro=$_POST['logradouro'];
$cep=$_POST['cep'];
$descri=$_POST['descri'];
$quant_abrig=$_POST['quant_abrig'];
$email=$_POST['email'];
$nome_resp=$_POST['nome_resp'];
$cpf=$_POST['cpf'];

//insira na tabela instituicao nos campos nomeInst, cnpj os valores que estao vindo das variaveis

//$sql = mysql_query("INSERT INTO instituicao(nome,cnpj)
//VALUES('$nomeInst','$cnpj')");

//OU FAZER DESSE JEITO:
$sql = "INSERT INTO instituicao(nome,cnpj) VALUES ('$nome','$cnpj')";
$salvar = mysqli_query($conexao,$sql);

echo "Cadastrado com sucesso!"
?>
</body>
</html>