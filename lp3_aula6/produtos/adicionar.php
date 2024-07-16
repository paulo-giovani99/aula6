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
      <form action="add.php" method="post">

        <div class="mb-3">
          <label for="idNome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="idNome" name="campoNome">
        </div>

        <div class="mb-3">
          <label for="idCategoria" class="form-label">Categoria</label>
          <input type="text" class="form-control" id="idCategoria" name="campoCategoria">
        </div>

        <div class="mb-3">
          <label for="idPreco" class="form-label">Preço</label>
          <input type="text" class="form-control" id="idPreco" name="campoPreco">
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