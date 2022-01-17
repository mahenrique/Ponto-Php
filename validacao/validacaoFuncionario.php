<?php include '../controller/Controller.php';

$controller = new Controller();



if (isset($_POST['cadastrar'])) {
	
$senha_entrada = $_POST['senha_entrada'];
$buscarSenhaEntrada = $controller->buscarSenhaEntrada($senha_entrada);
	if ($buscarSenhaEntrada == TRUE) {
		echo("<script>window.alert('Senha de entrada já existênte')
			window.location.href='../index.php';</script>");
	}else{
			$cpf = $_POST['cpf'];
			$verificaCpf = $controller->verificaCpf($cpf);
		if ($verificaCpf == TRUE) {
			echo("<script>window.alert('CPF já existêntes')
			window.location.href='../index.php';</script>");
		}else{
			$nome = $_POST['nome'];
			$senha = $_POST['senha'];
			$senha_entrada = $_POST['senha_entrada'];
			$cpf = $_POST['cpf'];
			$funcao = $_POST['funcao'];

			$controller->setNome($nome);
			$controller->setCpf($cpf);
			$controller->setSenha($senha);
			$controller->setSenha_entrada($senha_entrada);
			$controller->setFuncao($funcao);

			$controller->inserirFuncionario();
				echo ("<script>window.alert('Funcionário cadastrado com sucesso.')
				window.location.href='../index.php';</script>");
			}
		}
}


