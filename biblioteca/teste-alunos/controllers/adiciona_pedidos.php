<?php

		  $nome_aluno = $_POST['codigo_aluno'];
		  $codigo = explode("-",$nome_aluno);
      $codigo_aluno = $codigo[0];    
	    $codigo_livro = $_POST['codigo_livro'];
	    $data_entrega = $_POST['data_entrega'];
	    $data_retirada = $_POST['data_retirada'];

		$pedido = new Pedido($codigo_aluno,$codigo_livro,$data_entrega,$data_retirada);


		$repositorio_pedidos->adiciona_pedido($pedido);


require __DIR__."/../controllers/lista_pedidos.php";
?>
