<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro realizado com sucesso!</title>
</head>
<body>
<script>
window.location.href = '/cadastro';
</script>
<?php require_once 'config.php'; ?>
<?php
$os = $_POST["os"];
$cliente = $_POST["cliente"];	//atribui��o do campo "email" vindo do formul�rio para variavel
$tipo = $_POST["tipo"];	//atribui��o do campo "ddd" vindo do formul�rio para variavel
$operacao = $_POST["operacao"];
$status = $_POST["status"];	//atribui��o do campo "telefone" vindo do formul�rio para variavel
$doca = $_POST["doca"];
$dia = $_POST["dia"];
$entrada = $_POST["entrada"];	//atribui��o do campo "cidade" vindo do formul�rio para variavel
$saida	= $_POST["saida"];	//atribui��o do campo "estado" vindo do formul�rio para variavel
$insere = mysql_query("INSERT INTO pcm (`cliente`,`os`, `tipo`, `operacao`, `status`, `doca`, `dia`, `entrada`, `saida`)
VALUES('$cliente','$os','$tipo', '$operacao', '$status','$doca','$dia','$entrada','$saida')");
if($insere)
{
        echo 'Dados Inseridos Com Sucesso.';
}
else{
        echo 'N�o Foi Possivel Inserir seus dados.';
}

?>
</body>
</html>