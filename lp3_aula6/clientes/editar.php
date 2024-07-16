<?php
//Pega id na url
$id = $_GET['id'];
//Constroi string com codigo SQL
$sql = "select * from clientes where id = '$id'; ";
//Inclui a conexao com o Banco de Dados
include '../includes/conexao.php';
//Executa String $SQL no Banco de Dados
$resultado = $conexao->query($sql);
//Transforma dados em um objeto
$item = mysqli_fetch_object($resultado);
?>

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
      <form action="edit.php" method="post">

      <input type="hidden" name="campoId" value="<?php echo $id; ?>">

<div class="mb-3">
  <label for="idNome" class="form-label">Nome</label>
  <input type="text" class="form-control" id="idNome" name="campoNome" value="<?php echo $item->nome; ?>" name="campoNome">
  
</div>

<div class="mb-3">
  <label for="idCategoria" class="form-label">email</label>
  <input type="text" class="form-control" id="idEmail" name="campoEmail" value="<?php echo $item->email; ?>" >
</div>

<div class="mb-3">
  <label for="idCpf" class="form-label">CPF</label>
  <input type="text" class="form-control" id="idCpf" name="campoCpf" value="<?php echo $item->cpf; ?>" >
</div>

<div class="mb-3">
<label for="idSexo" class="form-label">Sexo</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="campoSexo" id="idSexoMasc" value="1" <?php if($item->sexo ==1) echo "checked"; ?>>
  <label class="form-check-label"for="idSexoMasc">
   masculino
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="campoSexo" id="idSexoFem" value="0" <?php if($item->sexo ==0) echo "checked"; ?> >
  <label class="form-check-label" for="idSexoFem"  >
    feminino
  </label>
</div>
<div class="mb-3">
<label for="">Data de nascimento:</label>

<input  name="campoData" class="form-control" id="idData" type="date"  value="<?php echo $item->data; ?>" >
</div>

<div class="mb-3">
  <label for="idObs" class="form-label">Observação</label>
  

<textarea id="idObs" name="campoObs"class="form-control" rows="4" cols="100" >
<?php echo $item->obs; ?>
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