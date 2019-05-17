<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro realizado com sucesso!</title>
</head>
<body>
<?php phpinfo() ?>

<?php require_once 'config.php'; ?>
<?php
$os = $_POST["os"];
$cliente = $_POST["cliente"];	//atribuição do campo "email" vindo do formulário para variavel
$tipo = $_POST["tipo"];	//atribuição do campo "ddd" vindo do formulário para variavel
$operacao = $_POST["operacao"];
$status = $_POST["status"];	//atribuição do campo "telefone" vindo do formulário para variavel
$doca = $_POST["doca"];
$dia = $_POST["dia"];
$entrada = $_POST["entrada"];	//atribuição do campo "cidade" vindo do formulário para variavel
$saida	= $_POST["saida"];	//atribuição do campo "estado" vindo do formulário para variavel
$insere = mysql_query("INSERT INTO pcm (`cliente`,`os`, `tipo`, `operacao`, `status`, `doca`, `dia`, `entrada`, `saida`)
VALUES('$cliente','$os','$tipo', '$operacao', '$status','$doca','$dia','$entrada','$saida')");
if($insere)
{
        echo 'Dados Inseridos Com Sucesso.';
}
else{
        echo 'Não Foi Possivel Inserir seus dados.';
}

?>
</body>
</html>
