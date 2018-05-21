<?php
	class Pedido{
		private $id;
		private $aluno;
		private $livro;
		private $codigo_aluno;
		private $codigo_livro;
		private $data_entrega;
		private $data_retirada;

		function __construct($codigo_aluno="",$codigo_livro="", $data_entrega="", $data_retirada="", $aluno="", $livro="" ){
			$this->codigo_aluno = $codigo_aluno;
			$this->codigo_livro = $codigo_livro;
			$this->data_entrega = $data_entrega;
			$this->data_retirada = $data_retirada;
			$this->aluno = $aluno;
			$this->livro = $livro;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getCodigoAluno(){
			return $this->codigo_aluno;
		}

		public function setCodigoAluno($codigo_aluno){
			$this->codigo_aluno = $codigo_aluno;
		}
		public function getLivro(){
			return $this->livro;
		}

		public function setLivro($livro){
			$this->livro = $livro;
		}

		public function getCodigoLivro(){
			return $this->codigo_livro;
		}

		public function setCodigoLivro($codigo_livro){
			$this->codigo_livro = $codigo_livro;
		}

		public function getDataEntrega(){
			return $this->data_entrega;
		}

		public function setDataEntrega($data_entrega){
			$this->$data_entrega = $data_entrega;
		}

		public function getDataRetirada(){
			return $this->data_retirada;
		}

		public function setDataRetirada($data_retirada){
			$this->data_retirada = $data_retirada;
		}
		public function getAluno(){
			return $this->aluno;
		}

		public function setAluno($aluno){
			$this->aluno = $aluno;
		}


	}
?>
