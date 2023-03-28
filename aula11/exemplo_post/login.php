<h1>Request Method : GET</h1>
<?php

//se existe, ou foi enviada, a variável usuário
if (insset($_POST['usuario'])){
    //verifica se o usuário é igual a admin e a senha igual a 123
    if($_POST['usuario'] == "admin"  && $_POST['senha'] == 123){
        echo "Logado";
    }else{
        echo "Usuário ou senha inválidos";
    }

 }else {
    //manda abrir outro arquivo, o formuláriode login
    //caso o usuário tente abrir esse arquivo pela URL
    //sem acessar o formulário de login "redirecionamento"
    header
 }
?>