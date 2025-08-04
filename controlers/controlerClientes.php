<?php
require_once '../dao/ClienteDao.inc.php';

$op = $_REQUEST['pOpcao'];

if($op == 1){ // autenticar
    $email = $_REQUEST['pEmail'];
    $senha = $_REQUEST['pSenha'];

    $dao = new ClienteDao();
    $cliente = $dao->autenticar($email, $senha);

    if($cliente != NULL){ // achei
        session_start();
        $_SESSION['cliente'] = $cliente;
        header("Location: controlerProduto.php?opcao=2");
    }
    else{ // não achei -- erro!
        header("Location:../views/formLogin.php?erro=1");
    }


}
if($op == 2){ // logout
    session_start();
    unset($_SESSION['cliente']);
    header("Location:../views/index.php");
}

?>