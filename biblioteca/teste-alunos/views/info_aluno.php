<!doctype html>
<html>
  <head>
    <title>Biblioteca||InfoAlunos</title>
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

    </style>
  </head>
  <body>
   <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"><h1>Dados do Aluno</h1></div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
             <h4>Nome:</h4>
             <?php echo $aluno->getNome() ?>
          </div>
          <div class="col-md-2">
             <h4>Turma:</h4>
             <?php echo $aluno->getTurma() ?>
          </div>
          <div class="col-md-4">
          </div>
          <hr>
        </div>
        <hr>
        <div class="row">

          <div class="col-md-4">
             <h4>Cidade:</h4>
             <?php echo $aluno->getCidade() ?>
          </div>
          <div class="col-md-4">
             <h4>Bairro:</h4>
              <?php echo $aluno->getBairro()?>
          </div>

       </div>
       <hr>
       <div class="row">
         <div class="col-md-4">
            <h4>Rua:</h4>      
            <?php echo $aluno->getRua() ?>
         </div>
         <div class="col-md-4">
            <h4>N° Casa:</h4>
            <?php echo $aluno->getNumeroCasa() ?>
         </div>
          <div class="col-md-4">
            <h4>Telefone:</h4>
            <?php echo $aluno->getTelefone() ?>
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col-md-12">
           <h4>Complementos:</h4>
           <?php echo $aluno->getComplementos() ?>
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
