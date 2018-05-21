<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <title>Biblioteca|| Pedidos De Livros</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <style>




    </style>
</head>

<body>
    <!-- Body Inicio -->


    <!-- Titulo Inicio -->
    <!--Titulo Fim-->

    <!--Formulario_Cadrastrar_Livro Inicio-->
    <div class="conteiner-fluid">
      <div class="container cartao-formulario espaco-cima">
        <div class="row">
        <div class="col-md-12">
            <form method="post" action="index.php?rota=adiciona_pedidos">

              <!--Formulario_Grupo1 Inicio-->
                <div class="form-row">

                    <div class="col-md-2"></div>

                    <!-- Input_Código Inicio -->
                    <div class="col-md-3">
                    <div class="form-row">
                     <div class="col-md-6">
                      <label>Turma</label>
                       <select class="custom-select my-1 mr-sm-2" name="turma" required />
                         <option selected="#">Selecione</option>
                         <?php foreach ($turmas as $turma) {
                           echo "<option onclick=location.href='index.php?rota=lista_pedidos&turma_s=$turma' value='$turma'>$turma</option>";
                         }
                         ?>
                       </select>
                      </div>

                      <div class="col-md-6">
                      <label>Aluno</label>
                      <input list="browsers" name="codigo_aluno"  class="form-control is-valid"  required>

                      <datalist id="browsers">
                        <?php foreach($turmas_alunos[$turma_s] as $aluno):?>
                        <option value="<?php echo $aluno->getId(); ?>-<?php echo $aluno->getNome(); ?>">

                        <?php endforeach;   ?>

                      </datalist>
                    </div>
                  </div>
                    </div>
                    <!-- Input_Código Fim -->

                    <div class="col-md-2"></div>

                    <!-- Input_Autor Inicio -->
                    <div class="col-md-3">
                        <label for="validationServer02">Data de Retirada</label>
                        <input type="date" name="data_retirada" class="form-control is-valid"  required>



                    </div>
                    <!--Input_Autor Fim-->

                </div>
                <!--Formulario_Grupo1 Fim-->

                  <!--Formulario_Grupo2 Inicio-->
                     <div class="form-row">
                           <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <label for="validationServer03">Codigo do Livro</label>
                        <input type="number" name="codigo_livro" class="form-control is-valid">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <!--Input_Nome_Do_Livro Fim-->
                    <div class="col-md-2"></div>

                    <!-- Input_Editora Inicio -->
                    <div class="col-md-3">
                        <label for="validationServer04">Data Entrega</label>
                        <input type="date" name="data_entrega" class="form-control is-valid" >
                        <div class="valid-feedback">
                        </div>

                    </div>
                    <!-- Input_Editora Fim -->

                </div>
                <!-- Formulario_Grupo2 Fim -->

                <!-- Formulario_Submit Inicio -->
                <div class="row">
                   <div class="col-md-5"></div>
                    <div class="col-md-2">
                            <button class="btn botao-formulario espaco-cima" type="submit">Enviar</button>
                    </div>
                </div>

                <!-- Formulario_Submit Fim -->

            </form>
        </div>
        </div>
    </div>
  </div>
    <!-- Formulario_Cadrastrar_Livro Fim -->

    <!-- Formulario_Tabela Inicio -->

    <!-- Formulario_Tabela Fim -->

    <!-- Tabela_Cadrastrados Inicio -->
  <div class="conteiner-fluid espaco-cima">
    <div class="row">
    <!-- Tabela_Ativos -->
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table table-striped">
                <thead class="cabecario-tabela">
                    <tr>
                        <th>Turma</th>
                        <th>Aluno</th>
                        <th>Titulo</th>
                        <th>Codigo Livro</th>
                        <th>Prazo</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>

                  <?php foreach ($pedidos as $pedido):?>


                  <?php
                    $data1 = new DateTime($pedido->getDataEntrega());
                    $data2 = new DateTime($pedido->getDataRetirada());
                    $prazo = $data1->diff( $data2 );
                   ?>


                   <tr>
                        <td ><?php echo $pedido->getAluno()->getTurma(); ?> </td>
                        <td class=" " onmouseout="volta_cor(this) " onmouseover="muda_cor(this)" onclick=location.href="index.php?rota=info_aluno&id=<?php echo $pedido->getAluno()->getId();?>"><?php echo $pedido->getAluno()->getNome(); ?></td>
                        <td class=" " onmouseout="volta_cor(this) " onmouseover="muda_cor(this)" onclick=location.href="index.php?rota=info_livro&id=<?php echo $pedido->getLivro()->getId();?>"><?php echo $pedido->getLivro()->getTitulo(); ?></td>
                        <td><?php echo $pedido->getCodigoLivro(); ?></td>
                        <td><?php echo "{$prazo->days} dias restantes"; ?></td>
                         <td><a href="index.php?rota=remover_pedido&id=<?php echo $pedido->getId();?>">OK</a></td>
                    </tr>
                  <?php endforeach;  ?>




                </tbody>

          </table>

          <?php
               // HORARIO ATUAL
                //date_default_timezone_set('America/Sao_Paulo');
                //$date = date('Y-m-d H:i');
                //echo $date;
          ?>
        </div>
      </div>
     <!-- Inicio table -->
        <div class="col-md-6">
          <table class="table table-striped">
            <thead class="bg-danger">
             <tr>
              <th>Turma</th>
              <th>Aluno</th>
              <th>Titulo</th>
              <th>Codigo do Livro</th>
              <th>Atrazo</th>
              <th>Ação</th>
             </tr>
            </thead>
           <tbody>
             <tr>
              <td>1°C</td>
              <td>aluno A</td>
              <td>O Ladrão de Raios</td>
              <td>347678</td>
              <td>1 semana</td>
              <td><a>OK</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    <!-- Tabela_Cadrastrados Fim -->
<script>
  function muda_cor(x){
   x.className="verde";

  }
  function volta_cor(x){
  x.className= " ";
  }


</script>
</body>
</html>
