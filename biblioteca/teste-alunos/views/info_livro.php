<!doctype html>
<html>
  <head>
    <title>Biblioteca||InfoLivro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
     body{
       background:#047737;
     }
     .container{
      border-radius:20px;
       margin-top:100px;
       background:#fff;
       padding:20px;
     }
     .borda{
       border-left:solid #d3d3d3 1px;

     }
     span{
       font-size:20px;
       font-style: italic;
       color:green;

     }

    </style>
  </head>
  <body>









   <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"><h1>Dados do Livro</h1></div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-4">
             <h4>Codigo:</h4>
            <span><?php echo $livro->getCodigo() ?></span>
          </div>
          <div class="col-md-4 borda">
             <h4>Data de Publicação:</h4>
            <span><?php echo $livro->getData_publicacao()?></span>
          </div>
          <div class="col-md-4 borda">
             <h4>Ano de Publicação:</h4>
            <span><?php echo $livro->getAno_publicacao() ?></span>
          </div>
          <hr>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
             <h4>Titulo:</h4>
              <span><?php echo $livro->getTitulo() ?><span>
          </div>
          <div class="col-md-4 borda">
           <h4>Numero de Registro</h4>
            <span><?php echo $livro->getNumero_registro() ?></span>
          </div>


       </div>
       <hr>
       <div class="row">
         <div class="col-md-4">
            <h4>Ex. Livros:</h4>
            <span><?php echo $livro->getExemplar_livros() ?></span>
         </div>
         <div class="col-md-4 borda">
            <h4>Autor:</h4>
          <span><?php echo $livro->getAutor() ?></span>
         </div>
          <div class="col-md-4 borda">
            <h4>Editora:</h4>
            <span><?php echo $livro->getEditora() ?></span>
         </div>
       </div>


       <div class="row">
         <div class="col-md-12 espaco-cima">
            <button class="btn btn-block verde" onclick=location.href="index.php?rota=lista_pedidos">Voltar</button>
         </div>
       </div>

</div>





  </body>
<html>
