<!doctype html>
<html>
  <head>
    <title>Biblioteca||Alunos</title>
    <style media="screen">
      .table-aluno{
        overflow:scroll;
        height:250px;

      }
    </style>
    </head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-11 margin1">
         <form method="post" action="index.php?rota=adiciona_alunos">
          <div class="form-row">
           <div class="col-md-2"></div>
           <div class="col-md-3">
            <label for="validationServer01">Nome</label>
            <input type="text" class="form-control is-valid" name="nome"   required>
            <div class="valid-feedback">
            </div>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-3">
            <label for="validationServer02">Telefone</label>
            <input type="text" class="form-control is-valid" name="telefone" placeholder="(88) 99999-9999"  required>
            <div class="valid-feedback">
            </div>
           </div>
          </div>
          <div class="form-row">
          <div class="col-md-2"></div>
          <div class="col-md-3">
           <label for="validationServer01">Cidade</label>
           <input type="text" class="form-control is-valid" name="cidade"   required>
           <div class="valid-feedback">
           </div>
          </div>
          </div>
          <div class="form-row">
          <div class="col-md-2"></div>
          <div class="col-md-3">
           <label for="validationServer01">N° Casa</label>
           <input type="text" class="form-control is-valid" name="numero_casa"  required>
           <div class="valid-feedback">
           </div>
          </div>
           <div class="col-md-2"></div>
           <div class="col-md-3">
            <label for="validationServer01">Bairro</label>
            <input type="text" class="form-control is-valid" name="bairro" required>
            <div class="valid-feedback">
            </div>
           </div>
          </div>
         <div class="form-row">
          <div class="col-md-2"></div>
          <div class="col-md-3">
           <label for="validationServer01">Complemento</label>
           <input type="text" class="form-control is-valid" name="complementos">
           <div class="valid-feedback">
           </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-3">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Turma</label>
             <select class="custom-select my-1 mr-sm-2" name="turma">
              <option selected="#">selecione</option>
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
         <div class="form-row">
          <div class="col-md-12 btn-cor">
            <center><input class="btn btn-success" type="submit" value="Enviar"></center>
          </div>
         </div>
        </form>
        <hr>
      </div>
    </div>
   </div>
   <div class="container-fluid">
    <div class="row">
     <div class="col-md-12 ">
      <h3><b>1° Ano</b></h3>
     </div>
    </div>
   </div>
   <div class="container margin">
    <div class="row">
     <div class="col-md-3 res">
      </div>
    </div>
   </div>
   <div class="container-fluid">
    <div class="row">
     <div class="col-md-3">
      <table class="table table-aluno table-responsive table-striped">
       <thead>
        <tr>
         <th scope="col">#</th>
         <th scope="col">Nome</th>
         <th scope="col">Editar</th>
         <th scope="col">Remover</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td scope="row"><b>1</b></td>
         <td>Mark</td>
         <td><i class="material-icons">mode_edit</i></td>
         <td><i class="material-icons">delete_forever</i></td>
        </tr>
        <tr>
         <td scope="row"><b>1</b></td>
         <td>Mark</td>
         <td><i class="material-icons">mode_edit</i></td>
         <td><i class="material-icons">delete_forever</i></td>
        </tr>
        <tr>
         <td scope="row"><b>1</b></td>
         <td>Mark</td>
         <td><i class="material-icons">mode_edit</i></td>
         <td><i class="material-icons">delete_forever</i></td>
        </tr>
        <tr>
         <td scope="row"><b>1</b></td>
         <td>Mark</td>
         <td><i class="material-icons">mode_edit</i></td>
         <td><i class="material-icons">delete_forever</i></td>
        </tr>
        <tr>
         <td scope="row"><b>1</b></td>
          <td>Mark</td>
          <td><i class="material-icons">mode_edit</i></td>
          <td><i class="material-icons">delete_forever</i></td>
        </tr>
        <tr>
         <td scope="row"><b>1</b></td>
         <td>Mark</td>
         <td><i class="material-icons">mode_edit</i></td>
         <td><i class="material-icons">delete_forever</i></td>
        </tr>
       </tbody>
      </table>
     </div>
     <div class="col-md-3">
      <table class="table table-responsive table-striped">
       <thead>
        <tr>
         <th scope="col"></th>
         <th scope="col">Nome</th>
         <th scope="col">Turma</th>
         <th scope="col">Editar</th>
         <th scope="col">Remover</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td scope="row"><b>1</b></td>
         <td>Mark</td>
         <td>Mark</td>
         <td><i class="material-icons">mode_edit</i></td>
         <td><i class="material-icons">delete_forever</i></td>
        </tr>
         <tr>
          <td scope="row"><b>1</b></td>
          <td>Mark</td>
          <td>Mark</td>
          <td><i class="material-icons">mode_edit</i></td>
          <td><i class="material-icons">delete_forever</i></td>
        </tr>
        <tr>
         <td scope="row"><b>1</b></td>
         <td>Mark</td>
         <td>Mark</td>
         <td><i class="material-icons">mode_edit</i></td>
         <td><i class="material-icons">delete_forever</i></td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="col-md-3">
         <table class="table table-responsive table-striped">
          <thead>
           <tr>
            <th scope="col"></th>
            <th scope="col">Nome</th>
            <th scope="col">Turma</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>
           </tr>
          </thead>
          <tbody>
           <tr>
            <td scope="row"><b>1</b></td>
            <td>Mark</td>
            <td>Mark</td>
            <td><i class="material-icons">mode_edit</i></td>
            <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
            <td scope="row"><b>1</b></td>
            <td>Mark</td>
            <td>Mark</td>
            <td><i class="material-icons">mode_edit</i></td>
            <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
            <td scope="row"><b>1</b></td>
            <td>Mark</td>
            <td>Mark</td>
            <td><i class="material-icons">mode_edit</i></td>
            <td><i class="material-icons">delete_forever</i></td>
          </tr>
         </tbody>
        </table>
       </div>
       <div class="col-md-3">
       <table class="table table-responsive table-striped">
       <thead>
           <tr>
             <th scope="col"></th>
             <th scope="col">Nome</th>
             <th scope="col">Turma</th>

             <th scope="col">Editar</th>
             <th scope="col">Remover</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
         </tbody>
       </table>

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 ">
          <h3><b>2° Ano</b></h3>
        </div>
      </div>
    </div>

    <div class="container margin">
      <div class="row">
        <div class="col-md-3">

          <table class="table table-responsive table-striped">




         <thead>
           <tr>
             <th scope="col"></th>
             <th scope="col">Nome</th>
             <th scope="col">Turma</th>

             <th scope="col">Editar</th>
             <th scope="col">Remover</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
         </tbody>
       </table>

        </div>
        <div class="col-md-3">

          <table class="table table-responsive table-striped">




         <thead>
           <tr>
             <th scope="col"></th>
             <th scope="col">Nome</th>
             <th scope="col">Turma</th>

             <th scope="col">Editar</th>
             <th scope="col">Remover</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
         </tbody>
       </table>

        </div>
        <div class="col-md-3">

          <table class="table table-responsive table-striped">




         <thead>
           <tr>
             <th scope="col"></th>
             <th scope="col">Nome</th>
             <th scope="col">Turma</th>

             <th scope="col">Editar</th>
             <th scope="col">Remover</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
         </tbody>
       </table>

        </div>
        <div class="col-md-3">

          <table class="table table-responsive table-striped">




         <thead>
           <tr>
             <th scope="col"></th>
             <th scope="col">Nome</th>
             <th scope="col">Turma</th>

             <th scope="col">Editar</th>
             <th scope="col">Remover</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
         </tbody>
       </table>

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h3><b>3° Ano</b></h3>
        </div>
      </div>
    </div>

    <div class="container margin">
      <div class="row">
        <div class="col-md-3">

          <table class="table table-responsive table-striped">




         <thead>
           <tr>
             <th scope="col"></th>
             <th scope="col">Nome</th>
             <th scope="col">Turma</th>

             <th scope="col">Editar</th>
             <th scope="col">Remover</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
         </tbody>
       </table>

        </div>
        <div class="col-md-3">

          <table class="table table-responsive table-striped">




         <thead>
           <tr>
             <th scope="col"></th>
             <th scope="col">Nome</th>
             <th scope="col">Turma</th>

             <th scope="col">Editar</th>
             <th scope="col">Remover</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
         </tbody>
       </table>

        </div>
        <div class="col-md-3">

          <table class="table table-responsive table-striped">




         <thead>
           <tr>
             <th scope="col"></th>
             <th scope="col">Nome</th>
             <th scope="col">Turma</th>

             <th scope="col">Editar</th>
             <th scope="col">Remover</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
         </tbody>
       </table>

        </div>
        <div class="col-md-3">

          <table class="table table-responsive table-striped">




         <thead>
           <tr>
             <th scope="col"></th>
             <th scope="col">Nome</th>
             <th scope="col">Turma</th>

             <th scope="col">Editar</th>
             <th scope="col">Remover</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
           <tr>
             <td scope="row"><b>1</b></td>

             <td>Mark</td>
             <td>Mark</td>
             <td><i class="material-icons">mode_edit</i></td>
             <td><i class="material-icons">delete_forever</i></td>
           </tr>
         </tbody>
       </table>

        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
