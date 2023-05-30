<?php

 require "dados.php" ;

 if(isset($_GET['id'])){
    //apaga um elemento do vetor que possui o indice 
    //igual ao valor da variável id
    $id = $_GET['id'];
    unset($alunos[$id]);
 }

 if(isset($_POST['nome'])){
$alunos[] = [
   "ra" => $_POST['ra'],
   "nome" => $_POST['nome'],
   "turma" => $_POST['turma']
];
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>RA</th>
            <th>NOME</th>
            <th>TURMA</th>
            <th>AÇÕES</th>
        </tr>

        <?php foreach($alunos as $key => $aluno){?>
        <tr aling="center">
            <td><?php echo $aluno["ra"] ?> </td>
            <td><?php echo $aluno["nome"] ?></td>
            <td><?php echo $aluno["turma"] ?></td>
            <td><a href="tabelaa.php?id=<?php echo $key; ?>">Excluir </a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>