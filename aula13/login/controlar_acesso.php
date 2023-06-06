<?php 

//iniciar sessão - deve ser controlada sempre
//antes de manipular a variável $_SESSION
session_start();

//verifica se existe uma variável chamda 
//$_SESSION com a key usuário, essa variável
//é criada no arquivo validar.php quando o 
//usuário digita o login e a senha corretamente.
if(!isset($_SESSION['usuario'])){
    header("Location: ../login/formulario.php");
}