<?php
//Pega id na url
$id = $_GET['id'];
//Constroi string com codigo SQL
$sql = "select * from produtos where id = '$id'; ";
//Inclui a conexao com o Banco de Dados
include '../includes/conexao.php';
//Executa String $SQL no Banco de Dados
$resultado = $conexao->query($sql);
//Transforma dados em um objeto
$item = mysqli_fetch_object($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include "../includes/head.php"; ?>
</head>
<body>

<div class="container">
    <h3> Sistema XYZ</h3>
    <div class="row">

    <?php include "../includes/menu.php";?>

    <div class="col-9 dados">
      <h4>Lista de Produtos</h4>
      <form action="edit.php" method="post">

      <input type="hidden" name="campoId" value="<?php echo $id; ?>">

        <div class="mb-3">
          <label for="idNome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="idNome" value="<?php echo $item->nome; ?>" name="campoNome">
        </div>

        <div class="mb-3">
          <label for="idCategoria" class="form-label">Categoria</label>
          <input type="text" class="form-control" id="idCategoria" value="<?php echo $item->categoria; ?>" name="campoCategoria">
        </div>

        <div class="mb-3">
          <label for="idPreco" class="form-label">Preço</label>
          <input type="text" class="form-control" id="idPreco" value="<?php echo $item->preco; ?>" name="campoPreco">
        </div>

        <button type="submit" class="btn btn-success mb-3">Gravar</button>

        <a href="index.php">
        <button type="button" class="btn btn-secondary mb-3">Voltar</button>
        </a>

      </form>
</div>
  </div>

    </div>
    


</body>
</html>