<?php
 $livro = $repositorio_livros->busca_livro($_GET["id"]);

require __DIR__."/../views/info_livro.php";
 ?>
