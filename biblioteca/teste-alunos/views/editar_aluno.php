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
 <form action="index.php?rota=atualiza_aluno" method="post" enctype="multipart/form-data">
  <div class="row">
   <input type="hidden" name="id" class="form-control" value="<?php echo $aluno->getId() ?>" >
  </div>
  <div class="row">
    <div class="col-md-6">
       <label>Nome</label>
       <input type="text" class="form-control is-valid" name="nome" value="<?php echo $aluno->getNome() ?>">
    </div>
    <div class="col-md-2">
       <label>Turma</label>
       <input name="turma" value="<?php echo $aluno->getTurma() ?>" >
    </div>
    <div class="col-md-4">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
       <label for="cidade">Cidade</label>
       <input type="text" class="form-control is-valid" name="cidade" value="<?php echo $aluno->getCidade() ?>">
    </div>
    <div class="col-md-4">
       <label for="validationServer01">Bairro</label>
        <input type="text" class="form-control is-valid" name="bairro" value="<?php echo $aluno->getBairro()?>">
    </div>

 </div>
 <div class="row">
   <div class="col-md-4">
      <label for="validationServer01">Rua</label>
      <input type="text" class="form-control is-valid" name="rua" value="<?php echo $aluno->getRua() ?>">
   </div>
   <div class="col-md-1">
      <label for="validationServer01">N° Casa</label>
      <input type="text" class="form-control is-valid" name="numero_casa" value="<?php echo $aluno->getNumeroCasa() ?>">
   </div>
    <div class="col-md-4">
      <label for="">Telefone</label>
      <input type="text" class="form-control is-valid" name="telefone" value="<?php echo $aluno->getTelefone() ?>">
   </div>
 </div>
 <div class="row">
   <div class="col-md-12">
     <label for="validationServer01">Complementos</label>
     <input type="text" class="form-control is-valid" name="complementos" value="<?php echo $aluno->getComplementos() ?>">
   </div>
 </div>
 <div class="row">
   <div class="col-md-12 espaco-cima">
     <input class="btn btn-success  btn-block" type="submit" value="Enviar">
   </div>
 </div>
</form>
</div>





  </body>
<html>
