<?php
	class Livro{
		private $titulo;
		private $codigo;
		private $data_publicacao;
		private $ano_publicacao;
		private $exemplar_livros;
		private $local;
		private $autor;
		private $numero_registro;
		private $editora;
		private $id;

		function __construct($titulo="", $codigo="",$data_publicacao="", $ano_publicacao="", $exemplar_livros="", $local="", $autor="", $numero_registro="", $editora=""){

			$this->titulo = $titulo;
			$this->codigo = $codigo;
			$this->data_publicacao = $data_publicacao;
			$this->ano_publicacao = $ano_publicacao;
			$this->exemplar_livros = $exemplar_livros;
			$this->local = $local;
			$this->autor = $autor;
			$this->numero_registro = $numero_registro;
			$this->editora = $editora;
			$this->numero_registro = $numero_registro;

		}
		public function getId(){
 		 return $this->id;
 	 }


	 		public function setId($id){
	 			$this->id = $id;
	 		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function getCodigo(){
			return $this->codigo;
		}

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function getData_publicacao(){
			return $this->data_publicacao;
		}

		public function setData_publicacao($data_publicacao){
			$this->data_publicacao = $data_publicacao;
		}

		public function getAno_publicacao(){
			return $this->ano_publicacao;
		}

		public function setAno_publicacao($ano_publicacao){
			$this->ano_publicacao = $ano_publicacao;
		}

		public function getExemplar_livros(){
			return $this->exemplar_livros;
		}

		public function setExemplar_livros($exemplar_livros){
			$this->exemplar_livros = $exemplar_livros;
		}
		public function getLocal(){
			return $this->local;
		}

		public function setLocal($local){
			$this->local = $local;
		}

		public function getNumero_registro(){
			return $this->numero_registro;
		}

		public function setNumero_registro($numero_registro){
			$this->numero_registro = $numero_registro;
		}
		public function getEditora(){
			return $this->editora;
		}

		public function setEditora($editora){
			$this->editora = $editora;
		}

		public function getAutor(){
			return $this->autor;
		}

		public function setAutor($autor){
			$this->autor = $autor;
		}
	}
?>
