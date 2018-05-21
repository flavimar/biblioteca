
<!doctype html>
<html>
  <head>
    <title>Biblioteca||Alunos</title>
    <link rel="shortcut icon" href="img/1.ico" />
      <!--Icons Do Site-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
    /* fallback */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/materialicons/v36/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -moz-font-feature-settings: 'liga';
  -moz-osx-font-smoothing: grayscale;
}







  </style>
  </head>
  <body>
   <div class="container-fluid">
      <div class="container espaco-cima cartao-formulario ">
        <div class="col-md-12">
         <form class="espaco-cima" method="post" action="index.php?rota=adiciona_alunos">
          <div class="form-row">
           <div class="col-md-2"></div>
           <div class="col-md-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control is-valid" name="nome"  required>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-3">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control is-valid" name="telefone" placeholder="(88) 99999-9999" required>
           </div>
          </div>
          <div class="form-row">
           <div class="col-md-2"></div>
           <div class="col-md-3">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control is-valid" name="cidade" required>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-3">
            <label for="validationServer01">Bairro</label>
            <input type="text" class="form-control is-valid" name="bairro" required>
           </div>
          </div>
          <div class="form-row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
             <label for="rua">Rua</label>
             <input type="text" class="form-control is-valid" name="rua" placeholder="" required>
            </div>

          <div class="col-md-2"></div>
          <div class="col-md-3">
           <label for="numero_casa">N° Casa</label>
           <input type="text" class="form-control is-valid" name="numero_casa" required>

          </div>
        </div>

         <div class="form-row">
          <div class="col-md-2"></div>
          <div class="col-md-3">
           <label for="complementos">Complementos</label>
           <input type="text" class="form-control is-valid" name="complementos" placeholder="">
          </div>
          <div class="col-md-2"></div>
         <div class="col-md-3">
           <label class="my-1 mr-2" for="turma">Turma</label>
            <select class="custom-select my-1 mr-sm-2" name="turma"
             <option selected="#">Selecione</option>
             <option value="1A">1° A</option>
             <option value="1B">1° B</option>
             <option value="1C">1° C</option>
             <option value="1D">1° D</option>
             <option value="2A">2° A</option>
             <option value="2B">2° B</option>
             <option value="2C">2° C</option>
             <option value="2D">2° D</option>
             <option value="3A">3° A</option>
             <option value="3B">3° B</option>
             <option value="3C">3° C</option>
             <option value="3D">3° D</option>
           </select>
         </div>
         </div>
	       <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-2">
           <button class="btn botao-formulario espaco-cima" type="submit">Enviar</button>
          </div>
         </div>
      </form>
    </div>
   </div>

    <div class="row">
     <div class="col-md-12 espaco-cima verde center">
      <h3><b>1° Ano</b></h3>
     </div>
    </div>

    <?php for($i=1 ; $i<=3 ; $i++):
      if($i < 2){  ?>
    <div class="row">
    <?php foreach($turmas as $turma): ?>
     <?php if($turma == "2A"){
       echo "  <div class='col-md-12 espaco-cima verde center' >
           <h3><b>2° Ano</b></h3>
         </div> ";
     }
     ?>
       <?php if($turma == "3A"){
         echo "  <div class='col-md-12 espaco-cima verde center'>
             <h3><b>3° Ano</b></h3>
           </div> ";
       }
        ?>
     <div class="col-md-3 espaco-cima">

       <h3><?php echo $turma;?></h3>
    <div class="table-responsive tabela_aluno ">
      <table class="table table-hover">
       <thead class="sticky-top cabecario-tabela">
        <tr>
         <th>#</th>
         <th>Nome</th>
         <th>Remover</th>
        </tr>
       </thead>
       <tbody>
         <?php $i=0; ?>
         <?php foreach($turmas_alunos[$turma] as $aluno):?>
        <?php
          $i++;
          ?>
           <tr onclick=location.href="index.php?rota=editar_aluno&id=<?php echo $aluno->getId();?>">

            <td scope="row"><?php echo $i; ?></td>
            <td><?php echo $aluno->getNome(); ?></td>
            <td ><a href="index.php?rota=remover_aluno&id=<?php echo $aluno->getId();?>"><i class="material-icons">delete_forever</i></a></td>

          <?php endforeach; ?>
       </tbody>
      </table>
    </div>
     </div>
   <?php endforeach; ?>
      </div>
   <?php } ?>
 <?php endfor; ?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>
