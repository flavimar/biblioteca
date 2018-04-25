
<?php
    include "views/cabecalho.html";
    require "conexao.php";
    require "models/aluno.php";
    require "models/repositorio_alunos.php";

    $repositorio_alunos = new RepositorioAluno($conexao);

     $rota = "lista";

    if(array_key_exists("rota", $_GET)){
      $rota = (string) $_GET["rota"];
    }

    if(is_file("controllers/{$rota}.php")){
      require "controllers/{$rota}.php";
    } else {
      echo "Rota não encontrada";
    }




?>
