<?php 

require_once'ConexaoDB.php';

/**
* 
*/
class Model extends ConexaoDB{

	public $nome;
	public $cpf;
	public $senha;
	public $senha_entrada;
	public $funcao;
	protected $tableFunc;
	protected $tableReg;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha_entrada($senha_entrada){
		$this->senha_entrada = $senha_entrada;
	}

	public function getSenha_entrada(){
		return $this->senha_entrada;
	}

	public function setFuncao($funcao){
		$this->funcao = $funcao;
	}

	public function getFuncao(){
		return $this->funcao;
	}
}

 ?>