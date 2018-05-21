<?php
	class RepositorioPedidos{
		private $conexao;
		private $repositorio_alunos;

		public function __construct($conexao , $repositorio_alunos , $repositorio_livros){
			$this->conexao = $conexao;
			$this->repositorio_alunos = $repositorio_alunos;
      $this->repositorio_livros = $repositorio_livros;
		}

		//adiciona o anime ao banco
		public function adiciona_pedido($pedido){
			$sql = "INSERT INTO pedidos (codigo_aluno,codigo_livro,data_entrega,data_retirada) VALUES (:codigo_aluno,:codigo_livro,:data_entrega,:data_retirada)";

			$query = $this->conexao->prepare($sql);
			//executa o SQL
			$query->execute(['codigo_aluno'=>$pedido->getCodigoAluno(),'codigo_livro'=>$pedido->getCodigoLivro(),'data_entrega'=>$pedido->getDataEntrega(), 'data_retirada'=>$pedido->getDataRetirada()]);


		}


		//pega os alunos do Repositorio dos alunos e os pedidos da função busca_pedidos_por_id_aluno e junta eles
		public function busca_pedidos(){

            $pedidos = [];

            $alunos = $this->repositorio_alunos->busca_alunos();
            $livros = $this->repositorio_livros->busca_livros();
						


							foreach ($alunos as $aluno) {
                   foreach ($livros as $livro) {




								 $pedidos_de_aluno = RepositorioPedidos::busca_pedidos_por_id_aluno($aluno->getId(),$livro->getCodigo());

								 foreach ($pedidos_de_aluno as $pedido) {
                    $pedido->setAluno($aluno);
										$pedido->setLivro($livro);


								 }

								 foreach ($pedidos_de_aluno as $pedido) {
								 		$pedidos[]= $pedido;

								 }



}
						}

         return $pedidos;
		}

		//busca todos os pedidos
		public function busca_pedidos_por_id_aluno($codigo_aluno,$codigo_livro){
      $sql = "SELECT * FROM pedidos WHERE codigo_aluno = :codigo_aluno AND codigo_livro = :codigo_livro";
			 $query = $this->conexao->prepare($sql);
        $query->execute(['codigo_aluno'=>$codigo_aluno,'codigo_livro'=>$codigo_livro]);
				$query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Pedido');
            $pedidos = [];

            while($pedido = $query->fetch()){
                $pedidos[] = $pedido;


            }
   			return $pedidos;
		}



		public function busca_aluno($id){
			$sql = "SELECT * FROM aluno WHERE id=:id";

			$query = $this->conexao->prepare($sql);

			$query->execute(['id'=>$id]);


       $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Aluno');
       $aluno = $query->fetch();
			return $aluno;
		}
		//atualiza os dados de um aluno
		public function atualiza($aluno){
			$sql = "UPDATE aluno SET nome=:nome,turma=:turma,telefone=:telefone,cidade=:cidade,bairro=:bairro,rua=:rua,numero_casa=:numero_casa,complementos=:complementos WHERE id=:id";

			$query = $this->conexao->prepare($sql);

			$query->execute(['nome'=>$aluno->getNome(),'turma'=>$aluno->getTurma(),'telefone'=>$aluno->getTelefone(), 'cidade'=>$aluno->getCidade(), 'bairro'=>$aluno->getBairro(), 'rua'=>$aluno->getRua(), 'numero_casa'=>$aluno->getNumeroCasa(), 'complementos'=>$aluno->getComplementos(), 'id'=>$aluno->getId()]);

		}



		//remove um aluno pelo id
		public function remove_pedido($id){
			$sql = "DELETE FROM pedidos WHERE id = :id";

			$query = $this->conexao->prepare($sql);

			$query->execute(['id'=>$id]);
		}
	}
?>
