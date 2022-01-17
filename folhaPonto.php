
<?php include('./controller/Controller.php');?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/StyleSheet.css">
    <script src="js/javascript.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="container">
<h3>Folha de Ponto</h3>
<div class="alert alert-warning alert-dismissable fade in">
  <a href="index.php" class="alert-link"><strong>Voltar!</strong> Para retornar a página inicial clique aqui</a>.
</div>
<?php
$senha_entrada = $_POST['senha_entrada'];
$senha_entrada = trim(strip_tags($senha_entrada));
$controller = new Controller();
$buscarSenhaEntrada = $controller->buscarSenhaE($senha_entrada);
//se não houve um post ou inserido senha de entrada 
//então preecha todos os campos

if ((empty($_POST)) or (empty($_POST['senha_entrada']))) {
     echo ("<script>window.alert('Digite a senha de entrada.')
            window.location.href='index.php';</script>");
}elseif ($buscarSenhaEntrada == FALSE) {
	 echo ("<script>window.alert('Senha de entrada incorreta.')
            window.location.href='index.php';</script>");
}else{ ?>
	<div class="table-responsive">
	<table class="table table-hover table-condensed">
		<thead>
			<th>Senha de Entrada</th>
			<th>Registro do Ponto</th>
		</thead>
		<?php 
		$buscarSenhaE = $controller->buscarSenhaE($senha_entrada);
		foreach($buscarSenhaE as $value){?>
			<tbody>
				<tr>
					<td><?php echo $value['senha_entrada'];?></td>
					<td><?php echo $value['datas'];?></td>
				</tr>
			</tbody>
		<?php }?>
	</table>
	</div>
<?php } ?>
<div class="alert alert-warning alert-dismissable fade in">
  <strong>Voltar!</strong> Para retornar a página inicial <a href="index.php" class="alert-link">clique aqui</a>.
</div>
</div>

</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>