<h1>Request Method : GET</h1>

<?php



    if($_GET['usuario'] == "admin"  && $_GET['senha'] == 123){
        echo "Logado";
    }else{
        echo "Usuário ou senha inválidos";
    }
?>