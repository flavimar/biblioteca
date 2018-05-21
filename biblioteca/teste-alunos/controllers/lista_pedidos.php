<?php
if(array_key_exists("turma_s", $_GET)){
	$turma_s = (string) $_GET["turma_s"];

}

	$pedidos = $repositorio_pedidos->busca_pedidos();

	$turmas = ['1A','1B','1C','1D','2A','2B','2C','2D','3A','3B','3C','3D'];
	$turmas_alunos = [];
	foreach ($turmas as $turma) {
	  $alunos = $repositorio_alunos->busca_alunos_por_turma($turma);
	  $turmas_alunos[$turma] = $alunos;

	}


	require __DIR__."/../views/form_pedidos.php";
?>
