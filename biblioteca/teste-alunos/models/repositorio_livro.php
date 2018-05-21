<?php
	class RepositorioLivro{
		private $conexao;

		public function __construct($conexao){
			$this->conexao = $conexao;
		}

		//adiciona o anime ao banco
		public function adiciona($livro){
			$sql = "INSERT INTO lista_livros (titulo,codigo,data_publicacao,ano_publicacao,exemplar_livros,local,autor,editora,numero_registro) VALUES (:titulo,:codigo,:data_publicacao,:ano_publicacao,:exemplar_livros,:local,:autor,:editora,:numero_registro)";
			$query = $this->conexao->prepare($sql);

			//executa o SQL
			$query->execute(['titulo'=>$livro->getTitulo(),'numero_registro'=>$livro->getNumero_registro(),'codigo'=>$livro->getCodigo(),'data_publicacao'=>$livro->getData_publicacao(), 'ano_publicacao'=>$livro->getAno_publicacao(), 'exemplar_livros'=>$livro->getExemplar_livros(), 'local'=>$livro->getLocal(), 'autor'=>$livro->getAutor(), 'editora'=>$livro->getEditora()]);

		}

		public function busca_livros(){

 		 $sql = "SELECT * FROM lista_livros";

 		 /*
 		 *isntrução que realiza a consulta de animes
 		 *PDO::FETCH_CLASS serve para perdir o retorno no modelo de uma classe
 		 *PDO::FETCH_PROPS_LATE serve para preencher os valores depois de executar o contrutor
 		 */
 		 $resultado = $this->conexao->query($sql, PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Livro');

 					 $livros = [];

 					 foreach($resultado as $livro){
 							 $livros[] = $livro;
 					 }

 			 return $livros;
 	 }



















	 public function busca_livro($id){
			$sql = "SELECT * FROM lista_livros WHERE id=:id";

			$query = $this->conexao->prepare($sql);

			$query->execute(['id'=>$id]);


       $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Livro');
       $livro = $query->fetch();
			return $livro;
		}






		//atualiza os dados de um aluno
		public function atualiza($livro){
			$sql = "UPDATE lista_livros SET titulo=:titulo,numero_registro=:numero_registro,codigo=:codigo,data_publicacao=:data_publicacao,ano_publicacao=:ano_publicacao,exemplar_livros=:exemplar_livros,local=:local,autor=:autor,editora=:editora WHERE id=:id";

			$query = $this->conexao->prepare($sql);

			//executa o SQL
			$query->execute(['titulo'=>$livro->getTitulo(),'numero_registro'=>$livro->getNumero_registro(),'codigo'=>$livro->getCodigo(),'data_publicacao'=>$livro->getData_publicacao(), 'ano_publicacao'=>$livro->getAno_publicacao(), 'exemplar_livros'=>$livro->getExemplar_livros(), 'local'=>$livro->getLocal(), 'autor'=>$livro->getAutor(), 'editora'=>$livro->getEditora(), 'id'=>$livro->getId()]);

		}












//remove um aluno pelo id
		public function remove($id){
			$sql = "DELETE FROM lista_livros WHERE id = :id";

			$query = $this->conexao->prepare($sql);

			$query->execute(['id'=>$id]);
		}
	}
?>
