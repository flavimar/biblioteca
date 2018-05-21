<?php
	class RepositorioAluno{
		private $conexao;

		public function __construct($conexao){
			$this->conexao = $conexao;
		}

		//adiciona o anime ao banco
		public function adiciona($aluno){
			$sql = "INSERT INTO aluno (nome, turma, telefone, cidade, bairro, rua, numero_casa, complementos ) VALUES (:nome, :turma, :telefone, :cidade, :bairro, :rua, :numero_casa, :complementos)";

			$query = $this->conexao->prepare($sql);

			//executa o SQL
			$query->execute(['nome'=>$aluno->getNome(),'turma'=>$aluno->getTurma(),'telefone'=>$aluno->getTelefone(), 'cidade'=>$aluno->getCidade(), 'bairro'=>$aluno->getBairro(), 'rua'=>$aluno->getRua(), 'numero_casa'=>$aluno->getNumeroCasa(), 'complementos'=>$aluno->getComplementos()]);
		}

		//busca todos os animes
		public function busca_alunos(){

			$sql = "SELECT * FROM aluno";

			/*
			*isntrução que realiza a consulta de animes
			*PDO::FETCH_CLASS serve para perdir o retorno no modelo de uma classe
			*PDO::FETCH_PROPS_LATE serve para preencher os valores depois de executar o contrutor
			*/

			$resultado = $this->conexao->query($sql, PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Aluno');

            $alunos = [];

            foreach($resultado as $aluno){
                $alunos[] = $aluno;
            }

   			return $alunos;
		}

		//busca um aluno em específico
		public function busca_alunos_por_turma($turma){
      $sql = "SELECT * FROM aluno WHERE turma = :turma order by nome";
			 $query = $this->conexao->prepare($sql);
        $query->execute(['turma'=>$turma]);
				$query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Aluno');
            $alunos = [];

            while($aluno = $query->fetch()){
                $alunos[] = $aluno;
            }
   			return $alunos;
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
		public function remove($id){
			$sql = "DELETE FROM aluno WHERE id = :id";

			$query = $this->conexao->prepare($sql);

			$query->execute(['id'=>$id]);
		}
	}
?>
