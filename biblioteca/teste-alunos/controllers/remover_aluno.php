<?php
  $repositorio_alunos->remove($_GET["id"]);
  require __DIR__."/../controllers/lista_alunos.php";
?>
