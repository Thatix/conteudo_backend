<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="atualizar.php" method="post">
        <h1>Atualizar Dados</h1>
        <hr>
        <label>ID</label><br>
        <input type="text" name="idlivro" value="<?= $_GET['id']?>"><br>

        <label>Título</label><br>
        <input type="text" name="titulo" value="<?php echo isset($livro) ? $livro->titulo : '' ?>"><br>

        <label>Autor</label><br>
        <input type="text" name="autor" value="<?php echo isset($livro) ? $livro->autor : '' ?>"><br>

        <label>Ano</label><br>
        <input type="text" name="ano" value="<?php echo isset($livro) ? $livro->ano : '' ?>"><br>

        <label>Editora</label><br>
        <input type="text" name="editora" value="<?php echo isset($livro) ? $livro->editora : '' ?>"><br>
        <hr>
        <button type="submit">Atualizar</button>
        
    </form>
</body>
</html>