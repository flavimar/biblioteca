<?php
   $repositorio_pedidos->remove_pedido($_GET["id"]);
   require __DIR__."/../controllers/lista_pedidos.php";
?>
