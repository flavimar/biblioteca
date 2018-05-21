<?php
	class Aluno{
		private $id;
		private $nome;
		private $turma;
		private $telefone;
		private $cidade;
		private $bairro;
		private $rua;
		private $numero_casa;
		private $complementos;

		function __construct($nome="",$turma="", $telefone="", $cidade="", $bairro="", $rua="", $numero_casa="", $complementos=""){
			$this->nome = $nome;
			$this->turma = $turma;
			$this->telefone = $telefone;
			$this->cidade = $cidade;
			$this->bairro = $bairro;
			$this->rua = $rua;
			$this->numero_casa = $numero_casa;
			$this->complementos = $complementos;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getTurma(){
			return $this->turma;
		}

		public function setTurma($turma){
			$this->turma = $turma;
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}

		public function getCidade(){
			return $this->cidade;
		}

		public function setCidade($cidade){
			$this->cidade = $cidade;
		}
		public function getBairro(){
			return $this->bairro;
		}

		public function setBairro($bairro){
			$this->bairro = $bairro;
		}

		public function getRua(){
			return $this->rua;
		}

		public function setRua($rua){
			$this->rua = $rua;
		}
		
		public function getNumeroCasa(){
			return $this->numero_casa;
		}

		public function setNumeroCasa($numero_casa){
			$this->numero_casa = $numero_casa;
		}
		public function getComplementos(){
			return $this->complementos;
		}

		public function setComplementos($complementos){
			$this->complementos = $complementos;
		}

	}
?>
