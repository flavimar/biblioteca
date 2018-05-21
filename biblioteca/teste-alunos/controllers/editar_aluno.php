<?php
 $aluno = $repositorio_alunos->busca_aluno($_GET["id"]);

require __DIR__."/../views/editar_aluno.php";
 ?>
