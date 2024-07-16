<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include "../includes/head.php"; ?>
</head>
<body>

    <div class="container">
    <h3> Sistema XYZ</h3>
    <div class="row">

    <?php include "../includes/menu.php";?>

    <div class="col-9 dados">
      <h4>Lista de clientes</h4>
      <form action="add.php" method="post">

<div class="mb-3">
  <label for="idNome" class="form-label">Nome</label>
  <input type="text" class="form-control" id="idNome" name="campoNome">
</div>

<div class="mb-3">
  <label for="idEmail" class="form-label">E-mail</label>
  <input type="text" class="form-control" id="idEmail" name="campoEmail">
</div>

<div class="mb-3">
  <label for="idCpf" class="form-label">CPF</label>
  <input type="text" class="form-control" id="idCpf" name="campoCpf">
</div>

<div class="mb-3">
<label for="idSexo" class="form-label">Sexo</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="campoSexo" id="idSexoMasc" value="1">
  <label class="form-check-label" for="idSexoMasc">
   masculino
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="campoSexo" id="idSexoFem"  value="0">
  <label class="form-check-label" for="idSexoFem">
    feminino
  </label>
</div>
<div class="mb-3">
<label for="idData">Data de nascimento:</label>

<input name="campoData"  class="form-control"  id="idData" type="date" >
</div>

<div class="mb-3">
  <label for="idObs" class="form-label">Observação</label>
  

<textarea id="idObs" class="form-control" name="campoObs" rows="4" cols="100">
</textarea>
</div>

<button type="submit" class="btn btn-success mb-3">Gravar</button>

<a href="index.php">
<button type="button" class="btn btn-secondary mb-3">Voltar</button>
</a>

</form>
</div>
  </div>

    </div>
    
    <?php include "../includes/js.php"; ?>
</body>
</html>