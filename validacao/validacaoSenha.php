<?php include '../controller/Controller.php';

$controller = new Controller();

//se não houve um post ou inserido senha ou inserido senha de entrada 
//então preecha todos os campos
if ((empty($_POST)) or ( empty($_POST['senha'])) or ( empty($_POST['senha_entrada']))) {
    echo ("<script>window.alert('Digite a matrícula de funcionário e a senha de entrada.')
            window.location.href='../index.php';</script>");
} else {
//busca todos os registros
    $buscarDataSenha = $controller->buscarRegistro();

    foreach ($buscarDataSenha as $value) {
//formatando a data para compara-lá com a data atual pois no banco está
//com horas e segundos
        substr($value['datas'], 0, -9);
        $value['senha_entrada'];
    }
    $senha_entrada = $_POST['senha_entrada'];
//formatando a data para hoje, atual com fuso horários
    $dataBanco = substr($value['datas'], 0, -9);
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
//armazeno no $today
    $today = strftime('%Y-%m-%e', strtotime('today'));

//se data lá do banco for igual a data de hoje e senha de entrada for igual
//então seu ponto já foi registrado hoje
    if (($dataBanco == $today) and ( $senha_entrada == $value['senha_entrada'])) {
        echo ("<script>window.alert('Seu PONTO já foi registrado hoje. Registre a saída')
            window.location.href='../index.php';</script>");
    } else {
//recebo senhas do input para saber se constam no 
//cadastro de funcionários
        $senha = $_POST['senha'];
        $senha_entrada = $_POST['senha_entrada'];
        $buscarSenhas = $controller->buscarSenhas($senha, $senha_entrada);

//se contra então posso registrar o ponto 
//senão senha não foi cadastrada, portanto não existe
        if ($buscarSenhas == TRUE) {
            $senha = $_POST['senha'];
            $senha_entrada = $_POST['senha_entrada'];
            $controller->setSenha($senha);
            $controller->setSenha_entrada($senha_entrada);
            $controller->inserir();
            echo ("<script>window.alert('Seu ponto foi registrado! Bom trabalho!')
            window.location.href='../index.php';</script>");
        } else {
            echo ("<script>window.alert('Seu ponto não foi registro! matrícula de funcionário ou senha de entrada INEXISTENTES! Reporte qualquer problema ao seu supervisor.')
            window.location.href='../index.php';</script>");
        }
    }
}
    