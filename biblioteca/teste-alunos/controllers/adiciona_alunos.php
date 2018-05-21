<?php

		  $nome = $_POST['nome'];
	    $turma = $_POST['turma'];
	    $telefone = $_POST['telefone'];
	    $cidade = $_POST['cidade'];
			$bairro = $_POST['bairro'];
			$rua = $_POST['rua'];
			$numero_casa = $_POST['numero_casa'];
			$complementos = $_POST['complementos'];


		$aluno = new Aluno($nome,$turma,$telefone,$cidade,$bairro,$rua,$numero_casa,$complementos);

		$repositorio_alunos->adiciona($aluno);




	require __DIR__."/../controllers/lista_alunos.php";
?>
