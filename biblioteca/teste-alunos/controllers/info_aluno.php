<?php
 $aluno = $repositorio_alunos->busca_aluno($_GET["id"]);

require __DIR__."/../views/info_aluno.php";
 ?>
