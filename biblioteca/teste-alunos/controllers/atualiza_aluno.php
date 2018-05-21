<?php


	$aluno_atualizado = new Aluno();
  $aluno_atualizado->setId($_POST["id"]);
  $aluno_atualizado->setNome($_POST["nome"]);
	$aluno_atualizado->setTurma($_POST["turma"]);
  $aluno_atualizado->setCidade($_POST["cidade"]);
	$aluno_atualizado->setTelefone($_POST['telefone']);
	$aluno_atualizado->setBairro($_POST['bairro']);
	$aluno_atualizado->setRua($_POST['rua']);
	$aluno_atualizado->setNumeroCasa($_POST['numero_casa']);
	$aluno_atualizado->setComplementos($_POST['complementos']);

   $repositorio_alunos->atualiza($aluno_atualizado);

	 header('Location: index.php?rota=lista_alunos');
?>
