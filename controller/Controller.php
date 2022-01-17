<?php 
include __DIR__ . '/../conexaoDB/Model.php';


class Controller extends Model{
    
    public $tableFunc = 'tb_funcionarios';
    public $tableReg = 'tb_registro';
    
    
//busca data e senha    
    public function buscarDataSenha(){
       $sql = "SELECT * FROM $this->tableReg WHERE senha_entrada =: senha_entrada, datas = :datas";
       $stmt = ConexaoDB::prepare($sql);
       $stmt->bindParam(':senha_entrada', $this->senha_entrada, PDO::PARAM_INT);
       $stmt->bindParam(':datas', $datas);
       $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
//registra o ponto
    public function inserir(){
      $sql = "INSERT INTO $this->tableReg (senha, senha_entrada) VALUE(?,?)";
      $stmt = ConexaoDB::prepare($sql);
      $stmt->bindValue(1, $this->senha, PDO::PARAM_INT);
      $stmt->bindValue(2, $this->senha_entrada, PDO::PARAM_INT);
      return $stmt->execute();
    }
//busca registro inseridos na tabela de registros
    public function buscarRegistro(){
        $sql = "SELECT * FROM $this->tableReg";
        $stmt = ConexaoDB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
//verifica se senhas já foram inseridas    
    public function buscarSenhas($senha, $senha_entrada){
        $sql = "SELECT * FROM $this->tableFunc WHERE senha = ? AND senha_entrada = ?";
        $stmt = ConexaoDB::prepare($sql);
        $stmt->bindValue(1, $senha);
        $stmt->bindValue(2, $senha_entrada);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($stmt) > 0){
            TRUE;
        } else {
            FALSE;
        }
    } 

//verifica senha de entrada
    public function buscarSenhaEntrada($senha_entrada){
    	$sql = "SELECT * FROM $this->tableFunc WHERE senha_entrada = :senha_entrada";
    	$stmt = ConexaoDB::prepare($sql);
    	$stmt->bindValue('senha_entrada', $senha_entrada, PDO::PARAM_INT);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_ASSOC);
    	if (count($stmt) > 0) {
    		TRUE;
    	}else{
    		FALSE;
    	}
    }

//buscar na tabela de funcionários     
    public function buscarFuncionario(){
        $sql = "SELECT * FROM $this->tableFunc";
        $stmt = ConexaoDB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

//filtrar por senha de entrada
    public function buscarSenhaE($senha_entrada){
    	$sql = "SELECT * FROM $this->tableReg WHERE senha_entrada LIKE '%".$senha_entrada."%'";
    	$stmt = ConexaoDB::prepare($sql);
    	$stmt->execute();
    	return $stmt->fetchAll();
    }

//verifica senha de entrada
    public function verificaCpf($cpf){
    	$sql = "SELECT * FROM $this->tableFunc WHERE cpf = :cpf"; 
    	$stmt = ConexaoDB::prepare($sql);
    	$stmt->bindValue('cpf', $cpf);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_ASSOC);
    	if (count($stmt) > 0) {
    		TRUE;
    	}else{
    		FALSE;
    	}
    }

//cadastras funcionário
    public function inserirFuncionario(){
    	$sql = "INSERT INTO $this->tableFunc (nome, cpf, senha, senha_entrada, funcao) VALUES(?,?,?,?,?)";
    	$stmt = ConexaoDB::prepare($sql);
    	$stmt->bindValue(1, $this->nome, PDO::PARAM_STR);
    	$stmt->bindValue(2, $this->cpf, PDO::PARAM_STR);
    	$stmt->bindValue(3, $this->senha, PDO::PARAM_INT);
    	$stmt->bindValue(4, $this->senha_entrada, PDO::PARAM_INT);
    	$stmt->bindValue(5, $this->funcao, PDO::PARAM_STR);
    	return $stmt->execute();
    }

}